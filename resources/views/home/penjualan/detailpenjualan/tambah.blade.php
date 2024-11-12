@extends('layouts.master')
@section('title','DetailPenjualan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-md-6">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Add to Cart</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <form action="/detailpenjualan/simpan" class="mx-3" method="post" autocomplete="off">
                @csrf

                  <!-- id penjualan -->
                   <input type="hidden" name="penjualan_id" value="{{ $penjualan_id }}">

                  <div class="mb-3">
                    <label for="id_produk" class="form-label">Products</label>
                    <select class="form-control" name="id_produk" id="id_produk">
                      <option value="" slected>Choose a product</option>
                    @foreach($produk as $produk)
                      <option value="{{ $produk->id }}" data-harga="{{ $produk->harga }}">{{ $produk->nama_produk }}</option>
                    @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label for="harga">Price</label>
                    <input type="number" name="harga" id="harga" class="form-control" required readonly>
                  </div>

                  <div class="mb-3">
                    <label for="jumlah_produk">Purchase Amount</label>
                    <input type="number" name="jumlah_produk" id="jumlah_produk" class="form-control" oninput="bebas()" required>
                  </div>
                  
                  <div class="mb-3">
                    <label for="subtotal">Total</label>
                    <input type="number" name="subtotal" oninput="hitungKembalian()" id="subtotal" class="form-control" required>
                  </div>
                  
                  <button type="submit" class="btn btn-info mx-3 ">Fill Cart</button>
              </form>
            </div>
          </div>
      </div>
      <div class="col-md-6">
      <div class="card">
      <div class="card-body">
        <h2 class="card-title"> 
        <h3>Cart</h3>
        </h2>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
              <th> No. </th>
                <th> Product Name </th>
                <th> Price </th>
                <th> Purchase Amount </th>
                <th> Total </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
            @foreach($detailpenjualan as $detailpenjualan)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $detailpenjualan->produk->nama_produk }}</td>
              <td>Rp.{{ number_format($detailpenjualan->produk->harga) }}</td>
              <td>{{ $detailpenjualan->jumlah_produk }}</td>
              <td>Rp.{{ number_format($detailpenjualan->subtotal) }}</td>
              <td>
              <a class="btn btn-danger" href="/detailpenjualan/{{ $detailpenjualan->id }}/delete"
              onclick="return confirm('yakin mau di hapus ?')">Delete</a></td>
              
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
          <form action="/checkout/{{$penjualan_id}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="total" class="form-label">Total</label>
              <input type="number" id="total" class="form-control" name="total" value="{{ $subtotal }}" readonly>
            </div>

            <div class="mb-3">
              <label for="total_bayar" class="form-label">Total Pay</label>
              <input type="number" id="total_bayar" class="form-control" name="total_bayar" oninput="hitungKembalian()" required>
            </div>

            <div class="mb-3">
              <label for="kembalian" class="form-label">Return</label>
              <input type="text" id="kembalian" class="form-control" name="kembalian" readonly>
            </div>
            <input type="text" name="id_penjualan" id="" value="{{$penjualan_id}}">
            <button class="btn btn-primary" type="submit">CheckOut</button>
         
          </form>
        </div>
      </div>
    </div>
      </div>
    </div>
</div>

<script>
    // Ambil elemen dropdown dan input harga
    const produkDropdown = document.getElementById('id_produk');
    const hargaInput = document.getElementById('harga');

    // Tambahkan event listener untuk mendeteksi perubahan di dropdown produk
    produkDropdown.addEventListener('change', function() {
      const selectedOption = produkDropdown.options[produkDropdown.selectedIndex];
      const harga = selectedOption.getAttribute('data-harga');

        if (harga) {
            hargaInput.value = harga;
        } else {
            hargaInput.value = '';
        }
    });
</script>

<script>
    function bebas() {
        const harga = document.getElementById('harga').value;
        const jumlahProduk = document.getElementById('jumlah_produk').value;

        const subtotal = harga * jumlahProduk;

        document.getElementById('subtotal').value = subtotal;
        
    }
</script>

<script>
function sweet(){
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
}
</script>

<script>
        function hitungKembalian() {
            // Ambil nilai dari input
            const harga = parseFloat(document.getElementById("total").value) || 0;
            const uangBayar = parseFloat(document.getElementById("total_bayar").value) || 0;

            // Hitung kembalian
            const kembalian = uangBayar - harga;

            // Tampilkan hasil kembalian di input "kembalian"
          if (kembalian > harga) {
            document.getElementById("kembalian").value = kembalian >= 0 ? kembalian.toFixed(2) : "Uang tidak cukup";
          }else{
            
          }
        }

 </script>


<script>
function sweet(){
  Swal.fire({
  title: "Berhasil!",
  text: "session('berhasil')",
  icon: "success"
});
}
</script>
@endsection