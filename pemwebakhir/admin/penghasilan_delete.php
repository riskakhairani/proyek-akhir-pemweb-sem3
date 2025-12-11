<?php
    include "../koneksi.php";
    $id_keuntungan = $_GET['id_keuntungan'];

    // Perform the delete query
    if (mysqli_query($conn, "DELETE FROM keuntungan WHERE id_keuntungan='$id_keuntungan'")) {
        // Redirect with success message using JavaScript
        echo "<script>
                alert('Data berhasil dihapus.');
                window.location.href = 'penghasilan.php';
              </script>";
    } else {
        // Redirect with error message using JavaScript
        echo "<script>
                alert('Terjadi kesalahan saat menghapus data.');
                window.location.href = 'penghasilan.php';
              </script>";
    }
    exit();
?>
