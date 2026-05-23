@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('owners.edit_owner')}}</div>

                <div class="card-body">
                  <form action="{{route('owner.update', $owner->id)}}" method="post">
                      @csrf
                      @method('put')
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.name')}}</label>
                          <input type="text" class="form-control" name="name" value="{{$owner->name}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.surname')}}</label>
                          <input type="text" class="form-control" name="surname" value="{{$owner->surname}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.phone')}}</label>
                          <input type="text" class="form-control" name="phone" value="{{$owner->phone}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.email')}}</label>
                          <input type="text" class="form-control" name="email" value="{{$owner->email}}">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.address')}}</label>
                          <input type="text" class="form-control" name="address" value="{{$owner->address}}">
                      </div>
                      <button class="btn btn-success" type="submit">{{__('owners.update')}}</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
