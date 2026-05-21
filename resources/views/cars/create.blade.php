@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Automobilio pridėjimas</div>

                <div class="card-body">
                  <form action="{{route('cars.store')}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">Registracijos numeris</label>
                          <input type="text" class="form-control" name="reg_number" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Markė</label>
                          <input type="text" class="form-control" name="brand" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Modelis</label>
                          <input type="text" class="form-control" name="model" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Savininkas</label>
                          <select name="owner_id" class="form-control">
                              @foreach($owners as $owner)
                                  <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                              @endforeach
                          </select>
                      </div>
                      <button class="btn btn-success" type="submit">Pridėti</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
