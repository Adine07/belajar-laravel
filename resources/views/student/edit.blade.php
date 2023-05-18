<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data</title>
</head>
<body>
  <h1>Edit data Siswa</h1>

  <form action="{{ route('edit.student', $data->id) }}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label for="name">Nama Siswa</label>
      <input type="text" id="name" name="name" value="{{ $data->name }}">
    </div>
    
    <div>
      <label for="nis">NIS Siswa</label>
      <input type="number" id="nis" name="nis" value="{{ $data->nis }}">
    </div>

    <div>
      <label for="address">Alamat Siswa</label>
      <textarea id="address" name="address">{{ $data->address }}</textarea>
    </div>
    
    <div>
      <label for="birth_date">Tanggal Lahir Siswa</label>
      <input type="date" id="birth_date" name="birth_date" value="{{ $data->birth_date }}">
    </div>
    
    <div>
      <label>Jenis Kelamin Siswa</label>

      <input 
        type="radio"
        id="pria"
        name="gender"
        value="1"
        {{ $data->gender == 1 ? 'checked' : '' }}
      >
      <label for="pria">Pria</label>
      
      <input type="radio" id="wanita" name="gender" value="0" {{ $data->gender == 0 ? 'checked' : '' }}>
      <label for="wanita">Wanita</label>
    </div>
    
    <div>
      <label for="major">Jurusan Siswa</label>
      <select name="major" id="major">
        <option value="IPA" {{ $data->major == 'IPA' ? 'selected' : '' }}>IPA</option>
        <option value="IPA" {{ $data->major == 'IPS' ? 'selected' : '' }}>IPS</option>
        <option value="Bahasa" {{ $data->major == 'Bahasa' ? 'selected' : '' }}>Bahasa</option>
      </select>
    </div>

    <button>Input Data</button>
  </form>
</body>
</html>