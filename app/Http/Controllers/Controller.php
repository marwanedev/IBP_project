<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

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
