@extends('layout.master')

@section('content')

    <link rel="stylesheet" href="{{asset('templet/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('templet/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('templet/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('templet/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('templet/vendors/selectFX/css/cs-skin-elastic.css')}}">

    <link rel="{{asset('stylesheet" href="assets/css/style.css')}}">

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Monitor</h1>
                    </div>
                </div>
            </div>
            {{-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Forms</a></li>
                            <li class="active">Basic</li>
                        </ol>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>{{$pagename}}</strong>                            
                            </div>
                            <div class="card-body card-block">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <div class="list-group">
                                            @foreach($errors->all() as $error)
                                                <li class="list-group-item">
                                                    {{$error}}
                                                </li>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif    
                                <form action="{{route('monitor.update', $data->id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                @method('PATCH')
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nomor Dokumen</label></div>
                                    <div class="col-12 col-md-9"><input type="string" id="text-input" name="nomor" value="{{$data->no_dok}}" placeholder="Tulis Disini" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="select" class=" form-control-label">Divisi/Unit Kerja</label></div>
                                    <div class="col-12 col-md-9">
                                        <select name="divisi" id="select" class="form-control">

                                        @foreach($data_kategori as $kategori)
                                            <option value={{$kategori->id}}
                                            @if($kategori->id==$data->id_kategori)
                                                selected
                                            @endif
                                            >
                                            {{$kategori->nama_kategori}}</option>

                                        @endforeach
                                        </select>
                                    </div>
                                </div>
                    
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Dokumen</label></div>
                                    <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" value="{{$data->divisi}}" placeholder="Tulis Disini" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Terbit</label></div>
                                    <div class="col-12 col-md-9"><input type="date" id="text-input" name="tanggal" value="{{$data->tgl_terbit}}" placeholder="Tulis Disini" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Review</label></div>
                                    <div class="col-12 col-md-9"><input type="int" id="text-input" name="review" value="{{$data->status_review}}" placeholder="Tulis Disini" class="form-control"></div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Revisi</label></div>
                                    <div class="col-12 col-md-9"><input type="int" id="text-input" name="revisi" value="{{$data->status_revisi}}" placeholder="Tulis Disini" class="form-control"></div>
                                </div>
                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Status Dokumen</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check">
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Distribusi" class="form-check-input">Distribusi
                                                </label>
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Penyerahan HCM" class="form-check-input">Penyerahan HCM
                                                </label>
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Penyerahan MR" class="form-check-input">Penyerahan MR
                                                </label>
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Pemberian Tanggal" class="form-check-input">Pemberian Tanggal
                                                </label>
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Stempel" class="form-check-input">Stempel
                                                </label>
                                                <label for="inline-radio" class="form-check-label ">
                                                    <input type="radio" id="inline-radio" name="status" value="Arsip" class="form-check-input">Arsip
                                                </label>
                                            </div>
                                        </div>
                                    </div>                                             
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Update
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="card">
                            <div class="card-header">
                                <strong>Inline</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="" method="post" class="form-inline">
                                    <div class="form-group"><label for="exampleInputName2" class="pr-1  form-control-label">Name</label><input type="text" id="exampleInputName2" placeholder="Jane Doe" required="" class="form-control"></div>
                                    <div class="form-group"><label for="exampleInputEmail2" class="px-1  form-control-label">Email</label><input type="email" id="exampleInputEmail2" placeholder="jane.doe@example.com" required="" class="form-control"></div>
                                </form>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </div> -->
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        <script src="{{asset('templet/vendors/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('templet/vendors/popper.js/dist/umd/popper.min.js')}}"></script>

        <script src="{{asset('templet/vendors/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('templet/vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js')}}"></script>

        <script src="{{asset('templet/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('templet/assets/js/main.js')}}"></script>




@endsection