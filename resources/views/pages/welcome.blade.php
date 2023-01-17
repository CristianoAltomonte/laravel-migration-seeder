@extends('layouts.app')

@section('main-content')
    <h1 class="text-center text-danger my-2">BENVENUTI</h1>

    <table class="table table-bordered w-75 m-auto">
        <thead>
            <tr>
                <th scope="col">Arrivi</th>
                <th scope="col">Partenze</th>
                <th scope="col">Destinazione</th>
                <th scope="col">Binario</th>
                <th scope="col">Prezzo</th>
            </tr>
        </thead>
        <tbody>
    @foreach ($trains as $elem)

        <tr>
            <td>{{ $elem->arrivi }}</td>
            <td>{{ $elem->partenze }}</td>
            <td>{{ $elem->destinazione }}</td>
            <td>{{ $elem->binario }}</td>
            <td>{{ $elem->price }} €</td>
        </tr>

    @endforeach
</tbody>
</table>

@endsection
