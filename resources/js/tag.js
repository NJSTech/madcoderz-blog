// Author: Nawjesh Soyeb
// Title:Tag destroy
// create at:26/07/2019
$(function(){
    "use strict";
    $(document).on('click', '.tag-destroy', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var url = 'tags/destroy/'+id;
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
                'success',
              )
              $.ajax({
                type: "GET",
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