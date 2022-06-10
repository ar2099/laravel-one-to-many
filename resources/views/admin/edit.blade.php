@extends('layouts.app')

@section('content')

    
    
    
    <form action="{{ route("admin.posts.update", $post->id)}}" method="POST" >
        @method("PUT")
 @csrf
    <input type="text" name="author" class="form-control" id="author" placeholder="author" value="{{$post->author}}">
    <input type="date" name="data" class="form-control" id="data" placeholder="data"  value="{{$post->data}}">
    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
    <input type="text" name="text" class="form-control" id="text" placeholder="text" value="{{$post->text}}">
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    

  
@endsection