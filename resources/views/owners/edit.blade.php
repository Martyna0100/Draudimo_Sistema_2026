@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Savininko redagavimas</div>

                <div class="card-body">
                  <form action="{{route('owner.update', $owner->id)}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">Vardas</label>
                          <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Pavardė</label>
                          <input type="text" class="form-control" name="surname" value="{{$owner->surname}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Telefono numeris</label>
                          <input type="text" class="form-control" name="phone" value="{{$owner->phone}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">El. paštas</label>
                          <input type="text" class="form-control" name="email" value="{{$owner->email}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Adresas</label>
                          <input type="text" class="form-control" name="address" value="{{$owner->address}}">
                      </div>
                      <button class="btn btn-success" type="submit">Atnaujinti įrašus</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
