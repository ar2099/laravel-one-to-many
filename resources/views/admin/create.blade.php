@extends('layouts.app')

@section('content')

    
    
    
    <form action="{{ route("admin.posts.store")}}" method="POST" >
 @csrf
    <input type="text" name="author" class="form-control" id="author" placeholder="author" >
    <input type="date" name="data" class="form-control" id="data" placeholder="data" value="2022-03-01" >
    <input type="text" name="title" class="form-control" id="title" placeholder="title" >
    <input type="text" name="text" class="form-control" id="text" placeholder="text" >
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
    

  
@endsection
