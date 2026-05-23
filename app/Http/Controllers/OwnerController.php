<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Testas;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class OwnerController extends Controller
{
    public function __construct(){
        //$this->middleware(Testas::class);
    }

    public function index(Request $request){
        $locale = $request->session()->get('locale', App::getLocale());
        App::setLocale($locale);
        $owners = Owner::all();
        return view('owners.index', compact('owners'));
    }

    public function create(){
        return view('owners.create');
    }

    public function store(Request $request){
            $owner = new Owner();
            $owner->name = $request->name;
            $owner->surname = $request->surname;
            $owner->phone = $request->phone;
            $owner->email = $request->email;
            $owner->address = $request->address;
            $owner->save();
            return redirect()->route('owner.index');
    }

    public function edit($id){
            $owner=Owner::find($id);
            return view('owners.edit', compact('owner'));
    }

    public function update(Request $request, $id){
            $owner=Owner::find($id);
            $owner->name = $request->name;
            $owner->surname = $request->surname;
            $owner->phone = $request->phone;
            $owner->email = $request->email;
            $owner->address = $request->address;
            $owner->save();
            return redirect()->route('owner.index');

    }

    public function destroy(Request $request, $id){
        $owner=Owner::find($id);
        $owner->delete();
        return redirect()->route('owner.index');
    }

    public function changeLanguage($lang, Request $request){
        $request->session()->put('locale', $lang);
        return redirect()->back();
    }
}
