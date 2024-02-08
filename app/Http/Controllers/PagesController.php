<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function userprofile()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('userprofile',compact('user'));
    }
}
