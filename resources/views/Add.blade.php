@extends('layouts.main')
@section('content')
<title>Add Entry</title>
<div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal">Add an Entry</h2>
      <form action="{{ route('store')}}" method='POST'>
      @csrf
      <div class="form-group" >
        <label for="name">Enter Name</label>
        <input class="form-control col-md-4" type="text" name="name">
        @error('name')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group" >
        <label for="city">City Name</label>
        <input class="form-control col-md-4" type="text" name="city"> <br> 
        @error('city')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group" >
        <input class="btn btn-primary" type="submit">
      </div>
      </form>
      </div>
  </div>
  <h3><a href="/index">Back</a></h3>
  @endsection