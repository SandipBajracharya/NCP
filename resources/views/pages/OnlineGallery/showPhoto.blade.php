@extends('layouts.app')

@section('content')
    <h4><strong> Photo Gallery</strong></h4>
    <div class="card">
        <div class="card-body" style="background-color: #fff3e6;">
            {{-- <div class="pl- pt-3">
                <a href="/onlinegallery/photos" class="btn btn-secondary btn-sm"> Back</a>
            </div> --}}
            <div class="col-10 offset-1 py-3">
                <img src="/storage/OnlineGallery/Photo/{{$photo->file}}" alt="{{$photo->title}}" class="card-img-top" style="height: ;">
                <p class="text-center pb-0 pt-2"> {{$photo->title}} </p>
            </div>
        </div>
    </div>
@endsection