<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Bag Store</title>
    <style>
        body { font-family: sans-serif; display: flex; flex-direction: column; align-items: center; padding: 50px; background-color: #f8f9fa; }
        .form-box { margin-bottom: 30px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        table { border-collapse: collapse; width: 80%; max-width: 800px; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background-color: #f4f4f4; }
        /* Ganti baris 11 sampai 12 dengan ini */
.btn-edit, .btn-delete { 
    background-color: #28a745; 
    color: white; 
    padding: 8px 15px; 
    text-decoration: none; 
    font-weight: bold; 
    border-radius: 4px; 
    border: none;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
}

.btn-edit:hover, .btn-delete:hover {
    background-color: #218838; 
}
        input { padding: 8px; border: 1px solid #ccc; border-radius: 4px; }
        button[type="submit"] { padding: 8px 15px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Daftar Produk Tas</h2>

    <div class="form-box">
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <input type="text" name="nama_produk" placeholder="Nama Produk" required>
            <input type="number" name="harga" placeholder="Harga" required>
            <button type="submit">Tambah Produk</button>
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $key => $item)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>
                    <div style="display: flex; justify-content: center; gap: 10px;">
                        <a href="{{ route('produk.edit', $item->id) }}" class="btn-edit">Edit</a>
                        
                        <form action="{{ route('produk.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>