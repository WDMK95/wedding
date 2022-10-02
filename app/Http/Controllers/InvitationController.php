<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\RateLimiter;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $hash)
    {
        return view('invitation')->with(['users' => User::where('group_id', $hash->group_id)->get(['name', 'hash', 'attending'])]);
    }

    public function rsvp(Request $request, User $hash)
    {
        $executed = RateLimiter::attempt(
            'send-message:' . $hash->hash,
            $perMinute = 45,
            function () {
                // Send message...
            }
        );

        if (!$executed) {
            return response(['message' => 'Почекајте некоја минута и обидете се повторно.']);
        }

        foreach ($request->users as $user) {
            User::where('name', data_get($user, 'name', ''))->where('hash', data_get($user, 'hash', ''))->update([
                'attending' => data_get($user, 'attending', false)
            ]);
        }

        $hash->answered_rsvp = 1;
        $hash->save();

        return response(['message' => 'Вашиот избор успешно е зачуван.',]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function export(Request $request)
    {
        return view('list-users', ['users' => User::orderBy('group_id', 'DESC')->get()]);
    }
    public function raw(Request $request)
    {
        return response()->json(['users' => User::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function importData()
    {
        Artisan::call('guests:import');
        return response()->json(['message' => 'Uspesno importirani od speradsheet']);
    }
}
