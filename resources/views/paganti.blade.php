@extends('layouts.main-layout')
@section('content')
  <h1> PAGANTI: </h1>
  <h3>
    <a href="{{route('pagante-create')}}">Crea nuovo PAGANTE</a>
  </h3>
   <ul>
     @foreach ($paganti as $pagante)
       <li>
         <a href="{{route('pagante-show', $pagante -> id)}}">
           {{$pagante -> name}}
           {{$pagante -> lastname}}
         </a>
         <a href="{{route('pagante-edit', $pagante -> id)}}"><strong>EDIT</strong></a>
         <a href="{{route('pagante-destroy', $pagante -> id)}}">X</a>
       </li>
     @endforeach
   </ul>
@endsection
