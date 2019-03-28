

$(".sweet-success-cancel").click(function(){
    console.log('ok');
    swal({
        title: "Are you sure to delete ?",
        text: "You will not be able to recover this imaginary file !!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it !!",
        cancelButtonText: "No, cancel it !!",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function(isConfirm){
        if (isConfirm) {
            swal("Deleted !!", "Hey, your imaginary file has been deleted !!", "success");
        }
        else {
            swal("Cancelled !!", "Hey, your imaginary file is safe !!", "error");
        }
    });
}); 
