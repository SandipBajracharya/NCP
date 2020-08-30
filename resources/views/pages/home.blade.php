@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    {{-- sidebar for device width less than 640px --}}
    <div class="sidebar">
        <h4><strong> {{__('Quick Links')}}</strong></h4>
        @include('inc.sidebar')
    </div>
    {{-- end sidebar --}}

    @include('messages.message')
    <h4><strong>{{__('Home')}}</strong></h4>
    @if($leaders)
    <div class="row px-2">
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders p-1">
            <p class="text-center" style="">{{__('District President')}}</p>
        </div>
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders  p-1">
            <p class="text-center">{{__('District Vice President')}}</p>
        </div>
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders p-1">
            <p class="text-center">{{__('District Secretary')}}</p>
        </div>
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders p-1">
            <p class="text-center">{{__('District Secretary')}}</p>
        </div>
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders p-1">
            <p class="text-center">{{__('Treasurer')}}</p>
        </div>
        <div class="col-md-2 card-lg-2 col-4 px-1">
            <img src="/storage/DistrictLeaders/noimage.jpg" style="" class="card-img-top district-leaders p-1">
            <p class="text-center">{{__('Joint Secretary')}}</p>
        </div>
    </div>
    @endif
    <hr>
    <div class="col-sm-12 mb-3">
        <div class="row justify-content-between">
            <a href="/electioncommittee" class="btn btn-success btn-sm">Election Committee</a>
            <a href="" class="btn btn-outline-danger btn-sm">Prachar Samiti</a>
            <a href="" class="btn btn-outline-success btn-sm">Donation</a>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab1">{{__('Press Release')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2">{{__('Upcoming Events')}}</a>
            </li>
        </ul>
        
          <!-- Tab panes -->
        @if(count($contents)>0)  
        <div class="tab-content clearfix">
            <div id="tab1" class="container tab-pane active"><br>
                @foreach($contents as $content)
                    <div class="list-group">
                        <div class="list-group-item mb-2 mt-0">
                            <p><strong>{{$content->title}}</strong></p>
                            <p>{{$content->body}}</p>
                            <div class="">
                                <small>{{$content->created_at->format('d M Y')}}</small>
                                <a href="/pressrelease/{{$content->id}}" target=_blank class="float-right"> {{__('more')}} >></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{$contents->links()}}
            </div>

            <div id="tab2" class="container tab-pane fade"><br>
                <div class="card-body">
                    <h6>Upcomming Events Titles</h6>
                    Title of upcoming events with description
                    <div class="pt-3">
                        <small>{{$content->created_at->format('d M Y')}}</small>
                        <a href="/upcomingevent/lists" class="float-right"> {{__('more')}} >></a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
@endsection
