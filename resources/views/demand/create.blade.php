@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form action="{{ route('demand.store') }}" method="POST">
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="ProductName" placeholder="Product Name">
                    <br>
                    <select name="category_id" class="form-control" id="category_id" required>
                        @foreach($categories as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="text" class="form-control" id="Site" placeholder="Site">
                    <br>
                    <input type="text" class="form-control" id="Size" placeholder="Size">
                    <br>
                    <input type="text" class="form-control" id="Pricing" placeholder="Pricing">
                    <br>
                    <input type="text" class="form-control" id="Availability" placeholder="Availability">
                    <br>
                    <div class="form-inline">
                        <input type="text" style="width: 50%;" class="form-control" id="Quantity" placeholder="Quantity">
                        <input type="text" style="width: 50%;" class="form-control" id="TrialQuantity" placeholder="Trial quantity">
                    </div>
                    <br>
                    <label>Time table</label>
                    <br>
                    <div class="form-inline">
                        <input id="StartDate" class="datepicker" style="width: 50%;" placeholder="Start date">
                        <input id="EndDate" class="datepicker" style="width: 50%;" placeholder="End date">
                    </div>
                    <br>
                    <input type="text" class="form-control" id="productCapacity" placeholder="Product capacity">
                    <br>
                    <div class="form-inline">
                        <input type="text" style="width: 50%;" class="form-control" id="Pesticides" placeholder="Pesticides">
                        <input type="text" style="width: 50%;" class="form-control" id="Fertilizers" placeholder="Fertilizers">
                    </div>
                    <br>
                    <div class="form-inline">
                        <select name="delivery_terms_id" style="width: 50%;" class="form-control" id="DeliveryTerms" required>
                            @foreach($deliveries as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                        <select name="payment_terms_category_id" style="width: 50%;" class="form-control" id="PaymentTerms" required>
                            @foreach($payments as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                    </div>
                 </div>
                <div class="col">test</div>
                <div class="col">test</div>
            </div>

            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Add Reservation</button>
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('demand.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection