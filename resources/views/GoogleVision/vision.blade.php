<?php
/**
 * Created by PhpStorm.
 * User: fuwap
 * Date: 3/16/2020
 * Time: 15:20
 */

?>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Annotate image</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">OCR</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


      </nav>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Optical Character Recognition | Image annotation') }}</div>

<div class="card-body">
    <form role="form" method="POST" action="/biashara/public/vision" enctype="multipart/form-data" id="uploadImageForm">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Upload image') }}</label>

            <div class="col-md-6">
                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" value="{{ old('image') }}" required autofocus> <!-- onchange="{{ action('GoogleVisionController@showImageResults') }}"> -->

                @if ($errors->has('image'))
                    <span class="invalid-feedback">
                                              <strong>{{ $errors->first('image') }}</strong>
                                          </span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>
    </form>
</div>
</div>
</div>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    <script>
        jQuery(document).ready(function() {
            $(document).on('change', '#image', function (e) {
                e.preventDefault();

                let formData = new FormData($('#uploadImageForm')[0]);
                let file = $('input[type=file]')[0].files[0];
                //formData.append('file', file, file.name);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                jQuery.ajax({
                    url: "{{ url('/vision') }}",
                    method: 'post',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        alert(result.toString());

                      /*  json = JSON.parse(result);
                        for(var i in json)
                        {
                            alert(json[i]);
                        }*/
                    }
                });
            });
        });
    </script>
</html>
