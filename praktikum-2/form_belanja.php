<?php
if (!empty($_POST['proses'])) {
    $proses = $_POST['proses'];
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    $tv = 4200000;
    $kulkas = 3100000;
    $mesin_cuci = 3800000;
    $total = 0;

    if ($produk == 'TV') {
        $total = $tv * $jumlah;
    } elseif ($produk == 'KULKAS') {
        $total = $kulkas * $jumlah;
    } elseif ($produk == 'MESIN CUCI') {
        $total = $mesin_cuci * $jumlah;
    } else {
        echo '<br/>Produk tidak valid';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
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
    <div class="container">
        <form method="POST" action="form_belanja.php">
            <h2 class="mt-4">Belanja Online</h2>
            <hr>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group row mt-3">
                        <label for="customer" class="col-md-2 col-form-label">Customer</label>
                        <div class="col-md-6">
                            <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label class="col-md-2">Pilih Produk</label>
                        <div class="col-md-6">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_0" type="radio" required="required" class="custom-control-input" value="TV">
                                <label for="radio_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_1" type="radio" required="required" class="custom-control-input" value="KULKAS">
                                <label for="radio_1" class="custom-control-label">KULKAS</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="radio_2" type="radio" required="required" class="custom-control-input" value="MESIN CUCI">
                                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <label for="jumlah" class="col-md-2 col-form-label">Jumlah</label>
                        <div class="col-md-6">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="offset-md-2 col-md-6">
                            <input type="submit" name="proses" class="btn btn-primary" value="Proses">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <table class="table table-bordered">
                        <tbody>
                            <tr class="table-dark text-light">
                                <td>Daftar Harga</td>
                            </tr>
                            <tr>
                                <td>TV : 4.200.000</td>
                            </tr>
                            <tr>
                                <td>Kulkas : 3.100.000</td>
                            </tr>
                            <tr>
                                <td>Mesin Cuci : 3.800.000</td>
                            </tr>
                            <tr class="table-dark text-light">
                                <td>Harga Dapat Berubah Setiap Saat</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>

        <hr>

        <table class="table table-primary table-striped table-hover justify-content-center w-100">
            <tbody class="text-center">
                <tr>
                    <td class="fw-bold text-dark">Proses</td>
                    <td><?= !empty($proses) ? $proses : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Nama Customer</td>
                    <td><?= !empty($customer) ? $customer : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Produk Pilihan</td>
                    <td><?= !empty($produk) ? $produk : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Jumlah Beli</td>
                    <td><?= !empty($jumlah) ? $jumlah : ''; ?></td>
                </tr>
                <tr>
                    <td class="fw-bold text-dark">Total Harga</td>
                    <td><?= !empty($total) ? $total : ''; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>