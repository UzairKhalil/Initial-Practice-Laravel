@extends('layouts.main')
@section('content')
<title>View Records</title>
<div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">View Records</h1>
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{!! session()->get('success') !!}</div> 
@endif
      <table class="table table-striped">
        <tr class="table-primary">
          <th>S.No</th>
          <th>Name</th>
          <th>City</th>
          <th>Action</th>
        </tr>
        @foreach($data as $item)
        <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>{{$item->city}}</td>
          <td>
            <form action="{{ route('edit',$item->id) }}" method='GET'>
              @csrf
              <button class="fa fa-edit fa-2x" style="border: none ; padding: 0; background: none;"></button>
            </form>
            <form action="{{ route('delete',$item->id) }}" method='POST'>
              @csrf
              <button class="fa fa-trash fa-2x" style="border: none ; padding: 0; background: none;"  onclick="return confirm('Are you sure to delete this Entry?')"></button>    
              @method('delete')
            </form>
          </td>
        </tr>
        @endforeach
      </table>
      
    </div>
  </div>
  <h3><a href="{{ route('add')}}">Create Entry</a></h3>
  @endsection
  
  <!-- <a href="{{ route('edit',$item->id) }}" class="fa fa-edit fa-2x"></a> -->
  <!-- <a href="/delete/{{$item->id}}" class="fa fa-trash fa-2x"  onclick="return confirm('Are you sure to delete this Entry?')"></a> -->