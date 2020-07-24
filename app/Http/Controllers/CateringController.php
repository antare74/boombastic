<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repo\Repository;
use Illuminate\Http\Request;

class CateringController extends Controller
{
    protected $repo;

    public function __construct(){
        $this->repo = new Repository();
    }

}
