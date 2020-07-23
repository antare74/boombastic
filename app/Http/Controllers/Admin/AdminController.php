<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repo\Repository;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $repo;

    public function __construct(){
        $this->repo = new Repository();
    }

    public function index(){
        return view('pages.admin.dashboard.index');
    }

    public function deleteFormCatering($id){
        $delete = $this->repo->deleteFormCatering($id);
        if (!$delete['status']){
            return redirect()->back()->with('error', $delete['message']);
        }
        return redirect()->back()->with('success', $delete['message']);
    }

    public function storeFormContact(Request $request, $id){
        $caterings = $this->repo->storeFormCatering($request, $id);
        if (!$caterings['status']){
            return redirect()->back()->with('error', $caterings['message']);
        }
    }

    public function indexFormCatering($id = null){
        if (!$id){
            $caterings = $this->repo->getAllCatering();
            return view('pages.admin.catering.index', compact('caterings'));
        }
        $caterings = $this->repo->findCateringById($id);
        if ($caterings){
            return view('pages.admin.catering.detail', compact('caterings'));
        }
    }


}
