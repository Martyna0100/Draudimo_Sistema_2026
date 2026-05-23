@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('owners.adding_owner')}}</div>

                <div class="card-body">
                  <form action="{{route('owner.store')}}" method="post">
                      @csrf
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.name')}}</label>
                          <input type="text" class="form-control" name="name" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.surname')}}</label>
                          <input type="text" class="form-control" name="surname" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.phone')}}</label>
                          <input type="text" class="form-control" name="phone" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.email')}}</label>
                          <input type="text" class="form-control" name="email" value="">
                      </div>
                      <div class="mb-3">
                          <label class="form-label">{{__('owners.address')}}</label>
                          <input type="text" class="form-control" name="address" value="">
                      </div>
                      <button class="btn btn-success" type="submit">{{__('owners.add')}}</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
