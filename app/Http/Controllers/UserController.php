<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\UserExport;

use App\Models\User;

class UserController extends Controller
{
    public function exportUsers()
    {
        $users = User::select('email', 'firstname', 'lastname', 'nickname','register','facebook','line','telephone','day1','song1','link1','artist1')->get();

        $data = [];

        foreach ($users as $user) {
            if($user->register == 1){
                $data[] = [
                    'Email' => $user->email,
                    'First Name' => $user->firstname,
                    'Last Name' => $user->lastname,
                    'Nickname' => $user->nickname,
                    'Register_status' => $user->register,
                    'facebook' => $user->facebook,
                    'line' => $user->line,
                    'telephone' => $user->telephone,
                    'first_round_date' => $user->day1,
                    'first_round_song' => $user->song1,
                    'first_round_link' => $user->link1,
                    'first_round_artist' => $user->artist1,
                ];
            }
        }

        return Excel::download(new UserExport($data), 'users.xlsx');
    }
}
