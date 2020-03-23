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
                    <input name="product_name" type="text" class="form-control" id="product_name_id" placeholder="Product Name">
                    <br>
                    <select name="category" class="form-control" id="category_id" required>
                        @foreach($categories as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input name="weight" type="text" class="form-control" id="weight_id" placeholder="Weight">
                    <br>
                    <input name="size" type="text" class="form-control" id="size_id" placeholder="Size">
                    <br>
                    <select name="packaging" class="form-control" id="packaging_id" required>
                        @foreach($packaging as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <select name="process" class="form-control" id="process_id" required>
                        @foreach($process as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <select name="delivery_terms" class="form-control" id="delivery_terms_id" required>
                        @foreach($deliveries as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input name="fertilizers" type="text" class="form-control" id="fertilizers_id" placeholder="Fertilizers">
                </div>
                <div class="col">
                    <input name="product_type" id="product_type_id" class="form-control" placeholder="Product type">
                    <br>
                    <label>Time table</label>
                    <br>
                    <div class="form-inline">
                        <input name="start_date" id="start_date_id" class="datepicker" style="width: 49% ; margin-right: 7px;" placeholder="Start date">
                        <input name="end_date" id="end_date_id" class="datepicker" style="width: 49%;" placeholder="End date">
                    </div>
                    <br>
                    <input name="product_capacity" type="text" class="form-control" id="product_capacity_id" placeholder="Product capacity">
                    <br>
                    <input name="pesticides" type="text" class="form-control" id="pesticides_id" placeholder="Pesticides">
                    <br>
                    <input name="sorting" id="sorting_id" type="text" class="form-control"  placeholder="Sorting">
                    <br>
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
                    <textarea name="delivery_details" id="delivery_details_id" style="height: 173px;" class="form-control" placeholder="Delivery details"></textarea>
                    <br>
                    <textarea name="payment_details" id="payment_details_id" style="height: 173px;" class="form-control" placeholder="Payment details"></textarea>
                    <br>
                </div>
            </div>
            <br>
            <br>
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
