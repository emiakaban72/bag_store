<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bag Store Management</title>
    @vite(['resources/css/app.css'])
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Data Tas</h1>
        </div>

        <div style="background: #f9f9f9; padding: 20px; border-radius: 8px; margin-bottom: 30px; border: 1px solid #eee;">
            <h3>Tambah Produk Baru</h3>
            <form action="{{ route('produk.store') }}" method="POST" style="display: flex; gap: 10px; align-items: flex-end;">
                @csrf
                <div style="flex: 1;">
                    <label style="display:block; margin-bottom:5px;">Nama Produk</label>
                    <input type="text" name="nama_produk" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="flex: 1;">
                    <label style="display:block; margin-bottom:5px;">Harga</label>
                    <input type="number" name="harga" required style="width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <button type="submit" class="btn btn-primary" style="height: 40px;">Simpan</button>
            </form>
        </div>

        @if(session('success'))
            <div style="padding: 10px; background: #d4edda; color: #155724; border-radius: 4px; margin-bottom: 20px;">
                {{ session('success') }}
            </div>
        @endif

        <table class="table-produk">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $product->nama_produk }}</td>
                    <td>Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('produk.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('produk.delete', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="text-align: center; padding: 20px; color: #888;">Belum ada data produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>