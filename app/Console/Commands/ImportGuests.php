<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class ImportGuests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'guests:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import guests from google sheets url';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // User::where('id', '<', 5000)->delete();
        $spreadsheet_url = env("GOOGLE_SHEET_URL");

        if (!ini_set('default_socket_timeout', 15)) echo "<!-- unable to change socket timeout -->";
        $data = [];
        if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                $data[] = $row;
            }
            fclose($handle);
        } else {

            dd("Problem reading csv");
        }

        unset($data[0]);

        logger(json_encode($data));

        foreach ($data as $row) {
            if (User::where('excel_id', $row[0])->exists()) {
                logger($row);
                User::where('excel_id', $row[0])->update([
                    'name' => $row[1],
                    'group_id' => $row[2],
                ]);
            } else {
                $hash = Str::random(64);
                User::create([
                    'excel_id' => $row[0],
                    'name' => $row[1],
                    'group_id' => $row[2],
                    'hash' => $hash
                ]);
            }
        }
        return 0;
    }
}
