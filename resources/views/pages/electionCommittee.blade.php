@extends('layouts.app')

@section('content')
    <h4><strong>{{__('Election Committee')}}</strong></h4>
    <div class="card">
        <div class="card-body" style="background-color: #fff3e6;">
            <div class="row">
                @for ($i = 1; $i <= 10; $i++)
                    <div class="col-md-3">
                        <a href="/electioncommittee/chettra/{{$i}}" class="btn btn-outline-danger btn-sm mb-2" style="width: 100%;">Chettra no. {{$i}}</a>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection