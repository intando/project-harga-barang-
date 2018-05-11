<?php
class Koneksi{
  private $server="localhost";
  private $username="def";
  private $password = "intando";
  private $db = "id5009076_toko";
  private $hubungan;

  function ambilKoneksi(){
    $hubungan= new mysqli($this ->server, $this->username,
    $this->password, $this->db);
    return $hubungan;
  }
}
 ?>
