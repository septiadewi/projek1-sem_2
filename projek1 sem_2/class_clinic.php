<?php
require_once 'class_BMI.php';
require_once 'class_BMIpasien.php';
require_once 'class_pasien.php';

    $pasien1 = new Pasien();
    $pasien1->id= '0011' ;
    $pasien1->kode= 'P0011' ;
    $pasien1->name= 'Mustofa A' ;
    $pasien1->tmp_lahir= 'Sukoharjo' ;
    $pasien1->tgl_lahir= '23-02-1997' ;
    $pasien1->email= 'mustofa@gmail.com' ;
    $pasien1->gender= 'Laki-Laki' ;

    $bmipasien1 = new BmiPasien();
    $bmipasien1->tgl_periksa= '24-01-2022';

    $bmi1 = new BMI(56,145);
    $hasil1 = $bmi1->bb/($bmi1->tb*$bmi1->tb);
    //$bmi1->bb= '56';
    //$bmi1->tb= '145';

    echo 'Tanggal Periksa   :' .$bmipasien1->tgl_periksa;
    echo '<br/>Kode   :' .$pasien1->kode;
    echo '<br/>Nama Pasien   :' .$pasien1->name;
    echo '<br/>Gender   :' .$pasien1->gender;
    echo '<br/>Berat Badan   :' .$bmi1->bb;
    echo '<br/>Tinggi Badan   :' .$bmi1->tb;


    $pasien2 = new Pasien();
    $pasien2->id= '0011' ;
    $pasien2->kode= 'P0011' ;
    $pasien2->name= 'Astia virdaa' ;
    $pasien2->tmp_lahir= 'Depok' ;
    $pasien2->tgl_lahir= '01-04-2000' ;
    $pasien2->email= 'virdaa@gmail.com' ;
    $pasien2->gender= 'Perempuan' ;

    $bmipasien2 = new BmiPasien();
    $bmipasien2->tgl_periksa= '24-04-2022';

    $bmi2 = new BMI(60,165);
    $hasil2 = $bmi2->bb/($bmi2->tb*$bmi2->tb);
    //$bmi1->tb= '145';

    echo '<br/><br/><br/>Tanggal Periksa   :' .$bmipasien2->tgl_periksa;
    echo '<br/>Kode   :' .$pasien2->kode;
    echo '<br/>Nama Pasien   :' .$pasien2->name;
    echo '<br/>Gender   :' .$pasien2->gender;
    echo '<br/>Berat Badan   :' .$bmi2->bb;
    echo '<br/>Tinggi Badan   :' .$bmi2->tb;


    //$_tanggal = $_POST['tanggal'];
    //$_nama = $_POST['nama'];
    //$_id = $_POST['id'];
    //$_gender = $_POST['gender'];
    //$_tempat = $_POST['tempat'];
    //$_tgl = $_POST['tgl'];
    //$_bb = $_POST['bb'];
    //$_tb = $_POST['tb'];

    $pasien3 = new Pasien();
    //$bmi3 = new BMI($bb,$tb);
    //$bmipasien3 = new BmiPasien();


    $ar_pasien = [$pasien1,$pasien2];
    $ar_bmipasien = [$bmipasien1,$bmipasien2];
    $ar_bmi = [$bmi1,$bmi2];
    $ar_hasil = [$hasil1,$hasil2];

?>
<br/><br/>
<table widht="100%" border="1">
    <thead>
        <tr>
        <th>No</th><th>Tanggal Periksa</th><th>Kode</th><th>Nama Pasien</th><th>Gender</th><th>Berat Badan</th><th>Tinggi Badan</th><th>Hasil Bmi</th><th>Status BMI</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach($ar_pasien as $pasien)
            foreach($ar_bmipasien as $bmipasien)
            foreach($ar_bmi as $bmi){
        ?>

                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$bmipasien->tgl_periksa?></td>
                    <td><?=$pasien->kode?></td>
                    <td><?=$pasien->name?></td>
                    <td><?=$pasien->gender?></td>
                    <td><?=$bmi->bb?></td>
                    <td><?=$bmi->tb?></td>
                    <td><?$hasil?></td>
                </tr>

        <?php
            $nomor++;
            }
        ?>
</table> 