<style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #000000;
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #ffffff;
    }
    .oi{
        
    }
  </style>
  <body style="margin: 0 auto; width: 1000px;">
    
      <table width= "90%" cellpadding="0" cellspacing="0">
        <tr>
          <div align="center"><font size="6">Toko Bunga H. Enjo</font></div>
            <br>
            <div align="center"><font size="4">Jl. Sudimampir 2, Cikalahang, Dukupuntang, Cirebon, Jawa Barat</font></div>
          
        </tr>
      </table><br><hr><br>
      <label ><font size="4">Laporan Data Pemesanan Barang</font></label>
      <p></p>
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Jumlah Beli</th>
            <th>Produk ID</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
            @php
      $counter = 1;
    @endphp
          @foreach ($order as $order)
            <tr>
                <td>{{ $counter }}</td>
                <td>{{ $order->name }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->product_title }}</td>
                <td>{{ $order->price }}</td>
                <td>{{ $order->jubel }}</td>
                <td>{{ $order->product_id }}</td>
                <td>
                <img style="max-width: 100px; max-height:40px" src="product/{{$order->image}}" alt="{{ $order->product_title }}"> 
              </td>
            </tr>
            @php
                $counter++;
            @endphp
          @endforeach
        </tbody>
      </table>
    </body>