@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2><strong>{{ $thread->title }}</strong></h2></div>

                <div class="panel-body">
                    <div class="thread-body">
                        {{ $thread->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach ($thread->replies as $reply)
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $reply->created_at->diffForHumans() }} <a href="#">{{$reply->owner->name}}</a></div>

                    <div class="panel-body">
                        <div class="thread-body">
                            {{ $reply->body }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
@endsection
