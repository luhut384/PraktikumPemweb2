<?php

$ar_prodi = [
  "SI" => "Sistem Informasi",
  "TI" => "Teknik Informatika",
  "BD" => "Bisnis Digital"
];
$ar_skill = [
  "HTML" => 10,
  "CSS" => 10,
  "JavaScript" => 20,
  "RWD Boostrap" => 20,
  "PHP" => 30,
  "Python" => 30,
  "Java" => 50
];
$ar_domisili = [
  "Jakarta",
  "Bogor",
  "Depok",
  "Tanggerang",
  "Bekasi",
  "Lainnya"
];

$hasilHtml = '';

if (!empty($_POST)) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jk = (!empty($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : '');
  $prodi = $_POST['prodi'];
  $domisili = $_POST['domisili'];
  $email = $_POST['email'];
  $skill = $_POST['skill'];

  $arrnamaskill = [];
  foreach ($skill as $selectedSkill) {
    $arrnamaskill[] = $selectedSkill;
  }

  $namaskill = implode(', ', $arrnamaskill);

  $skorskill = 0;

  foreach ($skill as $selectedSkill) {
    if (array_key_exists($selectedSkill, $ar_skill)) {
      $skorskill += $ar_skill[$selectedSkill];
    }
  }

  if ($skorskill < 0) {
    $deskripsi = "Tidak Memadai";
  } elseif ($skorskill <= 40) {
    $deskripsi = "Kurang";
  } elseif ($skorskill <= 60) {
    $deskripsi = "Cukup";
  } elseif ($skorskill <= 100) {
    $deskripsi = "Baik";
  } elseif ($skorskill <= 150) {
    $deskripsi = "Sangat Baik";
  } else {
    $deskripsi = "Anda belum mengisi skill";
  }

  $kategoriskill = $deskripsi;

  $hasilHtml .= '<h3 class="mt-3">Hasil</h3>
  <table class="table table-primary table-striped table-hover justify-content-center w-100">
    <tbody class="text-center">
    <tr>
      <td class="fw-bold text-dark">Nim</td>
      <td>' . (!empty($nim) ? $nim : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Nama</td>
      <td>' . (!empty($nama) ? $nama : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Jenis Kelamin</td>
      <td>' . (!empty($jk) ? $jk : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Program Studi</td>
      <td>' . (!empty($prodi) ? $prodi : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Skill</td>
      <td>' . (!empty($namaskill) ? $namaskill : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Skor Skill</td>
      <td>' . (!empty($skorskill) ? $skorskill : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Kategori Skill</td>
      <td>' . (!empty($kategoriskill) ? $kategoriskill : '') . '</td>
    </tr>
    <tr>
      <td class="fw-bold text-dark">Email</td>
      <td>' . (!empty($email) ? $email : '') . '</td>
    </tr>
  </tbody>
  </table>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi IT Club Data Science</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <style>
    .poppins-regular {
      font-family: "Poppins", sans-serif;
      font-weight: 400;
      font-style: normal;
    }
  </style>
</head>

<body class="poppins-regular">

  <div class="container mb-2">
    <?= $hasilHtml; ?>
  </div>

  <div class="container">
    <fieldset class="py-5">
      <legend><h3>Form Registrasi IT Club Data Science</h3></legend>
      <form method="post" action="index.php">
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="nim" name="nim">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
          <div class="col-sm-10">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-laki">
              <label class="form-check-label" for="laki">
                Laki-Laki
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
              <label class="form-check-label" for="perempuan">
                Perempuan
              </label>
            </div>
          </div>
        </fieldset>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Program Studi</label>
          <div class="col-sm-10">
            <select class="form-select" id="prodi" name="prodi">
              <option value="">Pilih Prodi</option>
              <?php foreach ($ar_prodi as $key => $value) : ?>
                <option value="<?= $key ?>">
                  <?= $value ?>
                </option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Skill Web & Programming</label>
          <div class="col-sm-10">
            <?php foreach ($ar_skill as $tech => $nilai) : ?>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="html" name="skill[]" value="<?= $tech ?>">
                <label class="form-check-label" for="html">
                  <?= $tech ?>
                </label>
              </div>
            <?php endforeach ?>

          </div>
        </div>
        <div class="row mb-3">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Tempat Domisili</label>
          <div class="col-sm-10">
            <select class="form-select" id="domisili" name="domisili">
              <option value="">Pilih Domisili</option>
              <?php foreach ($ar_domisili as $key => $value) : ?>
                <option value="<?= $value ?>">
                  <?= $value ?>
                </option>
              <?php endforeach ?>
            </select>
          </div>

        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="form-group row mt-3 mx-3">
          <div class="offset-2 col-6">
            <button type="submit" id="submit" name="submit" class="btn btn-primary"> Submit</button>
          </div>
        </div>
      </form>
    </fieldset>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>