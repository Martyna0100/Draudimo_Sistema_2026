@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Automobilių sąrašas</div>

                <div class="card-body">
                    @if(Auth::user()->type == 'admin')
                        <a href="{{route('cars.create')}}" class="btn btn-success float-end">Pridėti naują automobilį</a>
                    @endif
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Registracijos numeris</th>
                            <th>Markė</th>
                            <th>Modelis</th>
                            <th>Savininkas</th>
                            @if(Auth::user()->type == 'admin')
                                <th>Veiksmai</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cars as $car)
                            <tr>
                                <td>{{$car->reg_number}}</td>
                                <td>{{$car->brand}}</td>
                                <td>{{$car->model}}</td>
                                <td>{{$car->owner->name}} {{$car->owner->surname}}</td>
                                <td>
                                    <a href="{{route('cars.edit', $car->id)}}" class="btn btn-info">Redaguoti</a>
                                    <a href="{{route('cars.destroy', $car->id)}}" class="btn btn-danger">Ištrinti</a>
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
