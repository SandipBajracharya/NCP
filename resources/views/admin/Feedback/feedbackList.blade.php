@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Feedback List </h3>
            </div>
        </div>
        </div>
    </div>

    @php
        $c=0;
    @endphp

    <div class="col-12">
        @include('messages.message')
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th>Sn</th>
                        <th>Fullname</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Feedback</th>
                        <th>Sent on</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    @if($feedbacks)
                        @foreach($feedbacks as $feedback)
                            @php
                                $c++;
                            @endphp
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$feedback->fullname}}</td>
                                <td>{{$feedback->phone}}</td>
                                <td>{{$feedback->email}}</td>
                                <td>{{$feedback->feedback}}</td>
                                <td>{{$feedback->created_at->format('d M Y')}}</td>
                                <td>
                                    <a href="/feedback/{{$feedback->id}}" class="btn btn-outline-info btn-sm"><i class="fa fa-eye pr-1" aria-hidden="true"></i>{{__('View')}}</a>
                                </td>
                                <td>
                                    <form action="{{ route('feedback.destroy', $feedback->id)}}" method="Post" onsubmit=" whenClick(event) ">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button name="Submit" type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
            </div>
        </div>
    </div>

    <script>
        function whenClick(e)
        {
            if(confirm("Are you sure You want to delete this feedback?"))
            {
                return true;
            }
            else{
                e.preventDefault();
            }
        }
    </script>
@endsection