<?php
        $key = $_GET['keyhapus'];
        $koneksi = mysqli_connect("localhost","root","","tugas");
        $hasil = mysqli_query($koneksi, "DELETE FROM mahasiswa where nrp = '$key'");

        mysqli_query($koneksi,$hasil);
        echo '<script type="text/javascript">alert("Berhasil Hapus Data !!!!");</script>'; 
   ?>