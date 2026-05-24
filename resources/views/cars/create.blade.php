@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list">
                        @foreach($errors->all() as $error)
                            <li class="list-item">{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{__('Adding new car')}}</div>

                <div class="card-body">
                  <form action="{{route('cars.store')}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">{{__('Registration number')}}</label>
                          <input type="text" class="form-control @error('reg_number') is-invalid @enderror" name="reg_number" value="{{old('reg_number')}}">
                          <div class="invalid-feedback">@error('reg_number') {{$message}} @enderror</div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Brand')}}</label>
                          <input type="text" class="form-control @error('brand') is-invalid @enderror" name="brand" value="{{old('brand')}}">
                          <div class="invalid-feedback">@error('brand') {{$message}} @enderror</div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Model')}}</label>
                          <input type="text" class="form-control @error('model') is-invalid @enderror" name="model" value="{{old('model')}}">
                          <div class="invalid-feedback">@error('model') {{$message}} @enderror</div>
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Owner')}}</label>
                          <select name="owner_id" class="form-control">
                              @foreach($owners as $owner)
                                  <option value="{{$owner->id}}">{{$owner->name}} {{$owner->surname}}</option>
                              @endforeach
                          </select>
                      </div>
                      <button class="btn btn-success" type="submit">{{__('Add')}}</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
