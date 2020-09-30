@extends('layouts.main-layout')
@section('content')
  <h1> PAGANTE:
    {{$pagante -> name}}
    {{$pagante -> lastname}}
  </h1>
  <ul>
    <li>
      ADDRESS: {{$pagante -> address}}
    </li>
  </ul>


@endsection
