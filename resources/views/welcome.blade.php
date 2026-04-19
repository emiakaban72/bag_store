<!DOCTYPE html>
<html>
<head>
    <title>CRUD Bag Store</title>
</head>
<body>

    <h1>Daftar Produk Tas</h1>
    
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <input type="text" name="nama_produk" placeholder="Nama Produk" required>
        <input type="text" name="harga" placeholder="Harga" required>
        <button type="submit">Tambah Produk</button>
    </form>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bags as $index => $bag)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $bag->nama_produk }}</td>
                <td>{{ $bag->harga }}</td>
                <td>
                    <a href="{{ route('destroy', $bag->id) }}" onclick="return confirm('Hapus produk ini?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>