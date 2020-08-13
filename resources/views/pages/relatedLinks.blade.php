@extends('layouts.app')

@section('content')
    <h4><strong> Related Links</strong></h4>
    <div class="card" style="background-color: #fff3e6;">
        <div class="card-body">
            @if(count($links)>0)
                @foreach($links as $item)
                    <ul class="liststyle anchorstyle pl-0 mb-0">
                        <li> <a href="{{$item->links}}" target=_blank><i class="fa fa-link" aria-hidden="true"></i> {{$item->links}} </a></li>
                    </ul>
                @endforeach
            @else
                <p class="text-center"> No links Found.</p>
            @endif
        </div>
    </div>
@endsection