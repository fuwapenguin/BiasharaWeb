@extends('layouts.app')

@section('content')
    <div class="col">
        <div>
            <h6>Step 1: Provide company details</h6>
            <h1>Create your company</h1>
            <h6>Please provide the following info to set up your company</h6>
        </div>
        <form action="{{ route('company') }}" method="POST">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input name="company_name" type="text" class="form-control" placeholder="Company name"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-5">
                    <input name="registration" type="text" class="form-control" placeholder="Registration registation number"/>
                </div>
                <div class="col-sm-5">
                    <select name="country_id" class="form-control" id="country_id" required>
                        <option value="" disabled selected>Country of registration</option>
                        @foreach($countries as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <div class="col-sm-5">
                    <input name="company_adress" type="text" class="form-control" placeholder="Adress"/>
                </div>
                <div class="col-sm-5">
                    <input name="year_establishment" class="datepicker form-control" placeholder="Year of establishment" required />
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-5">
                    <input name="company_postal_code" type="text" class="form-control" placeholder="Postal code"/>
                </div>
                <div class="col-sm-5">
                    <input name="company_email" type="email" class="form-control" placeholder="Email adress"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-5">
                    <input name="phone_number" type="number" class="form-control" placeholder="Phone number"/>
                </div>
                <div class="col-sm-5">
                    <input name="specialisation" type="text" class="form-control" placeholder="Specialisation"/>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-7">
                    <input name="website" type="url" class="form-control" placeholder="Website"/>
                </div>
                <div class="col-sm-3">
                    <select name="employees" class="form-control" id="employees" required>
                        <option value="" disabled selected>Employees</option>
                        <option value="1-5">1-5</option>
                        <option value="6-15">6-15</option>
                        <option value="16-50">16-50</option>
                        <option value="50+">50+</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-sm-10">
                    <div class="form-check">
                        <input name="Terms_condition" type="checkbox" class="form-check-input" value="1" required/>
                        <label class="form-check-label" for="start">Terms and conditions</label>
                    </div>
                </div>
            </div>

            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Create Company</button>
                </div>
                <div class="col-sm-9">

                </div>
            </div>

        </form>
    </div>
@endsection