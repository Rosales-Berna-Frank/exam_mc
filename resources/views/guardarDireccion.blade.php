@extends('layouts.app')

@section('content')
    <h1>Registrar Direccion</h1>
    <form method="post" action="/guardar-direccion">
        <input type="text" name="region" placeholder="Ingrese Region">
        <input type="text" name="provincia" placeholder="Ingrese Provincia">
        <input type="text" name="distrito" placeholder="Ingrese Distrito">
        <input type="text" name="residencia" placeholder="Ingrese Residencia">
        <input type="submit" value="Guardar">
    </form>
@endsection
