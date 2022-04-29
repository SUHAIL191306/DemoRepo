@extends('layout')
  
@section('content')



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<style>
    table {
        width:70%! important;
        margin: 200px auto;
    }
    div {
        margin: 0px auto;
    }

    div h2 {
        position: absolute;
        top:100px;
        left:100px;
    }

    
    </style>
<div>    
    <h2> Customer </h2> 
    
        <a style="position: absolute;
        top:120px;
        right:300px;
        font-weight: bold;
        font-size: 16px;" href="/"> Dashboard </a>
    <a style="position: absolute;
        top:120px;
        right:200px;
        font-weight: bold;
        font-size: 16px;" href="add-customers">Add New</a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Location</th>
      <th scope="col">Email</th>
      <th colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($data as $dt) 
    <tr>
      <td>{{$dt['cusName']}}</td>
      <td>{{$dt['cusLocation']}}</td>
      <td>{{$dt['cusEmail']}}</td>
      <td> 
        <a href="/customers/delete/{{$dt['id']}}">Delete</a> 
      </td>
      <td>
        <a href="/customers/update/{{$dt['id']}}">Edit</a> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection