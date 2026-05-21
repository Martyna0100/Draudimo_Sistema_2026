@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Savininkų sąrašas</div>

                <div class="card-body">
                  <a href="{{route('owner.create')}}" class="btn btn-success float-end">Pridėti naują savininką</a>
                    <hr class="mt-5">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Vardas</th>
                            <th>Pavardė</th>
                            <th>Telefono numeris</th>
                            <th>El. paštas</th>
                            <th>Adresas</th>
                            <th>Automobiliai</th>
                            <th>Veiksmai</th>
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
                                <td>
                                    <a href="{{route('owner.edit', $owner->id)}}" class="btn btn-info">Redaguoti</a>
                                    <a href="{{route('owner.destroy', $owner->id)}}" class="btn btn-danger">Ištrinti</a>
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
