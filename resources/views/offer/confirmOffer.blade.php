@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <!--<form action="{{ route('offer.store') }}" method="POST">-->
            <div class="row">
                <div class="col">
                    <h1>Add offer</h1>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6" align="center">
                    <svg height="120" width="50" style="padding-top: 50px">
                        <image href="{{url('/images/check.png')}}" height="50" width="50"/>
                    </svg>
                    <h3>Congratulation your offer as been placed</h3>
                    <br>
                    <h5>Your offer is registerd.</h5>
                    <h5>and can be found in your company offer pages.</h5>
                    <br>
                    <form action="{{ route('offer.index') }}">
                        <button type="submit" class="btn btn-primary" style="width: 20%;">View offer</button>
                    </form>
                </div>
                <div class="col">
                </div>
            </div>
            @csrf

            <div class="form-group row">
                <div class="col"> </div>
                <div class="col"> </div>
                <div class="col">
                </div>
            </div>
        <!--</form>-->
    </div>
@endsection
