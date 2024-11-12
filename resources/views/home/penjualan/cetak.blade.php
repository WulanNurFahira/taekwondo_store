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
    <table class="table table-light table-hover">
        <thead>
                            <tr>
                            <th> No. </th>
                            <th> Nama Customer </th>
                            <th> Total Harga </th>
                            <th> Total Bayar </th>
                            <th> Bayar Akhir </th>
                            <th> Tanggal</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($penjualan as $penjualan)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $penjualan->nama_customer }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_harga) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->total_biaya) }}</td>
                                                <td>Rp.{{ number_format ($penjualan->bayar_akhir) }}</td>
                                                <td>{{ $penjualan->created_at }}</td>
                                                </td>
                                            </tr>
                                        @endforeach
                        </tbody>

</div>
        </table>
        </table>
    </div>

    <p class="text-center">======================================================</p>

    
        

    <p class="text-center">======================================================</p>

   

    <div class="container" style="margin-top: 200px;">
        <h2 class="text-center">Terima Kasih</h2>
        <h2 class="text-center">Telah Berbelanja Di Kami!</h2>
    </div>
</body>
</html>