@extends('layouts.main')
@section('content')
<title>Update Entry</title>
<div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h2 class="w3-text-teal">Update an Entry</h2>
      <form action="{{route('update')}}" method='POST'>
      @csrf
      
        <input type="hidden" name="id" value=" {{$data['id']}}">
        <div class="form-group">
          <label for="name">Enter Name</label>
          <input class="form-control col-md-4" type="text" name="name" value="{{$data['name']}}"><br>
          @error('name')
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <label for="city">City Name</label>
          <input class="form-control col-md-4" type="text" name="city" value="{{$data['city']}}"> <br>
          @error("city")
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="form-group">
          <button type="Submit" class="btn btn-primary" name ="submit">Update</button>
        </div>
        
      </form>
      </div>
  </div>
  <h3><a href="/index">Back</a></h3>
  @endsection