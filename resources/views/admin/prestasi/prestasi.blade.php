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
                    <h1 class="h3 mb-2 text-gray-800">Prestasi</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Input Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <a href="{{ url('prestasi/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($prestasi->count() > 0)
                                            @foreach ($prestasi as $index => $pt)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>
                                                        @if ($pt->foto)
                                                            <img style="max-width: 350px; max-height: 150px"
                                                                src="{{ asset('storage/' . $pt->foto) }}" alt="Foto">
                                                        @endif
                                                    </td>
                                                    <td>{{ $pt->keterangan }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="{{ route('prestasi.edit', [$pt->id]) }}"
                                                                class="btn btn-sm btn-warning mr-2">Edit</a>
                                                            <form method="POST" action="{{ url('/prestasi/' . $pt->id) }}">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="btn btn-sm btn-danger mr-2">Delete</button>
                                                            </form>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" class="text-center">Data tidak ada</td>
                                            </tr>
                                        @endif
                                    </tbody>

                                </table>
                            </div>
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



    <!-- /.content -->
@endsection
