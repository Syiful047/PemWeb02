<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM NILAI</title>
    <link rel="shortcut icon" type="image/icon" href="..//..//logoku.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
           <div class="row-8 mx-auto w-50">
            <h3 class="text-center mb-4">Form Nilai Mahasiswa</h3>
            <!-- ini form -->
            <form class="mt-4" method="POST" action="hasil.php">
                <div class="form-group row">
                    <label for="nama_siswa" class="col-4 col-form-label">Nama Lengkap</label> 
                    <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                        </div> 
                        <input id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-form-label" for="mata_kuliah">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="mata_kuliah" name="mata_kuliah" class="custom-select" required="required">
                        <option value="--Pilih Matkul--">-- Pilihan Mata Kulian --</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Statistik">Statistik</option>
                        <option value="Bahas Inggris">Bahas Inggris</option>
                        <option value="Pemrograman WEB">Pemrograman WEB</option>
                        <option value="Agama Islam">Agama Islam</option>
                        <option value="Data Base">Data Base</option>
                        <option value="Komonikasi">Komonikasi</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                    <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-bar-chart"></i>
                        </div>
                        </div> 
                        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                    <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        </div> 
                        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                    <div class="col-5">
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        </div> 
                        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="number" class="form-control" required="required">
                    </div>
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
           </div> 
        </div>
    </div>
</body>
</html>