<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
        public function index(){
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
    }

    public function destroy(Request $request, $id){
        $owner=Owner::find($id);
        $owner->delete();
        return redirect()->route('owner.index');
    }
}
