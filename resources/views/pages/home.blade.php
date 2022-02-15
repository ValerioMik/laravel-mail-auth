@extends('layouts.main-laiout')

@section('content')

<h1>
    Benvenuto <br>
    in
</h1>

<videogames-component user="{{Auth::check()}}"> </videogames-component>
    
@endsection