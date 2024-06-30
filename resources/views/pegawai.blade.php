<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background-color: #3498db;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        h2 {
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .container h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .add-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #2ecc71;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .add-link:hover {
            background-color: #27ae60;
        }
        .search-form {
            text-align: center;
            margin-bottom: 20px;
        }
        .search-form input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .search-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .search-form input[type="submit"]:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
            color: #3498db;
        }
        .edit-link, .delete-link {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
            color: #fff;
            transition: background-color 0.3s;
        }
        .edit-link {
            background-color: #3498db;
        }
        .edit-link:hover {
            background-color: #2980b9;
        }
        .delete-link {
            background-color: #e74c3c;
        }
        .delete-link:hover {
            background-color: #c0392b;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .pagination a, .pagination span {
            padding: 8px 12px;
            margin: 0 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
            color: #3498db;
            transition: background-color 0.3s, color 0.3s;
            font-size: 14px;
        }
        .pagination a:hover, .pagination span:hover {
            background-color: #3498db;
            color: #fff;
        }
        .pagination .active {
            background-color: #3498db;
            color: #fff;
            border: none;
        }
        .pagination .disabled {
            pointer-events: none;
            color: #ddd;
        }
        .info {
            display: flex;
            justify-content: space-around;
            margin-bottom: 20px;
        }
        .info p {
            margin: 0;
            padding: 10px;
            background-color: #f2f2f2;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h24>www.malasngoding.com</h24>
    </header>
    <div class="container">
        <h3>Data Pegawai</h3>
        <a href="/pegawai/tambah" class="add-link">+ Tambah Pegawai Baru</a>

        <!-- Search Form -->
        <div class="search-form">
            <p>Cari Data Pegawai :</p>
            <form action="/pegawai/" method="GET">
                <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                <input type="submit" value="CARI">
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pegawai as $p)
                <tr>
                    <td>{{ $p->pegawai_nama }}</td>
                    <td>{{ $p->pegawai_jabatan }}</td>
                    <td>{{ $p->pegawai_umur }}</td>
                    <td>{{ $p->pegawai_alamat }}</td>
                    <td>
                        <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="edit-link">Edit</a>
                        |
                        <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="delete-link">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="info">
            <p><strong>Halaman:</strong> {{ $pegawai->currentPage() }}</p>
            <p><strong>Jumlah Data:</strong> {{ $pegawai->total() }}</p>
            <p><strong>Data Per Halaman:</strong> {{ $pegawai->perPage() }}</p>
        </div>
        <div class="pagination">
            @if ($pegawai->onFirstPage())
                <span class="disabled">&laquo;</span>
            @else
                <a href="{{ $pegawai->previousPageUrl() }}">&laquo;</a>
            @endif

            @foreach ($pegawai->getUrlRange(1, $pegawai->lastPage()) as $page => $url)
                @if ($page == $pegawai->currentPage())
                    <span class="active">{{ $page }}</span>
                @else
                    <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach

            @if ($pegawai->hasMorePages())
                <a href="{{ $pegawai->nextPageUrl() }}">&raquo;</a>
            @else
                <span class="disabled">&raquo;</span>
            @endif
        </div>
    </div>
</body>
</html>
