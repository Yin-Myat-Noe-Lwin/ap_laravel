@extends('layout')

@section('content')
<div class="container">
  <br>
<div class="card">
  <h5 class="card-header" style="text-align:center">Contents</h5>
  <div class="card-body">
     <h5 class="card-title">{{$post->name}}</h5>
    <p class="card-text">{{$post->description}}</p>
    <p class="card-text" style="font-style:italic">{{'Category :'.$post->categories->name}}</p>
    <hr>
    <div>
    <a href="/post" class="btn btn-success">Back</a>
  </div>
  </div>
</div>
</div>
@endsection