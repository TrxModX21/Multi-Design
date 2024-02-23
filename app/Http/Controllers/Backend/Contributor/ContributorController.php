<?php

namespace App\Http\Controllers\Backend\Contributor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index()
    {
        return view('contributor.dashboard');
    }
}
