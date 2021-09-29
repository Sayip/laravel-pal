@extends('layout.master')

@section('content')
<link rel="stylesheet" href="{{asset ('vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset ('vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

    <link rel="stylesheet" href="{{asset ('assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Divisi</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                        @if(session()->get('sukses'))
                                <div class="alert alert-success">
                                    {{session()->get('sukses')}}
                                </div>

                            @endif
                            
                            <div class="card-header">
                                <strong class="card-title">{{$pagename}}</strong>
                                <a href="{{route('divisi.create')}}" class="btn btn-primary pull-right">Tambah</a>
                                <div class="form-inline">
                                    <form class="search-form">
                                        <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                    </form>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Divisi</th>
                                            <th>Dokumen</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($data as $i=>$row)
                                    <tr>
                                            <td>{{++$i}}</td>
                                            <td>{{$row->nama_div}}</td>   
                                            <td>{{$row->dokumen}}</td>
                                            <td><a href="{{route('divisi.edit', $row->id)}}" class="btn btn-primary">Edit</a></td>
                                            <td>
                                            <form action="{{route('divisi.destroy', $row->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" type="submit">Hapus</button>
                                            </form>
                                            </td>
                                        </tr>
                                    @endforeach
<!--                                     
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>$170,750</td>
                                        </tr>
                                        -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- <script src="{{asset ('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset ('vendors/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset ('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset ('assets/js/main.js')}}"></script> -->


    <script src="{{asset ('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset ('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset ('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset ('vendors/pdfmake/build/vfs_fonts.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset ('vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset ('assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endsection