<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <style>
        body { font-family: sans-serif; display: flex; flex-direction: column; align-items: center; padding: 50px; background-color: #f8f9fa; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 300px; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        a { display: block; text-align: center; margin-top: 15px; color: #666; text-decoration: none; }
    </style>
</head>
<body>

    <div class="card">
        <h3>Edit Produk</h3>
        <form action="{{ route('produk.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $product->nama_produk }}" required>
            
            <label>Harga</label>
            <input type="number" name="harga" value="{{ $product->harga }}" required>
            
            <button type="submit">Update Data</button>
        </form>
        <a href="{{ route('produk.index') }}">Kembali</a>
    </div>

</body>
</html>