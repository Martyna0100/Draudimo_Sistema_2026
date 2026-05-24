@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Edit car')}}</div>

                <div class="card-body">
                  <form action="{{route('cars.update', $car->id)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      @method('put')
                      <div class="mb-3">
                          <label class="form-label">{{__('Registration number')}}</label>
                          <input type="text" class="form-control" name="reg_number" value="{{$car->reg_number}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Brand')}}</label>
                          <input type="text" class="form-control" name="brand" value="{{$car->brand}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Model')}}</label>
                          <input type="text" class="form-control" name="model" value="{{$car->model}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('Owner')}}</label>
                          <select name="owner_id" class="form-control">
                              @foreach($owners as $owner)
                                  <option value="{{$owner->id}}" {{$owner->id == $car->owner_id?'selected':''}}>{{$owner->name}} {{$owner->surname}}</option>
                              @endforeach
                          </select>
                      </div>
                      <hr>
                      @if($car->photo == null)
                      <div class="mb-3">
                          <label class="form-label">{{__('Photo:')}}</label>
                          <input type="file" class="form-control" name="photo" value="">
                      </div>
                      @else
                          <label class="form-label">{{__('Photo:')}}</label>
                          <<img src="/storage/{{$car->photo}}" alt=""><br>
                          <input type="file" class="form-control" name="photo" value="">
                          <a class="btn btn-danger" href="{{route('cars.deletePhoto', $car->id)}}">{{__('Delete photo:')}}</a>
                      @endif
                      <button class="btn btn-success" type="submit">{{__('Update entries')}}</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
