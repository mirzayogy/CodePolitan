@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Penulis</h3>
        </div>
        <div class="card-body">
            <table id="dataTable" class="table table-bordered table-striped dataTable">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Nama</td>
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
                    {data: 'id'},
                    {data: 'name'}
                ]
            });
        });
    </script>
@endpush
