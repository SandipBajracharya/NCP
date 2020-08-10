@extends('layouts.adminLayout')

@section('content')

    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Contacts </h3>
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
            <div class="card-header">Contact Edit Form</div>
            @if($contact)
                <div class="card-body">
                    {!!Form::open(['action' => ['Admin\ContactController@storeContact', $contact->id], 'method' => 'POST'])!!}
                        <div class="form-group">
                            {{Form::label('telephone1','Telephone1')}}
                            {{Form::text('telephone1',$contact->telephone1,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('telephone2','Telephone2')}}
                            (Optional)
                            {{Form::text('telephone2',$contact->telephone2,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('telephone3','Telephone3')}}
                            (Optional)
                            {{Form::text('telephone3',$contact->telephone3,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('fax','Fax')}}
                            {{Form::text('fax',$contact->fax,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('email','E-mail')}}
                            {{Form::email('email',$contact->email,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('url','URL')}}
                            {{Form::text('url',$contact->url,['class'=>'form-control'])}}
                        </div>
                        <div class="form-group text-center">
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Update',['class'=>'btn btn-outline-info btn-sm'])}}
                        </div>
                    {!!Form::close()!!}
                </div>
            @endif
        </div>
    </div>
@endsection