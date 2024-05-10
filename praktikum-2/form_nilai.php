<?php

if (!empty($_POST['proses'])) {

    $proses = $_POST['proses'];

    $nama_siswa = $_POST['nama'];

    $mata_kuliah = $_POST['matkul'];

    $nilai_uts = $_POST['nilai_uts'];

    $nilai_uas = $_POST['nilai_uas'];

    $nilai_tugas = $_POST['nilai_tugas'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
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

    <div class="container mb-2 border-bottom">
        <h3 class="mt-2">Form Penilaian Mahasiswa</h3>
        <div class="row justify-content-center mt-2 mb-2">
            <div class="col-md-12">
                <form method="POST" action="form_nilai.php">
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="" size="30"
                                placeholder="Masukan Nama">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="matkul">Mata Kuliah:</label>
                            <select class="form-control" id="matkul" name="matkul">
                                <option value="">Pilih Mata Kuliah</option>
                                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                                <option value="Basis Data">Basis Data</option>
                                <option value="Pemrograman Web">Pemrograman Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="nilai_uts">Nilai UTS:</label>
                            <input type="number" class="form-control" id="nilai_uts" name="nilai_uts" value="" size="6"
                                placeholder="Masukan Nilai UTS">
                        </div>
                        <div class="form-group mb-3 col-md-6">
                            <label for="nilai_uas">Nilai UAS:</label>
                            <input type="number" class="form-control" id="nilai_uas" name="nilai_uas" value="" size="6"
                                placeholder="Masukan Nilai UAS">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3 col-md-6">
                            <label for="nilai_tugas">Nilai Tugas/Praktikum:</label>
                            <input type="number" class="form-control" id="nilai_tugas" name="nilai_tugas" value=""
                                size="6" placeholder="Masukan Nilai Tugas">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary fw-bold" value="Simpan" name="proses">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container mb-2">

        <h3 class="mt-3">Nilai Akhir Mahasiswa</h3>

        <table class="table table-primary table-striped table-hover justify-content-center w-100">
            <tbody class="text-center">
                <tr>
                    <td class="fw-bold text-dark">Proses</td>
                    <td><?= !empty($proses) ? $proses : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Nama Siswa</td>
                    <td><?= !empty($nama_siswa) ? $nama_siswa : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Mata Kuliah</td>
                    <td><?= !empty($mata_kuliah) ? $mata_kuliah : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Nilai UTS</td>
                    <td><?= !empty($nilai_uts) ? $nilai_uts : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Nilai UAS</td>
                    <td><?= !empty($nilai_uas) ? $nilai_uas : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Nilai Tugas/Praktikum</td>
                    <td><?= !empty($nilai_tugas) ? $nilai_tugas : '';; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>