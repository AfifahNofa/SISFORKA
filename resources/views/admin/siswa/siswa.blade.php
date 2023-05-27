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
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
                                <a href="{{ url('siswa/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kelas</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($siswa->count() > 0)
                                        @foreach( $siswa as $s => $st)
                                          <tr>
                                            <td>{{++$s}}</td>
                                            <td>{{$st->kelas}}</td>
                                            <td>{{$st->jumlah}}</td>
                                            <td>
                                                <!-- Bikin tombol edit dan delete -->
                                                <div class="btn-group">
                                                  {{-- <a href="{{ route('mahasiswa.edit', [$m->id]) }}"
                                                      class="btn btn-sm btn-warning mr-2">edit</a>
                                                  <a href="{{ route('mahasiswa.show', [$m->id]) }}"
                                                      class="btn btn-sm btn-primary mr-2">show</a>
                                                  <a href="{{ route('mahasiswamatakuliah.show', [$m->id]) }}"
                                                      class="btn btn-sm btn-success mr-2">nilai</a> --}}
                                                  <form method="POST" action="{{ url('/siswa/' . $st->id) }}">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" class="btn btn-sm btn-danger mr-2">DELETE</button>
                                                  </form>
                                              </div>
                                              </td>
                                          </tr>
                                        @endforeach
                                      @else
                                        <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
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
