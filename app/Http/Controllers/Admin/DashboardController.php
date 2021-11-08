<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    Public Function index(Request $request)
    {
        return view('pages.admin.dashboard');
    }
}
