<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // define middleware on route more readable than this
    // For Learning To show different method of define midlleware
    // public function __construct()
    // {
    //     // $this->middleware(['auth'])->except(['index','another action name',.....]);
    //     // $this->middleware(['auth','another middleware'])->except(['index']);
    //     $this->middleware(['auth'])->only('index');
    // }

    public function index()
    {
        return view('admin.admin-dashboard');
    }
}