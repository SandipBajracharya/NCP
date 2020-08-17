@extends('layouts.app')

@section('content')
    <h4><strong> Upcoming Events</strong></h4>
    <div class="card" style="background-color: #fff3e6;">
        <div class="card-body">
            <h6>Upcomming Events Titles</h6>
            Title of upcoming events with description
            @if(false)
                @foreach($links as $item)
                    <ul class="liststyle anchorstyle pl-0 mb-0">
                        <li> <a href="" target=_blank><i class="fa fa-link" aria-hidden="true"></i> {{$item->links}} </a></li>
                    </ul>
                @endforeach
            @else
                <p class="text-center"> No content found.</p>
            @endif
        </div>
    </div>
@endsection