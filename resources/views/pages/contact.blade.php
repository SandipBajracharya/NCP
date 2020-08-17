@extends('layouts.app')

@section('content')
    <h4><strong>Contacts</strong></h5>
    <div class="card">
        <div class="card-body" style="background-color: #fff3e6;">
            <h5>Nepali Congress Central Office</h5>
            <p>B.P. Smriti Bhawan, B.P. Nagar <br>
                Lalitpur, Nepal.
            
            @if($contact)    
            <table cellpadding="5px" style="font-style: italic;">
                <tr>
                    <td><i class="fa fa-mobile" aria-hidden="true"></i> Tel :</td>        
                    <td>  (977-1) {{$contact->telephone1}} / {{$contact->telephone2}} / {{$contact->telephone3}} </td>
                </tr>
                <tr>
                    <td><i class="fa fa-fax" aria-hidden="true"></i> Fax :</td>
                    <td>(977-1) {{$contact->fax}} </td>
                </tr>
                <tr>
                    <td><i class="fa fa-envelope" aria-hidden="true"></i> Email :</td>    
                    <td> {{$contact->email}} </td>
                </tr>
                <tr>
                    <td><i class="fa fa-link" aria-hidden="true"></i> URL :  </td>      
                    <td> {{$contact->url}} </td>
                </tr>
            </table>
            @endif
        </div>
    </div>
@endsection