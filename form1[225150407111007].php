<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form[225150407111007]</title>
</head>
<body>
  <h1>Formulir Pendaftaran</h1>
  <form action="form2[225150407111007].php" method="post">
    <label for="nama">Nama :</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama..." required>
    <br>
    <br>
    <label for="nim">NIM:</label>
    <input type="text" id="nim" name="nim" placeholder="Masukkan NIM..." required>
    <br>
    <br>
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <br>
    <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
    <label for="laki-laki">Laki-laki</label>
    <br>
    <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
    <label for="perempuan">Perempuan</label>
    <br>
    <br>
    <label for="prodi">Prodi:</label>
    <select id="prodi" name="prodi" required>
      <option value="" disabled selected>Pilih Prodi...</option>
      <option value="Teknik Komputer">Teknik Komputer</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Sistem Informasi">Sistem Informasi</option>
      <option value="Teknologi Informasi">Teknologi Informasi</option>
      <option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>
    </select>
    <br>
    <br>
    <button type="submit">Kirim</button>
  </form>
</body>
</html>