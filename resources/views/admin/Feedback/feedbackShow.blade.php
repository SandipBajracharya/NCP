@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Feedback View </h3>
            </div>
        </div>
        </div>
    </div>

    <div class="col-sm-6 ml-3 mb-2">
        <a href="/feedback" class="btn btn-info btn-sm "><i class="fa fa-arrow-left" aria-hidden="true"></i> {{_('Back')}}</a> 
    </div>
    @if($feedback)
        <div class="col-8 offset-2">
            On {{$feedback->created_at->format('d M Y')}}
            <div class="card">
                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <th>Fullname</th>
                            <td> {{$feedback->fullname}}</td>
                        </tr>
                        <tr>
                            <th>Phone number</th>
                            <td> {{$feedback->phone}}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td> {{$feedback->email}}</td>
                        </tr>
                        <tr>
                            <th>Feedback</th>
                            <td> {{$feedback->feedback}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection