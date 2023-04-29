<?php include 'cuy.php'; $Z = $_GET['z'];  ?>
<script>
window.onload = function(){  Swal.fire({
    title: 'Yakin Hapus data?',
    showDenyButton: true,
    showCancelButton: true,
    confirmButtonText: 'Hapus',
    denyButtonText: `Batalkan`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
        $.ajax({
      url: 'deleter.php?<?= $Z ?>',
      data: {function: 'dels'},
      type: 'post',
      success: function(response) {
        Swal.fire(
          'Success!',
          'The function returned: ' + response,
          'success'
        )
      }
    });
       
    } else if (result.isDenied) {
      Swal.fire('Changes are not saved', '', 'info')
    }
  }) }</script>