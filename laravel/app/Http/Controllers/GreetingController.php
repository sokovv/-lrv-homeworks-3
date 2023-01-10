<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class GreetingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        echo "Привет авторизированный пользователь $user->name. <br>";
        echo "Твоя электронная почта $user->email. <br>";
        echo "Твой id $user->id.";
    }
}
