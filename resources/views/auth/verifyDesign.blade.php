@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <form class="d-inline" method="POST" action="">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="verify_code" class="col-md-3"></label>
                                <div class="col-md-6">
                                    <input style="margin-top: 60px" id="verify_code_id" class="form-control" name="verify_code" placeholder="Verification code" autofocus>
                                </div>
                            </div>
                            @csrf
                            <div class="form-group row mb-0">
                                <div class="col-md-3"></div>
                                <div style=" flex: 0 0 50%; max-width: 50%; padding: 0px 15px; alignment: right">
                                    <button type="submit" class="btn btn-primary" style="float:right">
                                        {{ __('Verify') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form class="d-inline" method="POST" action="">
                        <div style="text-align: center">
                            {{ __('Retry to resend the verification code') }}
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary form-group">
                                {{ __('Resend request') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
