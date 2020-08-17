@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Election Committee/ Leaders List </h3>
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
                        <th>Chettra no.</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th colspan="3">Actions</th>
                    </tr>
                    @if(count($members)>0)
                        @foreach($members as $member)
                            @php
                                $c++;
                            @endphp
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$member->fullname}}</td>
                                <td>{{$member->phone}}</td>
                                <td>{{$member->chettra_number}}</td>
                                <td>
                                    <img src="/storage/ChettraLeaders/{{$member->image}}" alt="member" class="img-fluid" style="max-height: 5em;">
                                </td>
                                <td class="{{$member->status_color}}"> {{$member->present_status}} </td>
                                <td>
                                    @if($member->status != 1)
                                        <a href="/admin/electioncommittee/{{$member->id}}/active" class="btn btn-outline-success btn-sm"><i class="fa fa-check pr-1" aria-hidden="true"></i>{{__('Active')}}</a>
                                    @else
                                        <a href="/admin/electioncommittee/{{$member->id}}/inactive" class="btn btn-outline-danger btn-sm"><i class="fa fa-times pr-1" aria-hidden="true"></i>{{__('Inactive')}}</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="/admin/electioncommittee/{{$member->id}}/edit" class="btn btn-outline-info btn-sm"><i class="fa fa-pen pr-1" aria-hidden="true"></i>{{__('Edit')}}</a>
                                </td>

                                <td>
                                    <form action="{{ route('electioncommittee.destroy', $member->id)}}" method="Post" onsubmit=" whenClick(event) ">
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
            if(confirm("Are you sure You want to delete this member?"))
            {
                return true;
            }
            else{
                e.preventDefault();
            }
        }
    </script>
@endsection