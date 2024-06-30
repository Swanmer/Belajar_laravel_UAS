<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai – www.malasngoding.com</title>
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
        h2, h3 {
            margin: 0;
        }
        .container {
            width: 90%;
            max-width: 600px;
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
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #e74c3c;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .back-link:hover {
            background-color: #c0392b;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <header>
        <h2><a href="https://www.malasngoding.com" style="color: #fff; text-decoration: none;">www.malasngoding.com</a></h2>
    </header>
    <div class="container">
        <h3>Edit Pegawai</h3>
        <a href="/pegawai" class="back-link">Kembali</a>
        
        <form action="/pegawai/update" method="post">
        @foreach($pegawai as $p)
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required="required" value="{{ $p->pegawai_nama }}">
            
            <label for="jabatan">Jabatan</label>
            <input type="text" id="jabatan" name="jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
            
            <label for="umur">Umur</label>
            <input type="number" id="umur" name="umur" required="required" value="{{ $p->pegawai_umur }}">
            
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea>
            
            <input type="submit" value="Simpan Data">
        </form>
        @endforeach
    </div>
</body>
</html>