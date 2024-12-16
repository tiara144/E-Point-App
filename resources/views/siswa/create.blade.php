<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tambah Siswa</title>
</head>

<>
     <h1>Tambah Siswa</h1>
     <a href="{{ route('siswa.index') }}">Kembali</a><br><br>

     @if ($errors->any())
     <div class="alert alert-danger">
          <ul>
               $foreach ($errors->all() as $errors)
               <li>{{ $errors }}</li>
               @endforeach
          </ul>
     </div>
     @endif

     <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
          @csrf <!--{{ csr_field() }} -->
          <h2>Akun Siswa</h2>
          <label for="">Nama Lengkap</label><br>
          <input type="text" id="name" name="name" value="{{ old('name') }}">
          <br><br>

          <label for="">Email Address</label><br>
          <input type="email" id="email" name="email" value="{{ old('email') }}">


          <label for="">Password</label><<br>
          <input type="password" id="password" name="password">
          <br><br>

          <label for="password_confirmation" class="col-md-form-label text-md-end text-start">Confirm Password</label>
          <div class="col-md-6">
               <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            </div>
            <br><br>

            <h2>Data Siswa</h2>
            <label for="">Foto Siswa</label><br>
            <input type="file" name="image" accept="image/*" required>
            <br><br>

            <label for="">NIS Siswa</label><br>
            <input type="text" name="nis" value="{{ old('nis') }}" required>
            <br><br>

            <label for="">Tingkatan</label><br>
            <select name="tingkatan" required>
               <option value="">Pilih Tingkatan</option>
               <option value="X">X</option>
               <option value="XI">XI</option>
               <option value="XII">XII</option>
            </select>
            <br><br>

            <label for="">Jurusan</label><br>
            <select name="jurusan" required>
               <option value="">Pilih Jurusan</option>
               <option value="TBSM">TBSM</option>
               <option value="TJKT">TJKT</option>
               <option value="PPLG">PPLG</option>
               <option value="DKV">DKV</option>
               <option value="TOI">TOI</option>
            </select>
            <br><br>

            <label for="">Kelas</label><br>
            <select name="kelas" required>
               <option value="">Pilih Kelas</option>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
            </select>
            <br><br>

            <label for="">No Hp</label><br>
            <input type="text" name="hp" value{{ old('hp') }} required>
            <br><br>

            <button type="submit">SIMPAN DATA</button>
            <button type="reset">RESET FORM</button>
               </form>
</body>
</html>