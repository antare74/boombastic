<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repo\Repository;
use App\Rules\PhoneNumber;

class AdminController extends Controller
{
    protected $phoneService;

    public function __construct(){
        $this->phoneService = new Repository();
    }

    public function index(){
        return view('pages.admin.dashboard.index');
    }

}
