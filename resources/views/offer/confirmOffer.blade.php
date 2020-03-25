@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form action="{{ route('offer.store') }}" method="POST">
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
                    <input name="product_name" type="text" class="form-control" id="product_name_id" placeholder="Product Name">
                    <br>
                </div>
                <div class="col-6">
                    <input name="product_type" id="product_type_id" class="form-control" placeholder="Product type">
                    <br>
                    <i class="fas fa-check-circle"></i>
                    <br>
                    <h3>Congratulation your offer as been placed</h3>
                    <br>
                </div>
                <div class="col">
                    <textarea name="delivery_details" id="delivery_details_id" style="height: 173px;" class="form-control" placeholder="Delivery details"></textarea>
                    <br>
                </div>
            </div>
            @csrf

            <div class="form-group row">
                <div class="col"> </div>
                <div class="col"> </div>
                <div class="col">
                    <div class="form-inline" style="text-align: end;">
                        <a href="" style="width: 65%; margin-right: 17px">save as concept</a>
                        <button type="submit" class="btn btn-primary" style="width: 30%;">Publish</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
