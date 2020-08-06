@extends('layouts.app')

@section('content')
    <div class="card">
        {!!Form::open(['action' => '', 'method' => 'POST'])!!}
            
            {{Form::label('telephone','Telephone')}}
            {{Form::}}
        {!!Form::close()!!}
    </div>
@endsection