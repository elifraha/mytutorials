@extends('layouts.master')
@section('title')
Create  New Tutorial
@endsection
@section('content')
<div class="content">
  <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
            <form action="{{url('tutorials')}}" method="POST">
            {{csrf_field()}}
    <div class="form-group">
       <label for="user_id">User Id</label>
       <input type="text" name="user_id" class="form-control">
    </div>
    <div class="form-group">
      <label for="title">Tutorial Title</label>
      <input type="text" name="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="content">Tutorial Content</label>
      <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <button class="btn btn-lg btn-primary">Submit</button>
</form>
      </div>
  </div>
  
</div>

@endsection