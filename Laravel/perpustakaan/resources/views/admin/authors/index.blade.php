@extends('admin.templates.default')

@section('content')
    <h1>Penulis</h1>

    <div class="box">
        <table id="dataTable" class="table table-bordered table-striped dataTable">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nama</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Satu</td>
                </tr>
            </tbody>
        </table>
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
