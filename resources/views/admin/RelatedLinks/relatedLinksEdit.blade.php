@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Related Links/ Edit </h3>
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
            <div class="card-header">Related Links Edit Form</div>
            <div class="card-body">
                @if($links)
                    {!!Form::open(['action'=>['Admin\RelatedLinksController@update', $links->id], 'method'=>'POST', 'class' => 'form' ])!!}
                        <div class="form-group">
                            {{Form::label('link','Complete URL')}}
                            {{Form::text('link',$links->links, ['class'=>'form-control'])}}
                        </div>
                        <div class="row justify-content-center">
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('update',['class'=>'btn btn-outline-info'])}}
                        </div>
                    {!!Form::close()!!}
                @endif
            </div>
        </div>
    </div>
@endsection