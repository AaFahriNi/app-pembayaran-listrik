<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembayaran Tagihan Listrik Pascabayar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header -->
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="imgs/logo2.png" alt="logo_perusahaan" width="50px">
                    <h2>PT SUKAMAJU BERSAMA</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="box-form">
        <div class="container">
            <div class="row">

                <div class="col-md-8 offset-md-2">
                    <div class="box">
                        <h2>Pembayaran Listrik Pascabayar</h2>
                        
                            <form action="kwitansi_pembayaran.php" method="POST">
                            <table>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>:</th>
                                    <td><input type="date" name="tgl" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>ID Pelanggan</th>
                                    <th>:</th>
                                    <td><input type="number" name="id" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Nama Pelanggan</th>
                                    <th>:</th>
                                    <td><input type="text" name="nama" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Jumlah KWH</th>
                                    <th>:</th>
                                    <td><select name="kwh" class="form-control">
                                            <option selected="jenis_kwh">Jenis KWH</option>
                                            <option value="450">450</option>
                                            <option value="900">900</option>
                                            <option value="1300">1300</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <th>Jumlah Pemakaian</th>
                                    <th>:</th>
                                    <td><input type="number" name="pemakaian" class="form-control"></td>
                                </tr>
                                <tr>
                                    <th>Keterlambatan</th>
                                    <th>:</th>
                                    <td><input type="number" name="keterlambatan" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-outline-danger">Hitung</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



</body>

</html>