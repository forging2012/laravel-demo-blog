@extends('common.layout')
@section('content')
    <h1>comments</h1>
    <hr />
    @foreach($comments as $comment)
        {{--<h2><a href="/comments/{{ $comment->id }}">{{ $comment->message }}</a></h2>--}}
        {{--<h2><a href="{{ url('comment',$comment->id) }}">{{ $comment->message }}</a></h2>--}}
        {{--<h2><a href="{{ action('CommentController@show',[$comment->id]) }}">{{ $comment->message }}</a></h2>--}}
        <h2><a href="{{ action('CommentController@show',[$comment->id]) }}">{{ $comment->message }}</a></h2>

        <article>
            <div class="content">
                {{ $comment->message }}
            </div>
        </article>
    @endforeach
@stop
