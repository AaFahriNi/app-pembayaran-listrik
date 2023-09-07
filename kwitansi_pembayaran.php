<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwitansi Pembayaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    
    $tanggal = $_POST["tgl"];
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $kwh = $_POST["kwh"];
    $jumlah = $_POST["pemakaian"];
    $keterlambatan = $_POST["keterlambatan"];

    if ($kwh == 450) {
        $harga_per_meter = 300;
    }
    elseif ($kwh == 900) {
        $harga_per_meter = 400;
    } 
    elseif ($kwh == 1300) {
        $harga_per_meter = 500;
    }
    else {
        $harga_per_meter = 0;
    }

    $denda = $keterlambatan * 1000;
    $total_tagihan = ($harga_per_meter * $jumlah) - $denda;
    
    ?>

    <div class="box-kwitansi" id="box-kwitansi">
        <img src="imgs/logo2.png" alt="logo_perusahaan" width="75">
        <h3>PT SUKAMAJU BERSAMA</h3>
        <h5>Kwitansi Pembayaran Listrik Pascabayar</h5>

        <table width="80%" align="center" cellpadding="5" border="1">
            <tr>
                <td>ID Pelanggan</td>
                <td>: <?php echo $id ?> </td>
                <td>Tahun / Bulan / Tanggal</td>
                <td>: <?php echo $tanggal ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $nama; ?></td>
                <td>Keterlambatan</td>
                <td>: <?php echo $keterlambatan ?> Hari</td>
            </tr>
            <tr>
                <td>Tarif/Daya</td>
                <td>: <?php echo $kwh; ?> KWH</td>
                <td>Denda</td>
                <td>: Rp<?php echo $denda ?></td>
            </tr>
            <tr>
                <td>Stand Meter</td>
                <td>: 24390167</td>
                <td>RP Tagihan </td>
                <td>: Rp<?php echo $total_tagihan ?></td>
            </tr>
            <tr>
                <td>No Ref</td>
                <td colspan="3">: 36358387</td>
            </tr>
        </table>
        <p>
            PT SukaMaju Bersama menyatakan struk ini sebagai bukti pembayaran yang sah <br>
            Terima Kasih <br>
            *Informasi Hubungi Call Center 777 atau Hub Kantor Terdekat*
        </p>
    </div>
    <p align="center">
        <button class="btn btn-outline-success" onclick="print()">Cetak</button>
    </p>

    <script>
        function onclick() {
            var divContents = document.getElementById("bos-kwitansi").innerHTML;
            var a = window.open('', '','height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

</body>

</html>