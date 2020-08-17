@extends('layouts.app')

@section('content')
    <h4><strong> Online Gallery</strong></h4>
    <div class="card" style="background-color: #fff3e6;">
        <div class="card-body">
            <ul class="liststyle anchorstyle pl-0 mb-0">
                <li> <a href="/onlinegallery/photos"><i class="fa fa-link" aria-hidden="true"></i> Photo </a></li>
                <li> <a href="/onlinegallery/videos"><i class="fa fa-link" aria-hidden="true"></i> Video </a></li>
                <li> <a href="/onlinegallery/audios"><i class="fa fa-link" aria-hidden="true"></i> Audio </a></li>
            </ul>
        </div>
    </div>
@endsection