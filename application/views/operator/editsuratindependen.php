<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['ID']) ){
    header('Location: Tampilan surat independen.php');
}

//ambil id dari query string
$Id = $_GET['ID'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM data_magang WHERE ID=$Id";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>


<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM SURAT INDEPENDEN</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <!--bagian awal header-->
    <br>
    <header>
        <h1 class="judul">FORM SURAT INDEPENDEN</h1>
        <hr>
    </header>
    <!--akhir dari header-->


        <!--bagian sidebar website-->
        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img  class="widget-pict" src="blouse2.jpg" alt="pict" width="100%">
                </div>
                <h2 align="center">FORMAT SURAT INDEPENDEN</h2>
            </div>
        </aside>
        <!---akhir dari sidebar-->

<br>
  <form method="POST" enctype="multipart/form-data" action="proseseditsuratindependen.php">

    <table cellpadding="8">
    <input type="hidden" name="Id" value= "<?php echo $row ['ID']?>"/>
      <tr>
        <td>Tanggal/bulan/tahun</td>
        <td>:</td>
        <td>
        <input type="date" name="Tanggal" value= "<?php echo $row ['Tanggal']?>"/>
        </td>
      </tr>

      <tr>
      <td>Nama Partner</td>
      <td>:</td>
        <td><input type="text" name="Part" value= "<?php echo $row ['Part']?>"/></td>
      </tr>
      
   
      <tr>
      <td>Nama Supervisor</td>
      <td>:</td>
      <td><input type="text" name="Supervisor" value= "<?php echo $row ['Supervisor']?>"/></td>
      </tr>
 
      <tr>
        <td>Ketua Tim</td>
        <td>:</td>
        <td><input type="text" name="Ketua_Tim" value= "<?php echo $row ['Ketua_Tim']?>"/></td>
        </tr>

        <tr>
        <td>Nama Anggota 1</td>
        <td>:</td>
        <td><input type="text" name="Anggota1" value= "<?php echo $row ['Anggota1']?>"/></td>
        </tr>

        <tr>
        <td>Nama Anggota 2</td>
        <td>:</td>
        <td><input type="text" name="Anggota2" value= "<?php echo $row ['Anggota2']?>"/></td>
        </tr>

        <tr>
        <td>Nama Klien</td>
        <td>:</td>
        <td><input type="text" name="Nama_klien" value= "<?php echo $row ['Nama_klien']?>"/></td>
        </tr>

        <tr>
        <td>Alamat Klien</td>
        <td>:</td>
        <td><input type="text" name="Alamat_klien" value= "<?php echo $row ['Alamat_klien']?>"/></td>
        </tr>

        <tr>
        <td>Telp/Fax</td>
        <td>:</td>
        <td><input type="text" name="Telp" value= "<?php echo $row ['Telp']?>"/></td>
        </tr>

        <tr>
        <td>Aktivitas utama klien</td>
        <td>:</td>
        <td><input type="text" name="Aktivitas" value= "<?php echo $row ['Aktivitas']?>"/></td>
        </tr>

        <tr>
        <td>Jenis jasa profesi yang diberikan</td>
        <td>:</td>
        <td><input type="text" name="Jenis" value= "<?php echo $row ['Jenis']?>"/></td>
        </tr>

        <tr>
        <td>Periode pelaksanaan perikatan</td>
        <td>:</td>
        <td><input type="text" name="Periode" value= "<?php echo $row ['Periode']?>"/></td>
        </tr>

        
        <tr>
        <td>TTD Partner</td>
        <td>:</td>
        <td><input type="file" name="ttdpartner" value= "<?php echo $row ['ttdpartner']?>"/></td>
        </tr>

         <tr>
        <td>TTD Supervisor</td>
        <td>:</td>
        <td><input type="file" name="ttdsupervisor" value= "<?php echo $row ['ttdsupervisor']?>"/></td>
        </tr>

         <tr>
        <td>TTD Ketua</td>
        <td>:</td>
        <td><input type="file" name="ttdketua" value= "<?php echo $row ['ttdketua']?>"/></td>
        </tr>

         <tr>
        <td>TTD Anggota 1</td>
        <td>:</td>
        <td><input type="file" name="ttdanggota1" value= "<?php echo $row ['ttdanggota1']?>"/></td>
        </tr>

         <tr>
        <td>TTD Anggota 2</td>
        <td>:</td>
        <td><input type="file" name="ttdanggota2" value= "<?php echo $row ['ttdanggota2']?>"/></td>
        </tr>
 
    </table>
    <br>

    <input type="submit" value="Simpan">
    <a href="form_surat_independen.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>

