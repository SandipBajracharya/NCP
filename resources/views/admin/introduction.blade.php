@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Introduction </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-md-8 offset-md-2">

        @include('messages.message')
        <div class="card card-info">
            <div class="card-header">Introduction Content Edit</div>
            <div class="card-body">
                @if($content)
                {!! Form::open(['action'=> ['Admin\IntroductionController@storeContent', $content->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{Form::label('background','Background')}}
                        {{Form::textArea('background',$content->background,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('genesis_of_NC','Genesis of Nepali Congress')}}
                        {{Form::textArea('genesis_of_NC',$content->genesis_of_NC,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('imp_landmarks','Important Landmarks')}}
                        {{Form::textArea('imp_landmarks',$content->imp_landmarks,['class'=>'form-control'])}}
                    </div>
                    <div class="form-group text-center">
                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Update',['class'=>'btn btn-sm btn-outline-info'])}}
                    </div>
                {!! Form::close()!!}
                @endif
            </div>
        </div>
    </div>
@endsection