@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    <h5><strong>Former Leaders</strong></h5>
    <div class="row px-2">
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/BP_koirala.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold" style="">Bisheshwor Prasad Koirala</p>
        </div>
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/Ganesh_man_singh.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold">Ganesh Man Singh</p>
        </div>
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/Subarna_Samsher_Rana.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold">Subarna Samsher Rana</p>
        </div>
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/Krishna_Prasad_Bhattarai.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold">Krishna Prasad Bhattrai</p>
        </div>
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/Girija_Prasad_koirala.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold">Girija Prasad Koirala</p>
        </div>
        <div class="col-md-2 card-lg-2 px-1">
            <img src="/storage/Leaders/Sushil_koirala.jpg" class="card-img-top p-1">
            <p class="text-center font-weight-bold">Sushil Koirala</p>
        </div>
    </div>
    <hr>
    {{-- <div class="col-sm-12">
        <div class="row justify-content-between px-3">
            <a href="" class="btn btn-info btn-sm">Election Committee</a>
            <a href="" class="btn btn-outline-danger btn-sm">Election Committee</a>
            <a href="" class="btn btn-outline-success btn-sm">Donate</a>
        </div>
    </div> --}}
    <div class="card">
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab1">Press Release</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#tab2">Upcoming events</a>
            </li>
        </ul>
        
          <!-- Tab panes -->
        <div class="tab-content clearfix">
            <div id="tab1" class="container tab-pane active"><br>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div id="tab2" class="container tab-pane fade"><br>
              <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>
@endsection
