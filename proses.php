<?php
  // Menerima data yang dikirim dari form.html
  $angka1 = $_POST['angka1'];
  $angka2 = $_POST['angka2'];
  $operator = $_POST['operator'];

  // Melakukan operasi aritmatika sesuai dengan operator yang dipilih
  if ($operator == '+') {
    $hasil = $angka1 + $angka2;
  } else if ($operator == '-') {
    $hasil = $angka1 - $angka2;
  } else if ($operator == '*') {
    $hasil = $angka1 * $angka2;
  } else if ($operator == '/') {
    $hasil = $angka1 / $angka2;
  }

  // Menampilkan hasil operasi aritmatika ke layar
  echo "Hasil dari $angka1 $operator $angka2 adalah: $hasil";
?>
