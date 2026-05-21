@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Automobilio redagavimas</div>

                <div class="card-body">
                  <form action="{{route('cars.update', $car->id)}}" method="post">
                      @csrf
                      @method('put')
                      <div class="mb-3">
                          <label class="form-label">Registracijos numeris</label>
                          <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Markė</label>
                          <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Modelis</label>
                          <input type="text" class="form-control" name="model" value="{{$car->model}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Savininkas</label>
                          <select name="owner_id" class="form-control">
                              @foreach($owners as $owner)
                                  <option value="{{$owner->id}}" {{$owner->id == $car->owner_id?'selected':''}}>{{$owner->name}} {{$owner->surname}}</option>
                              @endforeach
                          </select>
                      </div>
                      <button class="btn btn-success" type="submit">Atnaujinti įrašus</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
