@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form action="{{ route('offer.store') }}" method="POST">
            <div class="row">
                <div class="col">
                    <h1>Add request</h1>
                </div>
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <input name="product_name" type="text" class="form-control form-group" id="product_name_id" placeholder="Product Name">
                    <select name="category" class="form-control form-group" id="category_id" required>
                        @foreach($categories as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <input name="site" type="text" class="form-control form-group" id="site_id" placeholder="Site">
                    <input name="size" type="text" class="form-control form-group" id="size_id" placeholder="Size">
                    <input name="pricing" type="text" class="form-control form-group" id="pricing_id" placeholder="Pricing">
                    <input name="availability" type="text" class="form-control form-group" id="availability_id" placeholder="Availability">
                    <div class="form-inline form-group">
                        <input name="quantity" type="text" style="width: 49%; margin-right: 7px;" class="form-control" id="quantity_id" placeholder="Quantity">
                        <input name="quantity_trial" type="text" style="width: 49%;" class="form-control" id="quantity_trial_id" placeholder="Trial quantity">
                    </div>
                    <label>Time table</label>
                    <div class="form-inline form-group">
                        <input name="start_date" id="start_date_id" class="datepicker" style="width: 49% ; margin-right: 7px;" placeholder="Start date">
                        <input name="end_date" id="end_date_id" class="datepicker" style="width: 49%;" placeholder="End date">
                    </div>
                    <input name="product_capacity" type="text" class="form-control form-group" id="product_capacity_id" placeholder="Product capacity">
                    <div class="form-inline form-group">
                        <input name="pesticides" type="text" style="width: 49%; margin-right: 7px;" class="form-control" id="pesticides_id" placeholder="Pesticides">
                        <input name="fertilizers" type="text" style="width: 49%;" class="form-control" id="fertilizers_id" placeholder="Fertilizers">
                    </div>
                    <div class="form-inline form-group">
                        <select name="delivery_terms" style="width: 49%; margin-right: 7px;" class="form-control" id="delivery_terms_id" required>
                            @foreach($deliveries as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                        <select name="payment_terms_category" style="width: 49%;" class="form-control" id="payment_terms_category_id" required>
                            @foreach($payments as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-inline form-group">
                        <textarea name="delivery_details" id="delivery_details_id" style="width: 49%; height: 110px; margin-right: 7px;" class="form-control" placeholder="Delivery details"></textarea>
                        <textarea name="payment_details" id="payment_details_id" style="width: 49%; height: 110px;" class="form-control" placeholder="Payment details"></textarea>
                    </div>
                </div>
                <div class="col">
                    <div style="padding: 0px 14%">
                        <label style="padding-left: 10px">Season</label>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="January"/>
                            <div style="width: 35%; text-align: start;">January</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="July"/>
                            <div style="width: 35%; text-align: start;">July</div>
                        </div>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="February"/>
                            <div class="checkBoxLable">February</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="August"/>
                            <div class="checkBoxLable">August</div>
                        </div>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="March"/>
                            <div class="checkBoxLable">March</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="September"/>
                            <div class="checkBoxLable">September</div>
                        </div>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="April"/>
                            <div class="checkBoxLable">April</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="October"/>
                            <div class="checkBoxLable">October</div>
                        </div>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="May"/>
                            <div class="checkBoxLable">May</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="November"/>
                            <div class="checkBoxLable">November</div>
                        </div>
                        <div class="form-inline checkBoxDiv">
                            <input class="checkBox" type="checkbox" name="Season[]" value="June"/>
                            <div class="checkBoxLable">June</div>
                            <input class="checkBox" type="checkbox" name="Season[]" value="December"/>
                            <div class="checkBoxLable">December</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <select name="purchase_intention" class="form-control form-group" id="purchase_intention_id" required>
                        @foreach($purchase as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="packaging" class="form-control form-group" id="packaging_id" required>
                        @foreach($packaging as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <input name="distribution" id="distribution_id" type="text" class="form-control form-group"  placeholder="Distribution">
                    <input name="sorting" id="sorting_id" type="text" class="form-control form-group"  placeholder="Sorting">
                    <textarea name="certifications" id="certifications_id" style="height: 160px;" class="form-control form-group" placeholder="Certifications"></textarea>
                    <textarea name="variety" id="variety_id" style="height: 160px;" class="form-control form-group" placeholder="Variety"></textarea>
                    <textarea name="curing" id="curing_id" style="height: 160px;" class="form-control form-group" placeholder="Curing"></textarea>
                </div>
            </div>
            <input type="hidden" id="offer_type_id" name="offer_type" value="3">
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
