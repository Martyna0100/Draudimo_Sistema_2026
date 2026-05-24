<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $locale = $request->session()->get('locale', App::getLocale());
        App::setLocale($locale);
        $owners = Owner::all();
        return view('cars.create', compact('owners'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'reg_number' => 'required|max:7, unique:cars,reg_number',
            'brand' => 'required',
            'model' => 'required',
        ], [
            'reg_number.required' => __('Registration number is required'),
            'reg_number.unique' => __('Registration number is already registered'),
            'reg_number.max' => __('Registration number must be no longer 7 characters'),
            'brand' => __('Brand is required'),
            'model' => __('Model is required')
        ]);
        Car::create($request->all());
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $owners = Owner::all();
        return view('cars.edit', compact('car', 'owners'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $car->update($request->all());
        $car->save();
        if($request->hasFile('photo')){
            $request->file('photo')->store('/app/public');
            $car->photo=$request->file('photo')->hashName();
            $car->save();
        }
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $car=Car::find($id);
        $car->delete();
        return redirect()->route('cars.index');
    }

    public function deletePhoto($id)
    {
        $car=Car::find($id);
        if($car->photo != null){
            unlink(storage_path().'/app/public/'.$car->photo);
            $car->photo = null;
            $car->save();
        }
        return redirect()->back();
    }
}
