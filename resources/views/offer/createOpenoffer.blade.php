@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form action="{{ route('offer.store') }}" method="POST">
            <div class="row">
                <div class="col">
                    <h1>Add Open offer</h1>
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
                    <div class="form-inline form-group">
                        <input name="weight" style="width: 60%" type="text" class="form-control" id="weight_id" placeholder="Weight">
                        <select name="units" style="width: 40%" class="form-control" id="units" required>
                            <option value="" disabled selected>Choose a unit</option>
                            <option value="">Pound</option>
                            <option value="">Kg</option>
                            <option value="">Ton (Metric)</option>
                        </select>
                    </div>
                    <input name="size" type="text" class="form-control form-group" id="size_id" placeholder="Size">
                    <select name="packaging" class="form-control form-group" id="packaging_id" required>
                        @foreach($packaging as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="process" class="form-control form-group" id="process_id" required>
                        @foreach($process as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="delivery_terms" class="form-control form-group" id="delivery_terms_id" required>
                        @foreach($deliveries as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <input name="fertilizers" type="text" class="form-control form-group" id="fertilizers_id" placeholder="Fertilizers">
                </div>
                <div class="col">
                    <input name="product_type" id="product_type_id" class="form-control form-group" placeholder="Product type">
                    <label>Time table</label>
                    <div class="form-inline form-group">
                        <input name="start_date" id="start_date_id" class="datepicker" style="width: 49% ; margin-right: 7px;" placeholder="Start date">
                        <input name="end_date" id="end_date_id" class="datepicker" style="width: 49%;" placeholder="End date">
                    </div>
                    <input name="product_capacity" type="text" class="form-control form-group" id="product_capacity_id" placeholder="Product capacity">
                    <input name="pesticides" type="text" class="form-control form-group" id="pesticides_id" placeholder="Pesticides">
                    <input name="sorting" id="sorting_id" type="text" class="form-control form-group"  placeholder="Sorting">
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
                    <textarea name="delivery_details" id="delivery_details_id" style="height: 173px;" class="form-control form-group" placeholder="Delivery details"></textarea>
                    <textarea name="payment_details" id="payment_details_id" style="height: 173px;" class="form-control form-group" placeholder="Payment details"></textarea>
                </div>
            </div>
            <input type="hidden" id="offer_type_id" name="offer_type" value="2">
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
