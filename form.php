<!doctype html>
<html lang="en">

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
            <div class="beli">
                <form action="hasil.php" method="$_POST">
                    <h2>Form Pembelian</h2>
                    <table  cellpadding="15" padding="800px" border-radius="5%" align="center">
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><input type="date" name="date"></td>
                        </tr>                     
                        <tr>
                            <td>Id Pemesanan</td>
                            <td>:</td>
                            <td><input type="text" name="id"></td>
                        </tr>                      
                        <tr>
                            <td>Nama</td>
                            <td> : </td>
                            <td><input type="text" name="nama"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><input type="text" name="alamat"></td>
                        </tr>  
                        <tr>
                            <td>Merk</td>
                            <td> : </td>
                            <td>
                            <select name="tipe">
                                <option value="Rayban">Rayban</option>
                                <option value="Calvin Clein">Calvin Clein</option>
                                <option value="Douce">Douce</option>
                                <option value="Versace">Versace</option>
                                <option value="Cat Eye">Cat Eye</option>
                                <option value="Guess">Gaya</option>
                            </select>
                            </td>                           
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td> : </td>
                            <td><input type="text" name="jumlah"></td>
                        </tr>
                        <tr>
                            <td>
                            <button type="submit" name="tampil">Cek Out</button>
                            </td>
                        </tr>                           
                    </table>
                </form>
            </div>
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