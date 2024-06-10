<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Ensure this line is present

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function announcements()
    {
        // Fetch and return announcements view for users
    }

    public function createMessage()
    {
        return view('user.createMessage');
    }

    public function storeMessage(Request $request)
    {
        // Logic to store user message
    }
}
