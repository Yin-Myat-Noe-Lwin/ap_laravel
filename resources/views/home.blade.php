@extends('layout')

@section('content')
<div class="container">
  <div>
    <a href="/post/create" class="btn btn-success">Create new post</a>
    <a href="/logout" class="btn btn-warning">Logout</a>
    <h4 style="float:right">{{Auth::user()->name}}</h4>
  </div>
  <br>

  @if (session('status'))

    <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong>  {{ session('status') }}
    </div>
    
  @endif

<div class="card">
  <h5 class="card-header" style="text-align:center">Contents</h5>

  <div class="card-body">
      @foreach($data as $post)
      <h5 class="card-title">{{$post->name}}</h5>
    <p class="card-text">{{$post->description}}</p>

    <div class="form-row">
    <a style="height:40px; margin-right:10px;" href=" /post/{{$post->id}}" class="btn btn-primary">View</a>
    <a style="height:40px; margin-right:10px;" href=" /post/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
    <form action="/post/{{$post->id}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </div>
    <hr>
      @endforeach
  </div>
</div>
</div>
@endsection