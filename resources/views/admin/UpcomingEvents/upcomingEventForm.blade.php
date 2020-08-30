@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Home/ Upcoming Event </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-8 offset-md-2">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors -> all() as $error)
                        <li> {{$error}} </li>    
                    @endforeach
                </ul>
            </div>
         @endif

        <div class="card card-info">
            <div class="card-header">Upcoming Event Content</div>
            <div class="card-body">
                {!!Form::open(['action'=>'Admin\UpcomingEventsController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class' => 'form' ])!!}
                    <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Upcoming Event Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('pdf','Pdf file:')}}
                        {{Form::file('pdf')}}
                    </div>
                    <div class="row justify-content-center">
                        {{Form::submit('Submit',['class'=>'btn btn-outline-info'])}}
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection