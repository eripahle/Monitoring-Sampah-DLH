@extends('template.template')

@section('title', 'Trash Monitoring System | Dashboard')

@push('css')
<link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
@endpush

@section('content')
<section class="section">
    <div class="container-fluid">
        <!-- ========== title-wrapper start ========== -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tiket</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Pegawai</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Page
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== title-wrapper end ========== -->

        <!-- Row -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="filter-kabkota" class="form-label">Filter Kabupaten/Kota</label>
                            <select class="form-select" id="filter-kabkota">
                                <option value="">Semua</option>
                                @foreach($kab_kota as $option)
                                    <option value="{{$option}}">{{$option}}</option>
                                @endforeach
                            </select>
                        </div>
                        <table class="table" id="pegawai">
                            <thead>
                                <tr class="text-center">
                                    <th>Jam Masuk</th>
                                    <th>Jam keluar</th>
                                    <th>Nomor Kendaraan</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Pengemudi</th>
                                    <th>Kabupaten/Kota</th>
                                    <th>Lokasi</th>
                                    <th>Volume</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
</section>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // Initialize DataTable
        var table = $('#pegawai').DataTable({
            processing: true,
            serverSide: true,
            ajax: "",
            // {
            //     url: "{{route('tiket.rekap')}}",
            //     data: function (d) {
            //         d.filterKabkota = $('#filter-kabkota').val();
            //     }
            // },
            columns: [
                { data: 'jam_masuk', name: 'jam_masuk', class:"text-center" },
                { data: 'jam_keluar', name: 'jam_keluar', orderable: true, class:"text-center" },
                { data: 'no_kendaraan', name: 'no_kendaraan', class:"text-center" },
                { data: 'jenis_kendaraan', name: 'jenis_kendaraan', class:"text-center" },
                { data: 'pengemudi', name: 'pengemudi', class:"text-center" },
                { data: 'nama_kab_kota', name: 'nama_kab_kota', class:"text-center" },
                { data: 'lokasi_sampah', name: 'lokasi_sampah', class:"text-center" },
                { data: 'volume', name: 'volume', class:"text-center" },
            ],
        });

        // Filter data based on selected Kabupaten/Kota
        $('#filter-kabkota').on('change', function () {
            table.ajax.reload();
        });
    });
</script>
@endpush
