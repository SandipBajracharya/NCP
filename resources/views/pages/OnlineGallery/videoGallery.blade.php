@extends('layouts.app')

@section('content')
    <h4><strong> Video Gallery</strong></h4>
    <div class="card">
        <div class="card-body pt-2" style="background-color: #fff3e6;">
            <div class="pt-2">
                <a href="/onlinegallery" class="btn btn-secondary btn-sm"> Back</a>
            </div>
            @if(count($videos)>0)
                <div class="row pt-3">
                    @foreach($videos as $video)
                        <div class="col-md-3 col-lg-3 col-6 py-1">
                            <a href="/onlinegallery/videos/{{$video->id}}" target=_blank class="btn btn-outline-danger btn-sm" style="width: 100%;">{{$video->title}}</a>
                            {{-- <video controls>
                                <source src="/storage/OnlineGallery/Video/{{$video->file}}" type="video/mp4">
                            </video> --}}
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">No items available</p>
            @endif
        </div>
    </div>
@endsection