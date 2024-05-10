<?php
require_once "./class_nilaimahasiswa.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body class="poppins-regular">
      
<div class="container mt-5">
  <h3 class="">Form Nilai Ujian</h3>
  <hr>
  <form method="post" action="">
    <div class="mb-3 row">
      <label for="nim" class="col-sm-3 col-form-label">NIM</label>
      <div class="col-sm-6">
        <input id="nim" name="nim" type="text" class="form-control" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="matkul" class="col-sm-3 col-form-label">Pilih Mata Kuliah</label>
      <div class="col-sm-6">
        <select id="matkul" name="matkul" class="form-select" required>
          <option value=""></option>
          <option value="Pemrograman Web">Pemrograman Web</option>
          <option value="Basis Data">Basis Data</option>
          <option value="Bahasa Inggris">Bahasa Inggris</option>
        </select>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="nilai" class="col-sm-3 col-form-label">Nilai</label>
      <div class="col-sm-6">
        <input id="nilai" name="nilai" type="text" class="form-control" required>
      </div>
    </div>
    <div class="mb-3 row">
      <div class="offset-sm-3 col-sm-6">
        <input type="submit" name="proses" class="btn btn-primary" value="Simpan">
      </div>
    </div>
  </form>
  <hr>
</div>


  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') : 
          $mahasiswa = new NilaiMahasiswa($_POST['nim'], $_POST['matkul'], $_POST['nilai']);
  ?>

    <div class="container mb-2">

      <h3 class="mt-3">Nilai Akhir Mahasiswa</h3>

      <table class="table table-primary table-striped table-hover justify-content-center w-100">
        <tbody class="text-center">
          <tr>
            <td class="fw-bold text-dark">Nilai</td>
            <td><?= !empty($mahasiswa->nim) ? $mahasiswa->nim : ''; ?></td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Mata Kuliah</td>
            <td><?= !empty($mahasiswa->matkul) ? $mahasiswa->matkul : ''; ?></td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Nilai</td>
            <td><?= !empty($mahasiswa->nilai) ? $mahasiswa->nilai : ''; ?></td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Hasil Ujian</td>
            <td><?= $mahasiswa->hasil(); ?></td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">Grade</td>
            <td><?= $mahasiswa->kelulusan(); ?></td>
          </tr>
        </tbody>
      </table>
    </div>

  <?php endif; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>