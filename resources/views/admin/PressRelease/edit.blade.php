@extends('layouts.adminLayout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h3 class="m-0 text-dark pl-2"> Home /Press Release /Edit </h3>
        </div>
    </div>
    </div>
</div>

<div class="col-sm-6 ml-3 mb-2">
    <a href="/pressrelease" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
</div>

<div class="col-md-8 offset-md-2">
    @if($post)
    <div class="card card-info">
        <div class="card-header">Press Release Content edit</div>
        <div class="card-body">
            {!!Form::open(['action'=>['Admin\PressReleaseController@update', $post->id], 'method'=>'POST', 'class' => 'form' ])!!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Enter Press Release Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('body','Body')}}
                    {{Form::textArea('body',$post->body,['class'=>'form-control','placeholder'=>'Enter content'])}}
                </div>
                <div class="row justify-content-center">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update',['class'=>'btn btn-outline-info'])}}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
    @endif
</div>
@endsection