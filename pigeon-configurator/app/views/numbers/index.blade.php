@extends('layouts.base')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th>
                Numéro
            </th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <form role="form" action="/" method="post">
                <td><input class="form-control" name="number" type="tel" placeholder="Numéro (format international)"></td>
                <td><button type="submit" class="btn btn-default">Sauvegarder</button></td>
            </form>
        </tr>
        @foreach ($numbers as $number)
            <tr>
                <form role="form" action="/{{ $number }}" method="post">
                    <td>{{ $number }}</td>
                    <td>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </td>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>

@stop
