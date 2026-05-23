@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{__('owners.owners_list')}}</div>

                <div class="card-body">
                    @if(Auth::user()->type == 'admin')
                        <a href="{{route('owner.create')}}" class="btn btn-success float-end">{{__('owners.add_new')}}</a>
                    @endif
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{__('owners.name')}}</th>
                            <th>{{__('owners.surname')}}</th>
                            <th>{{__('owners.phone')}}</th>
                            <th>{{__('owners.email')}}</th>
                            <th>{{__('owners.address')}}</th>
                            <th>{{__('owners.cars')}}</th>
                            @if(Auth::user()->type == 'admin')
                                <th>{{__('owners.actions')}}</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->surname}}</td>
                                <td>{{$owner->phone}}</td>
                                <td>{{$owner->email}}</td>
                                <td>{{$owner->address}}</td>
                                <td>
                                    @foreach($owner->cars as $car)
                                        <div>{{$car->reg_number}}</div>
                                    @endforeach
                                </td>
                                @if(Auth::user()->type == 'admin')
                                <td>
                                    <a href="{{route('owner.edit', $owner->id)}}" class="btn btn-info">{{__('owners.edit')}}</a>
                                    <a href="{{route('owner.destroy', $owner->id)}}" class="btn btn-danger">{{__('owners.delete')}}</a>
                                </td>
                                @endif
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
