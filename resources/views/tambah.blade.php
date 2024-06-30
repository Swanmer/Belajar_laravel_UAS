<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel – www.malasngoding.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Data Pegawai</h3>
        <a href="/pegawai"> Kembali</a>
        <br/>
        <br/>
        <form action="/pegawai/store" method="post">
            {{csrf_field()}}
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required="required">
            <br/>
            <label for="jabatan">Jabatan</label>
            <input type="text" id="jabatan" name="jabatan" required="required">
            <br/>
            <label for="umur">Umur</label>
            <input type="number" id="umur" name="umur" required="required">
            <br/>
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required="required"></textarea>
            <br/>
            <input type="submit" value="Simpan Data">
        </form>
    </div>
</body>
</html>