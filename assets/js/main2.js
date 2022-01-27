$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})

$('#myModal').modal('toggle')
$('#myModal').modal('show')
$('#myModal').modal('hide')