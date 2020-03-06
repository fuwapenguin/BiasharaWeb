@extends('layouts.app')

@section('content')
    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form action="{{ route('demand.store') }}" method="POST">
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
                        <input type="text" style="width: 49%; margin-right: 7px;" class="form-control" id="Quantity" placeholder="Quantity">
                        <input type="text" style="width: 49%;" class="form-control" id="TrialQuantity" placeholder="Trial quantity">
                    </div>
                    <br>
                    <label>Time table</label>
                    <br>
                    <div class="form-inline">
                        <input id="StartDate" class="datepicker" style="width: 49% ; margin-right: 7px;" placeholder="Start date">
                        <input id="EndDate" class="datepicker" style="width: 49%;" placeholder="End date">
                    </div>
                    <br>
                    <input type="text" class="form-control" id="productCapacity" placeholder="Product capacity">
                    <br>
                    <div class="form-inline">
                        <input type="text" style="width: 49%; margin-right: 7px;" class="form-control" id="Pesticides" placeholder="Pesticides">
                        <input type="text" style="width: 49%;" class="form-control" id="Fertilizers" placeholder="Fertilizers">
                    </div>
                    <br>
                    <div class="form-inline">
                        <select name="delivery_terms_id" style="width: 49%; margin-right: 7px;" class="form-control" id="DeliveryTerms" required>
                            @foreach($deliveries as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                        <select name="payment_terms_category_id" style="width: 49%;" class="form-control" id="PaymentTerms" required>
                            @foreach($payments as $id => $display)
                                <option value="{{ $id }}">{{ $display }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <div class="form-inline">
                        <textarea id="" style="width: 49%; height: 110px; margin-right: 7px;" class="form-control" placeholder="Delivery details"></textarea>
                        <textarea id="" style="width: 49%; height: 110px;" class="form-control" placeholder="Payment details"></textarea>
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
                    <select name="purchase_intention_id" class="form-control" id="purchase_intention_id" required>
                        @foreach($purchase as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <select name="packaging_id" class="form-control" id="packaging_id" required>
                        @foreach($packaging as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="text" class="form-control" id="Distribution" placeholder="Distribution">
                    <br>
                    <input type="text" class="form-control" id="Sorting" placeholder="Sorting">
                    <br>
                    <textarea id="Certifications" style="height: 173px;" class="form-control" placeholder="Certifications"></textarea>
                    <br>
                    <textarea id="Variety" style="height: 173px;" class="form-control" placeholder="Variety"></textarea>
                    <br>
                    <textarea id="Curing" style="height: 173px;" class="form-control" placeholder="Curing"></textarea>
                </div>
            </div>
            <br>

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