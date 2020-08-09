<a href="{{route('admin.author.edit', $model)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
<button href="{{route('admin.author.destroy', $model)}}" id="delete" class="btn btn-danger" ><i class="fa fa-trash" ></i></button>

<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        console.log("a");

        var href = $(this).attr('href');
        document.getElementById('deleteForm').action = href;
        document.getElementById('deleteForm').submit();
    })
</script>
