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

    public function deleteFormContact($id){
        $delete = $this->repo->deleteFormContact($id);
        if (!$delete['status']){
            return redirect()->back()->with('error', $delete['message']);
        }
        return redirect()->back()->with('success', $delete['message']);
    }

    public function storeFormCatering(Request $request, $id = null){
        $contacts = $this->repo->storeFormCatering($request, $id);
        if (!$contacts['status']){
            return redirect()->back()->with('error', $contacts['message']);
        }
        return redirect()->back()->with('success', 'catering updated!');
    }

    public function storeFormContact(Request $request, $id = null){
        $contacts = $this->repo->storeFormContact($request, $id);
        if (!$contacts['status']){
            return redirect()->back()->with('error', $contacts['message']);
        }
        return redirect()->back()->with('success', 'contact updated!');
    }

    public function storeFormWhatsapp(Request $request, $id = null){
        $whatsapps = $this->repo->storeFormWhatsapp($request, $id);
        if (!$whatsapps['status']){
            return redirect()->back()->with('error', $whatsapps['message']);
        }
        return redirect()->back()->with('success', 'catering updated!');
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

    public function indexFormContact($id = null){
        if (!$id){
            $contacts = $this->repo->getAllContact();
            return view('pages.admin.contact.index', compact('contacts'));
        }
        $contacts = $this->repo->findContactById($id);
        if ($contacts){
            return view('pages.admin.contact.detail', compact('contacts'));
        }
    }

    public function indexFormWhatsapp($id = null){
        if (!$id){
            $whatsapp = $this->repo->getAllWhatsapp();
            return view('pages.admin.whatsapp.index', compact('whatsapp'));
        }
        $whatsapp = $this->repo->findWhatsappById($id);
        if ($whatsapp){
            return view('pages.admin.whatsapp.detail', compact('whatsapp'));
        }
    }
}
