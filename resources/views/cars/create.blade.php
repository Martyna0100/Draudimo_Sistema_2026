@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Adding new car')}}</div>

                <div class="card-body">
                  <form action="{{route('cars.store')}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">{{__('Registration number')}}</label>
                          <input type="text" class="form-control" name="reg_number" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Brand')}}</label>
                          <input type="text" class="form-control" name="brand" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Model')}}</label>
                          <input type="text" class="form-control" name="model" value="">
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
