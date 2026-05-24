@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{__('Cars list')}}</div>

                <div class="card-body">
                    @if(Auth::user()->type == 'admin')
                        <a href="{{route('cars.create')}}" class="btn btn-success float-end">{{__('Add new car')}}</a>
                    @endif
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:300px;"></th>
                            <th>{{__('Registration number')}}</th>
                            <th>{{__('Brand')}}</th>
                            <th>{{__('Model')}}</th>
                            <th>{{__('Owner')}}</th>
                            @if(Auth::user()->type == 'admin')
                                <th>{{__('Actions')}}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>
                                    @if($car->photo != null)
                                    <img src="/storage/{{$car->photo}}" alt="" width="100%">
                                    @endif
                                </td>
                                <td>{{$car->reg_number}}</td>
                                <td>{{$car->brand}}</td>
                                <td>{{$car->model}}</td>
                                <td>{{$car->owner->name}} {{$car->owner->surname}}</td>
                                <td>
                                    <a href="{{route('cars.edit', $car->id)}}" class="btn btn-info">{{__('Edit')}}</a>
                                    <a href="{{route('cars.destroy', $car->id)}}" class="btn btn-danger">{{__('Delete')}}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
