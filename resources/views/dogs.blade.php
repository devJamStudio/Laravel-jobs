@extends('layout')

@section('content')

@foreach ($dogs as $dog)

<h1>{{$dog->name}}</h1>
@endforeach
@endsection
