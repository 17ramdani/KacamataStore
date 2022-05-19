<?php
	$quantity = $_POST['total'];
	$harga = $_POST['harga'];
    $merk = $_POST['merk'];
	if ($merk == 'Rayban') {
		$harga = 155000;
	} elseif ($merk == 'Calvin Clein'){
		$harga = 155000;
	} elseif ($merk == 'Dolce') {
		$harga = 800000;
	} elseif ($merk == 'Versace') {
		$harga = 155000;
	} elseif ($merk == 'Guess') {
		$harga = 500000;
	}
	$total_h = $harga * $quantity;
	?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--- Link Css-->
    <link rel="stylesheet" href="form.css">

    <title>threeR</title>
</head>

<body>
    
    <div id="pembelian">
        <div class="container">
            <h2>Data Pembelian</h2>
            <form method="get">
            <table cellpadding="15" padding="600px" border-radius="10" align="center">
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td><?php echo $_GET["date"]; ?></td>
                </tr>
                <tr>
                    <td>Id Pemesanan</td>
                    <td>:</td>
                    <td><?php echo $_GET["id"]; ?></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $_GET["nama"]; ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $_GET["alamat"]; ?></td>
                </tr>
                <tr>
                    <td>Merk</td>
                    <td>:</td>
                    <td><?php echo $merk; ?></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><?php echo $_GET["jumlah"] ?></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><?php echo $harga ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td><?php echo $total_h ?></td>
                </tr>
            </table>
            </form>
            
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>