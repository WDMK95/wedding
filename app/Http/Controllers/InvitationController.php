<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
        return view('welcome')->with(['users' => User::where('group_id', $hash->group_id)->get(['name', 'hash', 'attending'])]);
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
        return view('list-users', ['users' => User::all()]);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
