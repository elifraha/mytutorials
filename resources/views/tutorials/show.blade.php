@extends('layouts.master')
@section('title')
{{$tutorial->title}}
@endsection
@section('content')
<h3>{{$tutorial->title}}</h3>
<div>{{$tutorial->content}}</div>
<p>Author Id: {{$tutorial->user_id}}</p>
@endsection