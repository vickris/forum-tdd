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
                            <h1>{{ $thread->title }}</h1>
                        </article>
                        <div class="article-body">
                            <p>{{ $thread->body }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
