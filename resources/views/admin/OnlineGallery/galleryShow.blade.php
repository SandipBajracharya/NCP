@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Gallery View </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/admin/onlinegallery" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
    </div>
    @if($item)
        <div class="col-md-8 offset-md-2 px-4">

                {{-- video show --}}
            @if($item->gallery_type == 'Video')
                <video controls class="embed-responsive" style="max-height: 21em;">
                    <source src="/storage/OnlineGallery/{{$item->gallery_type}}/{{$item->file}}" type="video/mp4" class="embed-responsive-item">
                </video>
            
                {{-- Photo show     --}}
            @elseif($item->gallery_type == 'Photo')
                <img src="/storage/OnlineGallery/{{$item->gallery_type}}/{{$item->file}}" class="img-fluid">
            
                {{-- Audio show --}}
            @else
                <audio controls class="embed-responsive p-1" style="background-color: black; border-radius: 25px;">
                    <source src="/storage/OnlineGallery/{{$item->gallery_type}}/{{$item->file}}" type="audio/mpeg" class="embed-responsive-item">
                </audio>
            @endif
            <div class="card mt-2">
                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <td> {{$item->title}}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td> {{$item->gallery_type}}</td>
                        </tr>
                        <tr>
                            <th>Added on</th>
                            <td> {{$item->created_at->format('d M Y')}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection