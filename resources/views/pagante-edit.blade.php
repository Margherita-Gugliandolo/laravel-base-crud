@extends('layouts.main-layout')
@section('content')

<h1>Pagamento edit</h1>

<form class="" action="{{route('pagante-update', $pagante -> id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="name">NAME</label>
    <br>
    <input type="text" name="name" value="{{$pagante -> name}}">
  </div>
  <div class="form-group">
    <label for="lastname">LASTNAME</label>
    <br>
    <input type="text" name="lastname" value="{{$pagante -> lastname}}">
  </div><div class="form-group">
    <label for="address">ADDRESS</label>
    <br>
    <input type="text" name="address" value="{{$pagante -> address}}">
  </div>
  <button type="submit" name="button">UPDATE</button>
</form>


  @endsection
