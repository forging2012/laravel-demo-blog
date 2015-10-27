@extends('common.layout')
@section('content')
    <h1>Posts</h1>
    <hr />
    @foreach($posts as $post)
        {{--<h2><a href="/$posts/{{ $post->id }}">{{ $post->title }}</a></h2>--}}
        {{--<h2><a href="{{ url('$posts',$post->id) }}">{{ $post->title }}</a></h2>--}}
        {{--<h2><a href="{{ action('PostController@show',[$post->id]) }}">{{ $post->title }}</a></h2>--}}
        <h2><a href="{{ action('PostController@show',[$post->id]) }}">{{ $post->title }}</a></h2>

        <article>
            <div class="content">
                {{ $post->content }}
            </div>
        </article>
    @endforeach
@stop
