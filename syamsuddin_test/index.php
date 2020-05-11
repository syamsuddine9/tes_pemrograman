<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TES</title>
    <style media="screen">
      .container{
        top:15px;
        position:relative;
        margin: auto;
        background-color:#F1F1F1;
        border:1px solid #333;
        width:60vw;
        margin-bottom: 35px;
        padding:10px;
        font-family:consolas;
        font-size:10pt;
      }

    </style>
  </head>
  <body>
    <div class="container">

      <p><b>1. $angka = "1,3,5,7,9,11,13,15";</b> <br> Tampilkan urutan angka di bawah ini, menggunakan fungsi perulangan. </p>
      <div style="border:1px solid #333; padding:5px;">
        <span style="font-size:12pt; font-weight:bold;">Jawab :</span>
        <br>
        <?php
          $angka = "1,3,5,7,9,11,13,15";
          $angka_arr = explode(',', $angka);
          for ($i=0; $i < count($angka_arr); $i++) {
            echo $angka_arr[$i] . '<br>';
          }
         ?>
      </div>
      <hr>



       <p><b>2. 2020-05-01</b> </p>
          <ol type="a">
            <li>Ubah format tanggal di atas menjadi 05-20-01 menggunakan substring</li>
            <li>Ubah format tanggal di atas menjadi 05-20-01 menggunakan format date php</li>
            <li>Tampilkan 6 bulan kedepan dari tanggal di atas </li>
            <li>Berapa umur anda jika dihitung dari tanggal di atas</li>
          </ol>
          <div style="border:1px solid #333; padding:5px;">
            <span style="font-size:12pt; font-weight:bold;">Jawab :</span>
            <p>a.
            <?php
              $date = "2020-05-01";
              echo substr($date, 5,2).'-'.substr($date, 2,2).'-'.substr($date, 8);
             ?>
          <br>
           b.
           <?php
             $b_date = date('m-y-d', strtotime($date));
             echo $b_date;
            ?>
          <br>
          c.
          <?php
            $c_date = date('Y-m-d', strtotime($date.'+6 months'));
            echo $c_date;
           ?>
          <br>
          d.
          <?php
            $d_date_y = date('y', strtotime($date.'-1996 years -2 months -10 days'));
            $d_date_m = date('m', strtotime($date.'-1996 years -2 months -10 days'));
            $d_date_d = date('d', strtotime($date.'-1996 years -2 months -10 days'));
            echo $d_date_y.' Tahun, '. (int)$d_date_m.' Bulan, Lebih '. $d_date_d.' Hari';
           ?>
          </p>
        </div>
        <hr>



          <p>
            <b>3. [20,10,100,30,15,5]</b> <br>
            <ol type="a">
              <li>urutkan array tersebut (asc dan desc)</li>
              <li>tambahkan angka 180 di posisi terakhir pada array di atas</li>
              <li>hapus angka 30 pada array di atas</li>
            </ol>

          </p>
          <div style="border:1px solid #333; padding:5px;">
            <span style="font-size:12pt; font-weight:bold;">Jawab :</span>
            <br>
            a :
             <?php
              $array_a = [20,10,100,30,15,5];
              sort($array_a);
              $asc = 'asc [';
              $desc = 'desc [';

              for ($i=0; $i < count($array_a); $i++) {
                $asc .= $array_a[$i].',';
              }
              echo $asc.']';
              rsort($array_a);
              for ($i=0; $i < count($array_a); $i++) {
                $desc .= $array_a[$i].',';
              }
              echo ' '.$desc.']';

             ?>
             <br>
             b :
             <?php
             $array_b = [20,10,100,30,15,5];
             array_push($array_b, 180);
             print_r($array_b);
              ?>
             <br>
             c : <?php
             $array_c = [20,10,100,30,15,5];
             $index = array_search(30,$array_c);
              if($index !== FALSE){
                  unset($array_c[$index]);
              }
              print_r($array_c); ?>
          </div>
          <hr>


          <!-- NOMOR 4 -->
          <p>
            <b>4.  String = “AKU SUKA MAKAN NASI PADANG” </b> <br>
            <ol type="a">
              <li>buatlah algoritma dengan memanfaatkan perulangan yang menghasilkan Array dengan result seperti berikut : <br> ["aku","aku suka","aku suka makan","aku suka makan nasi","aku suka makan nasi padang","padang","padang nasi","padang nasi makan","padang nasi makan suka","padang nasi makan suka aku"] </li>
              <li>Atau sebagai berikut : <br> Array <br> (  <br>   [0] => aku  <br>   [1] => aku suka <br>    [2] => aku suka makan <br>    [3] => aku suka makan nasi  <br>   [4] => aku suka makan nasi padang  <br>   [5] => padang  <br>   [6] => padang nasi  <br>   [7] => padang nasi makan  <br>   [8] => padang nasi makan suka  <br>   [9] => padang nasi makan suka aku <br> ) </li>
            </ol>

          </p>
          <div style="border:1px solid #333; padding:5px;">
            <span style="font-size:12pt; font-weight:bold;">Jawab :</span>
            <br>
            <br>
            <?php
            $string = "AKU SUKA MAKAN NASI PADANG";
            $string_arr = explode(" ", $string);

            $new_arr = [];
            $temp = "";

            $x = count($string_arr);
            for ($i=0; $i < count($string_arr); $i++) {
              $temp .= $string_arr[$i].' ';
              if($i == $x)
              {
                $i=0;
                $temp = "";
              }
              array_push($new_arr, $temp);
            }

            for ($n=0; $n < count($new_arr); $n++) {
              echo '['.$n.'] =>   '.strtolower($new_arr[$n]).'<br>';
            }
             ?>
          </div>
          <hr>


          <!-- NOMOR 5 -->
          <p>
            <b>5.  $buah = array( <br> array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"), <br> array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"), <br> array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"), <br> array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"), <br> array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"), <br> array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM") <br> );</b> <br>
            <ol type="a">
              <li> Buat program untuk menambahkan buah Pisang yang harganya 5000 dan rasanya manis. ke variabel buah dan tampilkan Nama Buah dengan urutan secara descending </li>
              <li> Buat program untuk menampilkan Nama Buah yang nama buahnya mengandung Huruf "K" </li>
              <li> Buat program untuk menampilkan Buah, yang harganya kurang dari 10.000 yang rasa nya Manis </li>
            </ol>

          </p>
          <div style="border:1px solid #333; padding:5px;">
            <span style="font-size:12pt; font-weight:bold;">Jawab :</span>
            <br>a :
            <?php
              $buah = array(
                        array( "NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
                        array( "NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
                        array( "NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
                        array( "NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
                        array( "NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
                        array( "NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
                      );
              $pisang = array('NAMA' => 'PISANG', 'HARGA' => 5000, 'RASA' => 'MANIS');
              array_push($buah, $pisang);
              rsort($buah);
              for ($i=0; $i < count($buah); $i++) {
                  echo $buah[$i]['NAMA'].' ';
              }
             ?>
          <br>
          c :
          <?php
          for ($i=0; $i < count($buah); $i++) {
            $input = preg_quote('K', '~');
            $result = preg_grep('~' . $input . '~', $buah[$i]);
            if($result){
              var_dump($result);
            }
          }
           ?>
           <br>
           d :
         </div>




    </div>
  </body>
</html>
