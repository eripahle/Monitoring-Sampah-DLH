@extends('template.template')

@section('title','Trash Monitoring System | Pegawai')

{{-- kalau ada css tambahan selain dari template.blade --}}
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@section('content')
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    {{-- @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif --}}
                    <div class="title mb-30">
                        <h2>Data Pegawai</h2>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#0">Pegawai</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Page
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="d-flex justify-content-end mb-3">
                        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mr-2">Add</a>
                        <a href="{{ route('pegawai.document') }}" class="btn btn-success ml-2">Print</a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <!-- star Row -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <div class="table-wrapper table-responsive">
                                <table class="table" id="pegawai">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama Pegawai</th>
                                            <th>NIP</th>
                                            <th>Role</th>
                                            <th>Kantor</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
</section>
@endsection

@push('js')
@include('sweetalert::alert')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.colVis.min.js"></script>

<form action="" id="delete-form" method="post">
    @method('get')
    @csrf
</form>
<script type="text/javascript">
$('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    $(document).ready(function () {
    var table = $('#pegawai').DataTable({
        dom: 'Bfrtip',
        buttons: [
           {
               extend: 'pdf',
               exportOptions: {
                   columns: [0, 1, 2, 3] // Kolom yang ingin disertakan dalam ekspor
               }
           }
       ],
        processing: true,
        serverSide: true,
        ajax: "{{ route('pegawai') }}",
        columns: [
            {   
            data: null,
            render: function (data, type, row, meta) {
                // Menghitung nomor urut berdasarkan halaman dan jumlah baris yang ditampilkan
                var startIndex = meta.settings._iDisplayStart;
                var index = meta.row + startIndex + 1;

                return index;
            },
            orderable: false,
            searchable: false
            },
            {data: 'nama_pegawai', name: 'nama_pegawai'},
            {data: 'NIP', name: 'NIP'},
            {data: 'nama_role', name: 'nama_role'},
            {data: 'nama_kantor', name: 'nama_kantor'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    
  });
</script>
@endpush