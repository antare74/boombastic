<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repo\Repository;

class ContactController extends Controller
{
    protected $repo;

    public function __construct(){
        $this->repo = new Repository();
    }
}
