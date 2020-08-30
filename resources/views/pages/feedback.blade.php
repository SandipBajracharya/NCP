@extends('layouts.app')

@section('content')
    <h4><strong>{{__('Feedback')}}</strong></h4>

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
    <div class="card">
        <form role="form" action="{{ route('feedback.store')}}" method="POST">
            @csrf
            <div class="card-body" style="background-color: #fff3e6;">
                <div class="form-group">
                    <label for="fullname">Fullname</label>
                    <input name="fullname" type="text" class="form-control feedback-ao" id="fullname" value="{{ old('fullname')}}" placeholder="Enter your fullname">
                </div>
                <div class="d-md-flex justify-content-between">
                    <div class="form-group">
                        <label for="phone number">Phone number</label>
                        <input name="phone" type="text" class="form-control feedback feedback-ao" id="phone" value="{{ old('phone')}}" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control feedback feedback-ao" id="email" value="{{ old('email')}}" placeholder="Enter your email">
                    </div>
                </div>
                <hr>
                <p><strong>Leave your feedback here.</strong></p>
                
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        <textarea name="feedback" onkeypress="captureEnter(event)" class="form-control" id="feedback" placeholder="Enter your feedback" rows="6" cols="105">{{ old('feedback')}}</textarea>
                    </div>
                </div>

                <div class="form-group row justify-content-center">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey')}}"></div>
                </div>

                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>

            </div>
            <!-- /.card-body -->
        </form>
    </div>


    {{-- to take enter as an input --}}
    <script>
        function captureEnter(e)
        {
            if(window.event.keycode === 13){
                document.getElementById("feedback").value = document.getElementById("feedback").value + "<br>";
                return false;   
            }
            else{
                return true;
            }
        }
    </script>
@endsection