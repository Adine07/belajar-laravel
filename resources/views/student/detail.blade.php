<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data User</title>
</head>
<body>

  <h1>Detai User</h1>

  <table border="1">
    <tr>
      <th>Nama</th>
      <td>{{ $student->name }}</td>
    </tr>
    <tr>
      <th>NIS</th>
      <td>{{ $student->nis }}</td>
    </tr>
    <tr>
      <th>Alamat</th>
      <td>{{ $student->address }}</td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>{{ $student->gender == 1 ? 'Pria' : 'Wanita' }}</td>
    </tr>
    <tr>
      <th>Tanggal Lahir</th>
      <td>{{ $student->birth_date }}</td>
    </tr>
    <tr>
      <th>Jurusan</th>
      <td>{{ $student->major }}</td>
    </tr>
    
  </table>
  
</body>
</html>