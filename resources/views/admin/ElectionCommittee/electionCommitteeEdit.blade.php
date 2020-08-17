@extends('layouts.adminLayout')

@section('content')
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h3 class="m-0 text-dark pl-2"> Election Committee/ Edit </h3>
        </div>
    </div>
    </div>
</div>

<div class="col-sm-6 ml-3 mb-2">
    <a href="/admin/electioncommittee" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
</div>



<div class="col-md-8 offset-md-2">
    @include('messages.message')
    @if($member)
    <div class="card card-info">
        <div class="card-header">Election Committee edit</div>
        <div class="card-body">
            {!!Form::open(['action'=>['Admin\ElectionCommitteeController@update', $member->id], 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class' => 'form' ])!!}
                <div class="form-group">
                    {{Form::label('fullname','Fullname')}}
                    {{Form::text('fullname',$member->fullname,['class'=>'form-control','placeholder'=>'Enter Press Release Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('phone','Phone')}}
                    {{Form::text('phone',$member->phone,['class'=>'form-control','placeholder'=>'Enter content'])}}
                </div>
                <div class="form-group d-flex pl-0">
                    {{Form::label('type', 'Chettra number:')}} 
                    <div class="">
                        @for ($i = 1; $i <= 10; $i++)
                            <span class="pl-2"> {{$i}} {{ Form::radio('radio', $i, null) }}</span>
                        @endfor
                    </div>
                </div>

                <div class="row mt-2">                    
                    <div class="form-group col-md-8 col-sm-8">
                        {{Form::label('image','Image')}}
                        {{Form::file('image')}}
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/ChettraLeaders/{{$member->image}}" class="img-thumbnail" alt = "Image">
                    </div>
                </div>
                
                <div class="row justify-content-center pt-2">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Update',['class'=>'btn btn-outline-info'])}}
                </div>
            {!!Form::close()!!}
        </div>
    </div>
    @endif
</div>
@endsection