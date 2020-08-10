@extends('layouts.app')

@section('content')
    @if($post)
        <h4><strong>{{__('Press Release')}}</strong></h4>
        <div class="card">
            <div class="card-body">
                <p class="font-weight-bold">{{$post->title}}</p>
                <small>{{$post->created_at->format('d M Y')}}</small> <br> <br>
                <p>{{$post->body}}</p>
            </div>
        </div>
    @endif
@endsection