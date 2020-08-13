@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Home/ Leaders</h3>
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
            <h4 class="card-header"> Leaders Form</h4>
            <div class="card-body">
                {!! Form::open(['action'=>['Admin\DistrictLeadersController@storeForm', $leaders->id], 'method' => 'POST','enctype'=>'multipart/form-data', 'class' => 'form'])!!}
                    
                    <div class="row mt-2">                    
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img1','District President')}}
                            {{Form::file('img1')}}
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/DistrictLeaders/{{$leaders->image_1}}" style=" height: 12em; width:12em;" alt = "Image of slider 1">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img2','District Vice-president')}}
                            {{Form::file('img2')}}
                        </div>
                        <div class="col-md-4 col-sm-4">    
                            <img src="/storage/DistrictLeaders/{{$leaders->image_2}}" style=" height: 12em; width:12em;" alt = "Image of slider 2">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img3','District Secretary')}}
                            {{Form::file('img3')}}
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/DistrictLeaders/{{$leaders->image_3}}" style=" height: 12em; width:12em;" alt = "Image of slider 3">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img4','District Secretary')}}
                            {{Form::file('img4')}}
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/DistrictLeaders/{{$leaders->image_4}}" style=" height: 12em; width:12em;" alt = "Image of slider 3">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img5','Treasurer')}}
                            {{Form::file('img5')}}
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/DistrictLeaders/{{$leaders->image_5}}" style=" height: 12em; width:12em;" alt = "Image of slider 3">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="form-group col-md-8 col-sm-8">
                            {{Form::label('img6','Joint Secretary')}}
                            {{Form::file('img6')}}
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img src="/storage/DistrictLeaders/{{$leaders->image_6}}" style=" height: 12em; width:12em;" alt = "Image of slider 3">
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Save',['class' => 'btn btn-outline-info'])}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection