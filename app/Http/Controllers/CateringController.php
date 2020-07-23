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

    /* catering store and update */
    public function storeFormCatering(Request $request, $id = null){
        $storeFormCatering = $this->repo->storeFormCatering($request, $id);
        if (!$storeFormCatering['status']){
            return response()->json('Crate or update error: ' . json_encode($storeFormCatering['message']));
        }
        return response()->json('Crate or update success: '. json_encode($storeFormCatering['message']));
    }
}
