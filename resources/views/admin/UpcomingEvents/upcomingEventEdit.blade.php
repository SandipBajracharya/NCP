@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Home/ Upcoming Event/ Edit </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/upcomingevents" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
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
            <div class="card-header">Upcoming Event Content Edit</div>
            <div class="card-body">
                @if(!empty($post))
                {!!Form::open(['action'=>['Admin\UpcomingEventsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class' => 'form' ])!!}
                    <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title', $post->title,['class'=>'form-control','placeholder'=>'Enter Upcoming Event Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('pdf','Pdf file:')}}
                        {{Form::file('pdf')}}
                    </div>
                    <div class="row justify-content-center">
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Update',['class'=>'btn btn-outline-info'])}}
                    </div>
                {!!Form::close()!!}
                @else
                    <p class="text-center"> Nothing to edit</p>
                @endif
            </div>
        </div>
    </div>
@endsection