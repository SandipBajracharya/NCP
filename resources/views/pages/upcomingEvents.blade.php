@extends('layouts.app')

@section('content')
    <h4><strong> {{__('Upcoming Events')}} </strong></h4>
    <div class="card" style="background-color: #fff3e6;">
        <div class="card-body">
            <h6>Upcomming Events Titles</h6>
            Title of upcoming events with description<br>
            <div class="pt-3">    
                <b>Attachments</b>
                @if(!empty($posts))
                    @foreach($posts as $item)
                        <ul class="anchorstyle my-0">
                            <li><a href="/upcomingevent/lists/{{$item->id}}" target=_blank> {{$item->title}} </a></li>
                        </ul>
                    @endforeach
                @else
                    <p class="text-center"> No content found.</p>
                @endif
            </div>
        </div>
    </div>
@endsection