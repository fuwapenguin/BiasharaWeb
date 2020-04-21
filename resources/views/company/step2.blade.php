@extends('layouts.app')

@section('content')
    <div class="col">
        <div>
            <h6>Step 2: Provide company description</h6>
            <h1>Create your company</h1>
            <h6>Please provide the following info to set up your company</h6>
        </div>

        <form action="{{ route('step2') }}" method="POST">
            <div class="form-group row">
                <div class="col-sm-10">
                    <input type="hidden" value="{{$company_id->id}}">
                    <textarea name="company_description" type="text" class="form-control" placeholder="Company description"></textarea>
                </div>
            </div>



            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Create Company</button>
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('company.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>

        </form>
    </div>
@endsection