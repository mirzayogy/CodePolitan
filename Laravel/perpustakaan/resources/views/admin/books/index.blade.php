@extends('admin.templates.default')

@section('content')
    <h1>Buku</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Buku</h3>
            <a href="{{route('admin.book.create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah</a>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Judul</td>
                        <td>Deskripsi</td>
                        <td>Penulis</td>
                        <td>Sampul</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <form action="" method="POST" id="deleteForm">
        @csrf
        @method("DELETE")
        <input type="submit" value="Hapus" style="display:none">
    </form>
@endsection

@push('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endpush

@push('scripts')
    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    @include('admin.templates.partials.alerts')
    <script>
        $(function (){
            $('#dataTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                ajax: '{{ route('admin.book.data')}}',
                columns:[
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'title'},
                    {data: 'description'},
                    {data: 'author'},
                    {data: 'cover'},
                    {data: 'action'}
                ]
            });
        });
    </script>
@endpush
