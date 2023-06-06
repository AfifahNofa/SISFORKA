@extends('layout.template')

@section('content')

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Form Tambah Data</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Sarana dan Prasanara</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ $url_form }}" enctype="multipart/form-data">
                            @csrf
                            @if(isset($sarana))
                                @method('PUT')
                            @endif

                            <div class="form-group">
                                <label>Judul</label>
                                <input class="form-control @error('judul') is-invalid @enderror" value="{{ isset($sarana) ? $sarana->judul : old('judul') }}" name="judul" type="text" />
                                @error('judul')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="image">Foto</label>
                                <input type="file" class="form-control" required="required" name="foto" /><br />
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input class="form-control @error('ket') is-invalid @enderror" value="{{ isset($sarana) ? $sarana->ket : old('ket') }}" name="ket" type="text" />
                                @error('ket')
                                <span class="error invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>