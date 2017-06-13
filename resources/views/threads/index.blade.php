@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Threads</div>
                    <div class="panel-body">
                        @foreach ($threads as $thread)
                            <article>
                                <a href="/threads/{{$thread->id}}"><h2>{{ $thread->title }}</h2></a>
                            </article>

                            <div class="article-body">
                                <p>{{ $thread->body }}</p>
                            </div>
                            <hr>
                        @endforeach
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
