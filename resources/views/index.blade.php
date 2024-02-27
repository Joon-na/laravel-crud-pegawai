<!DOCTYPE html>
<html>
<head>
 <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
 <h2>www.malasngoding.com</h2>
 <h3>Data Pegawai</h3>
 
 <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
 
 <br/>
 <br/>
 
 <table border="1">
 <tr>
 <th>Nama</th>
 <th>Jabatan</th>
 <th>Umur</th>
 <th>Alamat</th>
 <th>Opsi</th>
 </tr>

 @foreach($pegawai as $p)

 <tr>
 <td>{{ $p->pegwai_nama }}</td>
 <td>{{ $p->pegwai_jabatan }}</td>
 <td>{{ $p->pegawai_umur }}</td>
 <td>{{ $p->pegwai_alamat }}</td>
 <td>
 <a href="/pegawai/edit/{{ $p->pegwai_id }}">Edit</a>
 |
 <a href="/pegawai/hapus/{{ $p->pegwai_id }}">Hapus</a>
 </td>
 </tr>
 @endforeach
 </table>
 
 
</body>
</html>