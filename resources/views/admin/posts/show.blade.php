@extends('layouts.admin')

@section('content')
<div class="container">
  
  <h1>{{$post->title}}</h1>
  @if ($post->category)
    <h4>Categoria: {{$post->category->name}}</h4>
    
  @endif
  <p>{{$post->content}}</p>
</div>
@endsection

@section('title')
  Show
@endsection
