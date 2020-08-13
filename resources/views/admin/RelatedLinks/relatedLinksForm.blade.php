@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Related Links/ Create </h3>
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

        @include('messages.message')
        <div class="card card-info">
            <div class="card-header">Related Links Create Form</div>
            <div class="card-body">
                {!!Form::open(['action'=>'Admin\RelatedLinksController@store', 'method'=>'POST', 'class' => 'form' ])!!}
                    <div class="form-group">
                        {{Form::label('link','Complete URL')}}
                        {{Form::text('link','', ['class'=>'form-control','placeholder'=>'Example: https://www.nckathmandu.com'])}}
                    </div>
                    <div class="row justify-content-center">
                        {{Form::submit('Add',['class'=>'btn btn-outline-info'])}}
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
@endsection