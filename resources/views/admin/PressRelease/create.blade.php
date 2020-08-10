@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Home/Press Release </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-8 offset-md-2">
        <div class="card card-info">
            <div class="card-header">Press Release Content</div>
            <div class="card-body">
                {!!Form::open(['action'=>'Admin\PressReleaseController@store', 'method'=>'POST', 'class' => 'form' ])!!}
                    <div class="form-group">
                        {{Form::label('title','Title')}}
                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Enter Press Release Title'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('body','Body')}}
                        {{Form::textArea('body','',['class'=>'form-control','placeholder'=>'Enter content'])}}
                    </div>
                    <div class="row justify-content-center">
                        {{Form::submit('Submit',['class'=>'btn btn-outline-info'])}}
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection