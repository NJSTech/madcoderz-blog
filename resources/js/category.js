$(function(){
    "use strict";
    $(document).on('click', '.category-destroy', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = 'categories/destroy/'+id;
        Swal.fire({
            title: 'Are you sure?',
            // text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          })
          .then((result) => {
            if (result.value) {
              Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
              )
              $.ajax({
                type: "get",
                url: url,
                // data: {id:id},
                success: function (data) {
                  setTimeout(function(){
                    location.reload();
                },2000);
                    }         
            });
            }
          })
    });
});