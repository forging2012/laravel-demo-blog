@extends('common.layout')
@section('content')
    <h1>{{ $post->title }}</h1>
    <hr>
    <article>
        <div class="content">
            {{ $post->content }}
        </div>
    </article>
@stop
