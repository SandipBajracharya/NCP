@extends('layouts.app')

@section('content')
    <h4><strong> Photo Gallery</strong></h4>
    <div class="card">
        <div class="card-body pt-2" style="background-color: #fff3e6;">
            <div class="pt-2">
                <a href="/onlinegallery" class="btn btn-secondary btn-sm"> Back</a>
            </div>
            @if(count($photos)>0)
                <div class="row pt-3">
                    @foreach($photos as $photo)
                        <div class="col-md-3 col-lg-3 col-6">
                            <div class="card">
                                <a href="/onlinegallery/photos/{{$photo->id}}" target=_blank><img src="/storage/OnlineGallery/Photo/{{$photo->file}}" alt="{{$photo->title}}" class="card-img-top " style="min-height: ;"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center">No items available</p>
            @endif
        </div>
    </div>
@endsection