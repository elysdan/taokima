<?php
    if( (isset($_SESSION['mensaje2'])) && (isset($_SESSION['icono2'])) ){
        $mensaje = $_SESSION['mensaje2'];
        $icono = $_SESSION['icono2'];
?>

<script>
  Swal.fire({
  icon: '<?=$icono?>',
  title: 'Ooopss...',
  text: '<?=$mensaje?>',
  //footer: '<a href="#">Why do I have this issue?</a>'
});
</script>

<?php
    unset($_SESSION['mensaje2']);
    unset($_SESSION['icono2']);
    }
?>