<?php
echo "hello world\n";

$nim = "1202230045";
$nama = "Bruce Wayne";

echo "NIM : " . $nim;
echo "\nnama : " . $nama;
?>

<?php
define("NAMA", "Tony Stark");
define("NIM", "999");
echo "Nama : " . NAMA;
echo "NIM : " . NIM;
?>

<!-- konstanta -->
<h2>ini materi konstanta</h2>
<pre>
    <?php
    define(constant_name: "UNIV", value: "Avenger Academy");
    echo "selamat datang di " . UNIV;
    ?>
</pre>

<!-- OPERATOR -->
<h2>Tes Operator</h2>
<pre>
    <?php
        $a = 1000;
        $b = 500;

        echo "Tambah: " . ($a + $b) . "<br>";
        echo "Kurang: " . ($a - $b) . "<br>";
        echo "Kali: " . ($a * $b) . "<br>";
        echo "Bagi: " . ($a / $b) . "<br>";
    ?>
</pre>

<!-- OPERATOR -->
<h2>Kondisi</h2>
<pre>
    <?php
        $nilai = 85;
        if ($nilai >= 85){
            echo "cumlaude bre";
        }else{
            echo "nt bre";
        }

        echo "<br>";

        $grade = "B";
        switch($grade){
            case "A": echo"Bro is winning"; break;
            case "B": echo"Penting lulus"; break;
            default: echo "belajar lagi dek";
        }
        
    ?>
</pre>
<!-- looping -->
<h2>perulangan</h2>
<pre>
    <?php
    for ($i = 1; $i <= 5; $i++){
        echo "Angka: $i <br>";
        $i++;
    }

    echo "<br>";

    $i = 1;
    while($i <= 3){
        echo "Angka: $i <br>";
        $i++;
    }
    echo "<br>";

    $warna = ["Merah", "Kuning", "Hijau"];
    foreach($warna as $w){
        echo $w . "<br>";
    }
    ?>
</pre>

<!-- Function -->
<h2>Fungsi</h2>
<pre>
        <?php
            function luasSegitiga($alas, $tinggi){
                return 0.5 * $alas * $tinggi;
            }
            echo "Luas segitiga (alas=50, tinggi=10): " 
            .luasSegitiga(50, 10);
        ?>
   </pre>

   <hr>

   <!-- Array -->
    <h2>Array - List</h2>
    <pre>
        <?php
           $buah = ["Apel1", "Apel2", "Apel3"];
           echo "Buah Pertama: " .$buah[0]."<br>";

           $mhs = [
            "nama"=>"Peter parker",
            "nim"=>"111",
            "jurusan"=>"DKV",
           ];
           echo "Nama Mahasiswa: ".$mhs["nama"];
        ?>
    </pre>