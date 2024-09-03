<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TestController extends Controller
{
    public function index()
    {

        User::create([
            'name' => 'Sam Abraham',
            'email' => 'i.samabraham@gmail.com',
            'password' => Hash::make('plain-text')
        ])->save();
        //// $hashed = Hash::make('password', [
        //     'rounds' => 12,
        // ]);
        // print_r($hashed); echo '<br>';


        // $hashed1 = Hash::make('password', [
        //     'memory' => 1024,
        //     'time' => 2,
        //     'threads' => 2,
        // ]);
        // print_r($hashed1); echo '<br>';

        // $hashed2 = Hash::make('plain-text');
        // print_r($hashed2); echo '<br>';
    }
}
