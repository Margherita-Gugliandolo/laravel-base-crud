@extends('layouts.main-layout')
@section('content')
  <h1> NUOVO PAGANTE: </h1>

  <form action="{{route('pagante-store')}}" method="POST">
    @csrf
    @method('POST')


    <div class="form-group">
      <label for="name">NAME</label>
      <br>
      <input type="text" name="name" value="">
    </div>
    <div class="form-group">
      <label for="lastname">LASTNAME</label>
      <br>
      <input type="text" name="lastname" value="">
    </div>
    <div class="form-group">
      <label for="address">ADDRESS</label>
      <br>
      <input type="text" name="address" value="">
    </div>
    <button type="submit" name="button">CREATE NEW PAGANTE</button>
  </form>


@endsection
