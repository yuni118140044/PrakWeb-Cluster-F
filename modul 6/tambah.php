<?php
        $nrp = $_POST['nrp'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $id_jurusan= $_POST['id_jurusan'];
        $koneksi = mysqli_connect("localhost","root","","tugas");
        $hasil = mysqli_query($koneksi, "INSERT INTO mahasiswa (nrp,nama,alamat,id_jurusan) values ('$nrp','$nama','$alamat','$id_jurusan')");
        mysqli_query($koneksi,$hasil);
        echo '<script type="text/javascript">alert("Berhasil Input Data !!!!");
        </script>'; 
   ?>