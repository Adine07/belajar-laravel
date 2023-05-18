<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Input Data</title>
</head>
<body>
  <h1>Input data Siswa</h1>

  <form action="{{ route('input.student') }}" method="post">
    @csrf
    <div>
      <label for="name">Nama Siswa</label>
      <input type="text" id="name" name="name">
    </div>
    
    <div>
      <label for="nis">NIS Siswa</label>
      <input type="number" id="nis" name="nis">
    </div>

    <div>
      <label for="address">Alamat Siswa</label>
      <textarea id="address" name="address"></textarea>
    </div>
    
    <div>
      <label for="birth_date">Tanggal Lahir Siswa</label>
      <input type="date" id="birth_date" name="birth_date">
    </div>
    
    <div>
      <label>Jenis Kelamin Siswa</label>

      <input type="radio" id="pria" name="gender" value="1">
      <label for="pria">Pria</label>
      
      <input type="radio" id="wanita" name="gender" value="0">
      <label for="wanita">Wanita</label>
    </div>
    
    <div>
      <label for="major">Jurusan Siswa</label>
      <select name="major" id="major">
        <option value="IPA">IPA</option>
        <option value="IPA">IPS</option>
        <option value="Bahasa">Bahasa</option>
      </select>
    </div>

    <button>Input Data</button>
  </form>
</body>
</html>