@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penulis</h3>
            <a href="{{route('admin.author.create')}}" class="btn btn-sm btn-success"><i class="fa fa-plus"></i>Tambah</a>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function (){
            $('#dataTable').DataTable({
                processing:true,
                serverSide:true,
                ajax: '{{ route('admin.author.data')}}',
                columns:[
                    {data: 'DT_RowIndex', orderable: false, searchable: false},
                    {data: 'name'},
                    {data: 'action'}
                ]
            });
        });
    </script>
@endpush
