<?php

namespace App\Http\Controllers\Admin;

use App\Catering;
use App\Contact;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Repo\Repository;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    protected $phoneService;

    public function __construct(){
        $this->phoneService = new Repository();
    }

    public function index(){
        return view('pages.admin.dashboard.index');
    }

    /* contact and contact detail */
    public function indexFormContact($id = null){
        if ($id){
            $contact = Contact::with([])->find($id);
            dd($contact);
            return view();
        }
        $contact = Contact::all();
    }

    /* contact store and update */
    public function storeFormContact(Request $request, $id = null){
        $id = 10;
        $request        = ['_token' => csrf_token(), 'full_name' => 'anto kariyudin', 'email' => 'jaya@mail.com', 'phone' => '08991243960'];
        $contact        = new Contact();
        if ($id){
            $contact    = Contact::with([])->find($id);
        }
        $phoneService   = $this->phoneService;
        $phoneService   = $phoneService->standardPhone($request['phone']);
        if (!$phoneService){
            return redirect('/');
        }
        $contact->full_name = $request['full_name'];
        $contact->email     = $request['email'];
        $contact->phone     = $request['phone'];
        $contact->save();
        return redirect()->back();
    }

    /* contact softdeletes */
    public function deleteFormContact($id){
        $contact = Contact::with([])->find($id);
        $deleted = $contact->delete();
        if ($deleted){
            $contact->deleted_by = Auth::user()->id;
            $contact->save();
            return redirect()->with();
        }
        return redirect()->with();
    }

    /* catering store and update */
    public function storeFormCatering(Request $request, $id = null){
        $request        = ['_token' => csrf_token(), 'full_name' => 'anto kariyudin', 'email' => 'jaya@mail.com', 'phone' => '08991243960', 'message' => 'this is a message'];
        $catering       = new Catering();
        if ($id){
            $catering   = Catering::with([])->find($id);
        }
        $phoneService   = $this->phoneService;
        $phoneService   = $phoneService->standardPhone($request['phone']);
        if (!$phoneService){
            return redirect('/');
        }
        $catering->full_name    = $request['full_name'];
        $catering->email        = $request['email'];
        $catering->phone        = $request['phone'];
        $catering->message      = $request['message'];
        $catering->save();
        return redirect()->back();
    }

    /* catering softdeletes */
    public function deleteFormCatering($id){
        $catering   = Catering::with([])->find($id);
        $deleted    = $catering->delete();
        if ($deleted){
            $catering->deleted_by = Auth::user()->id;
            $catering->save();
            return redirect()->with();
        }
        return redirect()->with();
    }

    public function indexFormCatering($id = null){
        if ($id){
            $catering = Catering::with([])->find($id);
            return view();
        }
        $catering = Catering::all();
        return view('view', compact('catering'));
    }
}
