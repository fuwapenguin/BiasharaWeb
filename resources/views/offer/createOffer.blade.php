@extends('layouts.app')

@section('content')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" media="all">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <div class="col" xmlns="http://www.w3.org/1999/html">
        <form role="form" action="{{ route('offer.store') }}" method="POST" id="offerForm" enctype="multipart/form-data" >
            @csrf
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
                    <h3>Upload images of your product</h3>
                </div>
            </div>

            <div class="row">
                <div class="col form-group">
                    <input type="file" name="file[]" class="form-control form-group" id="img1" accept="image/*" onchange="filePreview(this, 'img1')" /> <br />
                    <img id="img1Preview" src="{{URL::asset('/images/BiasharaLogo001.png')}}" alt="img 1" style="max-width: 250px; max-height: 250px" /> <br />
                    <button class="btn btn-input  remove-button" type="button" onclick="removePreview(this, 'img1')">Delete</button>
                </div>
                <div class="col form-group">
                    <input type="file" name="file[]" class="form-control form-group" id="img2" accept="image/*" onchange="filePreview(this, 'img2')" /> <br />
                    <img id="img2Preview" src="{{URL::asset('/images/BiasharaLogo001.png')}}" alt="img 1" style="max-width: 250px; max-height: 250px" /> <br />
                    <button class="btn btn-input  remove-button" type="button" onclick="removePreview(this, 'img2')">Delete</button>
                </div>
                <div class="col form-group">
                    <input type="file" name="file[]" class="form-control form-group" id="img3" accept="image/*" onchange="filePreview(this, 'img3')" /> <br />
                    <img id="img3Preview" src="{{URL::asset('/images/BiasharaLogo001.png')}}" alt="img 1" style="max-width: 250px; max-height: 250px" /> <br />
                    <button class="btn btn-input  remove-button" type="button" onclick="removePreview(this, 'img3')">Delete</button>
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col">
                    <input name="product_name" type="text" class="form-control form-group" id="product_name_id" placeholder="Product Name">
                    <select name="category" class="form-control form-group" id="category_id" required>
                        <option> -- select an option -- </option>
                        @foreach($categories as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="sub_category" class="form-control form-group" id="sub_category_id" required>
                        <option> -- select an option -- </option>
                        @foreach($subCategories as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="product_type" class="form-control form-group" id="product_id" required>
                        <option> -- select an option -- </option>
                        @foreach($productType as $id => $display)
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
                    <input name="quantity" type="text" class="form-control form-group" id="quantity_id" placeholder="Quantity">
                    <select name="packaging" class="form-control form-group" id="packaging_id" required>
                        <option> -- select an option -- </option>
                        @foreach($packaging as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <select name="process" class="form-control form-group" id="process_id" required>
                        <option> -- select an option -- </option>
                        @foreach($process as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <input name="pricing" type="text" class="form-control form-group" id="pricing_id" placeholder="Price">
                    <select name="delivery_terms" class="form-control form-group" id="delivery_terms_id" required>
                        <option> -- select an option -- </option>
                        @foreach($deliveries as $id => $display)
                            <option value="{{ $id }}">{{ $display }}</option>
                        @endforeach
                    </select>
                    <input name="fertilizers" type="text" class="form-control form-group" id="fertilizers_id" placeholder="Fertilizers">
                </div>
                <div class="col">
                    <!--<input name="product_type" id="product_type_id" class="form-control form-group" placeholder="Product type"> -->
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
            <input type="hidden" id="offer_type_id" name="offer_type" value="1">
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

    <script type="text/javascript">
        function filePreview(input, id) {
            if(input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#'+id+'Preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);

                checkGoogleVision(input);
            }
        }
    </script>
    <script type="text/javascript">
        function checkGoogleVision(input) {
            let formData = new FormData($('#offerForm')[0]);
       //     let file = input.files[0];
       //     formData.append('file', file, file.name);

            for (let i = 0; i < input.files.length; i++)
            {
                formData.append('file', input.files[i], input.files[i].name);
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            let cate = {!! $categories !!};
            let subCate = {!! $subCategories !!};
            let productTypes = {!! $productType !!};
            formData.append('categories', JSON.stringify(cate));
            formData.append('subCategories', JSON.stringify(subCate));
            formData.append('productTypes', JSON.stringify(productTypes));

            jQuery.ajax({
                url: "{{ url('/offer/createoffer') }}",
                method: 'post',
                data: formData,
                processData: false,
                contentType: false,
                success: function (result) {
                   // alert(result.toString());

                    json = JSON.parse(result);
                    $('#category_id').val(json.cat_id);
                    $('#sub_category_id').val(json.sub_cat_id);
                    $('#product_id').val(json.product_type_id);
                }
            });
        }
    </script>
    <script type="text/javascript">
        function removePreview(input, id) {
            $('#'+id).val('');
            $('#'+id+'Preview').attr('src', "{{URL::asset('/images/BiasharaLogo001.png')}}");
        }
    </script>
@endsection

