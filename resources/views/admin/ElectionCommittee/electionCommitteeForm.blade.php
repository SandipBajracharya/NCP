@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Election Committee/ Form</h3>
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
            <h4 class="card-header"> Election Committee Form</h4>
            <div class="card-body">
                {!! Form::open(['action'=>'Admin\ElectionCommitteeController@store', 'method' => 'POST','enctype'=>'multipart/form-data', 'class' => 'form'])!!}
                                         
                    <div class="form-group">
                        {{Form::label('fullname','Fullname')}}
                        {{Form::text('fullname','',['class' => 'form-control'])}}
                    </div>

                    <div class="form-group">
                        {{Form::label('phone','Phone')}}
                        {{Form::text('phone','',['class' => 'form-control'])}}
                    </div>

                    {{-- <div class="d-flex"> --}}
                        <div class="form-group pl-0">
                            {{Form::label('image','Image: ')}}
                            {{Form::file('image')}}
                        </div>

                        <div class="form-group d-flex pl-0">
                            {{Form::label('type', 'Chettra number:')}} 
                            <div class="">
                                @for ($i = 1; $i <= 10; $i++)
                                    <span class="pl-2"> {{$i}} {{ Form::radio('radio', $i, null) }}</span>
                                @endfor
                            </div>
                        </div>
                    {{-- </div> --}}

                    <div class="row justify-content-center">
                        {{Form::submit('Save',['class' => 'btn btn-outline-info'])}}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection