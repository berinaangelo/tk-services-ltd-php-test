@extends('layouts.application')

@section('page-contents')
<h3>{{ $title }}</h3>

<form method="POST" action="{{url($formUri)}}">
  @csrf
  @yield('fields')
</form>
@stop