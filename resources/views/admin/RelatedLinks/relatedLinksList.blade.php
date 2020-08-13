@extends('layouts.adminLayout')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="m-0 text-dark pl-2"> Related Links/ Content List </h3>
            </div>
        </div>
        </div>
    </div>

    @php
        $c = 1;
    @endphp

    <div class="col-md-10 offset-md-1">
        @include('messages.message')
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover text-center">
                    <tr>
                        <th>SN</th>
                        <th>Links</th>
                        <th colspan="2">Actions</th>
                    </tr>
                    @if(count($links)>0)
                        @foreach($links as $post)
                            <tr>
                                <td>{{$c}}</td>
                                <td>{{$post->links}}</td>
                                <td class=""><a href="/admin/relatedlinks/{{$post->id}}/edit" class="btn btn-outline-success btn-sm"><i class="fa fa-pen pr-1" aria-hidden="true"></i> Edit</a></td>
                                <td>
                                    <form action="{{ route('relatedlinks.destroy', $post->id)}}" method="Post" onsubmit=" whenClick(event) ">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button name="Submit" type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @php
                                $c++;   
                            @endphp
                        @endforeach
                    @else
                    <tr>
                        <td colspan="3"> No list found.</td>
                    </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>

    <script>
        function whenClick(e){
            if(confirm("Are you sure you want to delete?"))
            {
                return true;
            }
            else{
                e.preventDefault();
            }
        }
    </script> 
@endsection