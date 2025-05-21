<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PublicProfileController extends Controller
{
    public function show($username)
{
    $user = User::where('name', $username)->with(['projects', 'skills'])->firstOrFail();

    return view('profile.show', compact('user'));
}

}
