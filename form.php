<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penanganan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="overflow-x: hidden;">
    


    <div class="row justify-content-center  py-5">    
        <form action="proses_mahasiswa.php" method="post" class="col-md-4">
        <h3 class="mb-5">Form Mahasiswa</h3>
            <div class="mb-3 pb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" name="nim" class="form-control" id="nim" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" required autofocus>
            </div>
            <div class="mb-3 row g-3 pb-3">
                <label for="" class="form-label col-12" style="margin-bottom: -5px;">Tanggal Lahir</label>
                <select name="tgl" id="" class="form-select col me-4">
                        <option value="" disabled selected>-dd-</option>
                        <?php
                            for($i = 1; $i <= 31; $i++){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="bln" id="" class="form-select col me-4">
                        <option value="" disabled selected>-mm-</option>
                        <?php
                            $bln = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des'];

                            foreach ($bln as $i => $value) {
                                echo "<option value=".($i+1).">".$value."</option>";
                            }
                        ?>
                    </select>
                    <select name="thn" id="" class="form-select col">
                        <option value="" disabled selected>-thn-</option>
                        <?php
                            for($i = date('Y'); $i >= 1945; $i--){
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="jk" class="form-label">Jenis Kelamin</label><br>
                <input type="radio" class="form-check-input me-2" name="jk" id="lk" value="lk" checked><label for="lk">Laki-Laki</label>
                <input type="radio" class="form-check-input ms-4 me-2" name="jk" id="pr" value="pr"><label for="pr">Perempuan</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="prodi" class="form-label">Prodi</label>
                <select name="prodi" class="form-select" id="prodi" required>
                    <option value="" disabled selected>--- Pilih Prodi ---</option>
                    <option value="trpl">Teknologi Rekayasa Perangkat Lunak</option>
                    <option value="mi">Manajemen Informatika</option>
                    <option value="tekom">Teknik Komputer</option>
                    <option value="animas">Animasi</option>
                </select>
            </div>
            <div class="mb-3 pb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" required autofocus>
            </div>
            <div class="mb-3 pb-3">
                <label for="hobi" class="form-label">Hobi</label><br>
                <input type="checkbox" name="hobi[]" id="coding" value="coding" class="me-2 form-check-input"><label for="coding" class="me-3">Coding</label>
                <input type="checkbox" name="hobi[]" id="game" value="game" class="me-2 form-check-input"><label for="game" class="me-3">Bermain Game</label>
                <input type="checkbox" name="hobi[]" id="memancing" class="me-2 form-check-input"value="memancing"><label for="memancing" class="me-3">Memancing</label>
            </div>
            <div class="mb-3 pb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>