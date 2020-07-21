<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repo\Repository;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $repo;

    public function __construct(){
        $this->repo = new Repository();
    }

    /* contact and contact detail */
    public function indexFormContact($id = null){
        return view('form-test');
    }

    /* contact store and update */
    public function storeFormContact(Request $request, $id = null){
        $storeFormContact = $this->repo->storeFormContact($request, $id);
        if (!$storeFormContact['status']){
            return response()->json('Crate or update error: ' . json_encode($storeFormContact['message']));
        }
        return response()->json('Crate or update success: '. json_encode($storeFormContact['message']));
    }

    /* contact softdeletes */
    public function deleteFormContact($id){
        return $this->repo->deleteFormContact($id);
    }

}
