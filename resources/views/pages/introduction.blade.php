@extends('layouts.app')

@section('content')
    <h4><strong>{{__('Introduction')}}</strong></h5>  
    <div class="card" style="background-color: #fff3e6;">
        <div class="card-body">
            <div id="accordion">
                <div class="card">
                  <div class="card-header py-2" id="headingOne">
                    <button class="btn btn-link" style="text-decoration: none; border: 0px;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <h5 class="mb-0">
                        {{__('Background')}}
                    </h5>
                    </button>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      {{$post->background}}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header py-2" id="headingTwo">
                    <button class="btn btn-link collapsed" style="text-decoration: none; border: 0px;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h5 class="mb-0">  
                        {{__('Genesis of Nepali Congress')}}
                      </h5>
                    </button>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      {{$post->genesis_of_NC}}
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header py-2" id="headingThree">
                      <button class="btn btn-link collapsed" style="text-decoration: none; border: 0px;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h5 class="mb-0">
                          {{__('Important Landmarks')}}
                        </h5>
                      </button>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      {{$post->imp_landmarks}}
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection