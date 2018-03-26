 <?php
  $angka = isset($_POST['angka']) ? $_POST['angka']:"";
  if (isset($_POST['d2b'])) {
      echo decbin($angka);
  }
  if (isset($_POST['d2o'])) {
      echo decoct($angka);
  }
  if (isset($_POST['d2h'])) {
      echo dechex($angka);
  }
  if (isset($_POST['b2d'])) {
      echo bindec($angka);
  }
  if (isset($_POST['o2d'])) {
      echo octdec($angka);
  }
  if (isset($_POST['h2d'])) {
      echo hexdec($angka);
  }
  ?>