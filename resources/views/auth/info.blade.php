@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form class="d-inline" method="POST" action="">
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-1"></label>
                            <div class="col-md-10">
                                <h1>Fill in your account information</h1>
                                <p>Please fill in an description and upload profile photo</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <textarea name="account_description" id="account_description_id" style="height: 173px;" class="form-control form-group" placeholder="Profile description (0/255)"></textarea>
                            </div>
                            <div class="col-md-2" style="padding: 0px;">
                                <input type="file" id="img" name="img" accept="image/*" style="width:125px; height: 137px;">
                                <button type="submit" class="btn btn-primary" style="float:right">
                                    {{ __('Next step') }}
                                </button>
                            </div>
                        </div>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
