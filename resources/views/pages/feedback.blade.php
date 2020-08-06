@extends('layouts.app')

@section('content')
    <h4><strong>Feedback</strong></h4>
    <div class="card">
        {{-- <div class="card-body"> --}}
            <form role="form" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control feedback-ao" id="fullname" value="{{ old('fullname')}}" name="fullname" placeholder="Enter your fullname">
                        </div>
                    </div>
                    <div class="d-md-flex justify-content-between">
                        <div class="form-group">
                            <label for="phone number">Phone number</label>
                            <input type="String" class="form-control feedback feedback-ao" id="phone" name="phone" value="{{ old('phone')}}" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control feedback feedback-ao" id="email" name="email" value="{{ old('email')}}" placeholder="Enter your email">
                        </div>
                    </div>
                    <hr>
                    <p><strong>Leave your feedback here.</strong></p>
                    
                    <div class="d-flex justify-content-between">
                        <div class="form-group">
                            <textarea class="form-control" id="feedback" name="feedback" value="{{ old('feedback')}}" placeholder="Enter your feedback" rows="6" cols="105"></textarea>
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
        {{-- </div> --}}
    </div>
@endsection