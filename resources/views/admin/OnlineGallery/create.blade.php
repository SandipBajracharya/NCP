@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Online Gallery/ Create</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-8 offset-md-2">
        @include('messages.message')

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
            <h4 class="card-header"> Gallery Form</h4>
            <div class="card-body">
                {!! Form::open(['action'=>'Admin\OnlineGalleryController@store', 'method' => 'POST','enctype'=>'multipart/form-data', 'class' => 'form'])!!}
                                         
                    <div class="form-group">
                        {{Form::label('title','FileTitle')}}
                        {{Form::text('title','',['class' => 'form-control'])}}
                    </div>

                    <div class="d-flex">
                        <div class="form-group col-6 pl-0">
                            {{Form::label('file','File: ')}}
                            {{Form::file('file')}}
                        </div>
                        <div class="form-group col-6 d-flex justify-content-end pr-1">
                            {{Form::label('type', 'File Type:')}} 
                            <div class=""> 
                                <span class="pl-2"> Photo {{ Form::radio('radio', 1, null) }}</span>
                                <span class="pl-3"> Video {{ Form::radio('radio', 2, null) }}</span>
                                <span class="pl-3"> Audio {{ Form::radio('radio', 3, null) }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        {{Form::submit('Save',['class' => 'btn btn-outline-info'])}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection