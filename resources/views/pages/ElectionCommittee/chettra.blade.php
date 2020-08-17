@extends('layouts.app')

@section('content')
<h4><strong>Chettra no. {{$number}} </strong></h4>
<div class="card" style="background-color: #fff3e6;">
    {{-- <div class="row"> --}}
        <div class="pt-3 pl-4">
            <a href="/electioncommittee" class="btn btn-secondary btn-sm"> Back</a>
        </div>
        @if(count($members)>0)
        <div class="d-flex flex-wrap">
            @foreach($members as $member)
                <div class="col-md-4 col-lg-4 col-6 px-4 py-3">
                        <img class="img-thumbnail img-center px-3 py-1" src="/storage/ChettraLeaders/{{$member->image}}" alt="{{$member->fullname}}" style="width: 100%; max-height: 200px;">
                        <div class="card-body p-2">
                            <p class="card-text text-secondary text-center"> {{$member->fullname}} </p>
                        </div>
                    {{-- </div> --}}
                </div>
            @endforeach
            </div>
        @else
        <p class="text-center"> No contents available. </p>
        @endif
    {{-- </div> --}}
</div>
@endsection