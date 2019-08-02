$(document).on('click', '.subscribe-destroy', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var url = 'subscribes/destroy/'+id;
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
            success: function (response) {
                if (response.status == 'success') {
                    $(".flashmessage").fadeIn('fast').delay(2000).fadeOut('fast').text(response.message);
                    setTimeout(function(){
                        location.reload();
                    },2000);
                }
            }         
        });
        }
      })
});