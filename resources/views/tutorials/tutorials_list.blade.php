@extends('layouts.master')


@section('title')
Tutorials List
@endsection

@section('content')
<h3>List of Tutorials</h3>
<ul>
@foreach($tutorials as $tutorial)
<li>{{$tutorial['title']}}<br/>
    {{$tutorial['content']}}<br/>
    Author: {{$tutorial['author']}}</li>
@endforeach
</ul>
@endsection