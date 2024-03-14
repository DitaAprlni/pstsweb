<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>add peminjaman</title>
</head>

<body>

    <div class="jumbotron">
        <h1>Tambah Peminjaman Barang</h1>
        <form action="input.php" method="post">
            <div class="form-group">
            <label for="tgl_peminjaman">tanggal_Peminjaman</label>
            <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman">

            <label for="tgl_kembali">tanggal_kembali</label>
            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">

            <label for="kode_barang" >No Identitas</label>
            <input type="text" class="form-control" id="no_identitas" name="no_identitas">

            <label for="kode_barang" >Kode Barang</label>
            <input type="text" class="form-control" id="kode_barang" name="kode_barang">

            <label for="kategori" >Keperluan</label>
            <input type="text" class="form-control" id="keperluan" name="keperluan">

            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status">
           
            <label for="jumlah" class="col-sm-2 col-form-label">jumlah</label>
            <input type="text" class="form-control" id="jumlah" name="jumlah">

            </div>
            <input type="submit" value="Save" class="font-weight-bold btn btn-secondary">
            <a class="font-weight-bold btn btn-secondary" href="berhasil_login.php" role="button">Home</a>
        </form>
    </div>

     <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->

</body>
</html>