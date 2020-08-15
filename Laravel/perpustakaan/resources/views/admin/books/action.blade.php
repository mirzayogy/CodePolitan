<a href="{{route('admin.book.edit', $model)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
<button href="{{route('admin.book.destroy', $model)}}" id="delete" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>

<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Yakin akan dihapus?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                Swal.fire(
                'Sudah dihapus!',
                'Data berhasil dihapus.',
                'success'
                )
            }
        })
    })
</script>
