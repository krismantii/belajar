@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>
@if(session()->has('info'))
      <div class="alert alert-dismissible alert-success">
          {{ session()->get('info') }}
      </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Buat komunitas baru') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('adminregisteradd') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required autofocus>

                        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telfon" class="col-md-4 col-form-label text-md-right">{{ __('telfon') }}</label>

                            <div class="col-md-6">
                                <input id="telfon" type="text" class="form-control{{ $errors->has('telfon') ? ' is-invalid' : '' }}" name="telfon" value="{{ old('telfon') }}" required>

                        
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="daerah" class="col-md-4 col-form-label text-md-right">{{ __('daerah') }}</label>

                            <div class="col-md-6">
                                <input id="daerah" type="text" class="form-control{{ $errors->has('daerah') ? ' is-invalid' : '' }}" name="daerah" value="{{ old('daerah') }}" required>

                    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('deskripsi') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control" rows="5" id="deskripsi" name="deskripsi"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('foto') }}</label>

                            <div class="col-md-6">
                            <img class="img-responsive img-cover img-center mb-2" id="preview" src="" style="max-height:400px; max-width: 400px;" >
                            <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" required>

                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Daftar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function preview(input) {
        if (input.files && input.files[0]) {
            var freader = new FileReader();
            freader.onload = function (e) {
                $("#preview").show();
                $('#preview').attr('src', e.target.result);
            }
            freader.readAsDataURL(input.files[0]);
        }
    }
    $("#foto").change(function(){
        preview(this);
    });
</script>
@endsection