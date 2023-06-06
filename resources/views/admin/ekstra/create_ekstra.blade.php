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
                            <h6 class="m-0 font-weight-bold text-primary">Data Ekstrakulikuler</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ $url_form }}" enctype="multipart/form-data">
                                @csrf
                                @if (isset($ekstrakulikuler))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>Kode</label>
                                    <input class="form-control @error('kode') is-invalid @enderror"
                                        value="{{ isset($ekstrakulikuler) ? $ekstrakulikuler->kode : old('kode') }}"
                                        name="kode" type="text" />
                                    @error('kode')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control @error('nama') is-invalid @enderror"
                                        value="{{ isset($ekstrakulikuler) ? $ekstrakulikuler->nama : old('nama') }}"
                                        name="nama" type="text" />
                                    @error('nama')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Foto</label>
                                    <input type="file" class="form-control" required="required" name="foto" value="{{$ekstrakulikuler->foto}}"/><br>
                                    <img width="150px" src="{{asset('storage/'.$ekstrakulikuler->foto)}}">
                                </div>
                                <div class="form-group">
                                    <label>Materi</label>
                                    <input class="form-control @error('materi') is-invalid @enderror"
                                        value="{{ isset($ekstrakulikuler) ? $ekstrakulikuler->materi : old('materi') }}"
                                        name="materi" type="text" />
                                    @error('materi')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Target</label>
                                    <input class="form-control @error('target') is-invalid @enderror"
                                        value="{{ isset($ekstrakulikuler) ? $ekstrakulikuler->target : old('target') }}"
                                        name="target" type="text" />
                                    @error('target')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>URL</label>
                                    <input class="form-control @error('url') is-invalid @enderror" value="{{ isset($ekstrakulikuler) ? $ekstrakulikuler->url : old('url') }}" name="url" type="text" />
                                    @error('url')
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
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
@endsection
