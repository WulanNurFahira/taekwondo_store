<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Cetak Struk</title>
</head>
<body onload="print()">
    <h1 class="text-center mt-5"></h1>
    <p class="text-center mb-5">Jl. Sadang Rt 04 Rw 09 No 26</p>
<center><h1>Taekwondo Fahira Store</h1>
<h3>Jln. Sadang Rt 04 Rw 09</h3>
<h3>Bandung West Java</h3>
<h3>No.Telp 086565859</h3>
    <div class="container">
        

    <p class="text-center">======================================================</p>

    <div class="container">
        <table>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><?php echo date("d-m-Y") ?></td>
        </tr>
</div>
        </table>
    </div>

    <p class="text-center">======================================================</p>

    <div class="container">
        <div class="d-flex justify-content-between">
            <p>Total Harga</p>

            <div class="d-flex gap-2">
                <p>Rp. </p>
                <p>{{ number_format($penjualan->total_harga) }}</p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <p>Jumlah Bayar</p>

            <div class="d-flex gap-2">
                <p>Rp. </p>
                <p>{{ number_format($penjualan->total_biaya) }}</p>
            </div>
        </div>
    </div>

    <p class="text-center">======================================================</p>

    <div class="container">
        <div class="d-flex justify-content-between">
            <p>Kembalian</p>

            <div class="d-flex gap-2">
                <p>Rp. </p>
                <p>{{ number_format($penjualan->bayar_akhir) }}</p>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 200px;">
        <h2 class="text-center">Terima Kasih</h2>
        <h2 class="text-center">Telah Berbelanja Di Kami!</h2>
    </div>
</body>
</html>