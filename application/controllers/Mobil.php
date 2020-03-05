<?php
// berikut adalah sebuah class mobil yang akan menerapkan fungsi URI dengan mengirimkan beberapa parameter pada saat mengakses link
class Mobil extends CI_Controller 
{
  // berikut method warna yang akan menerapkan fungsi dari URI
  public function warna()
  {
    // berikut adalah sebuah pembuktian segment pada URI yang menampilkan segment 1 - 5
    echo "Segment 1 adalah = " . $this->uri->segment('1') . "</br>";
    echo "Segment 2 adalah = " . $this->uri->segment('2') . "</br>";
    echo "Segment 3 adalah = " . $this->uri->segment('3') . "</br>";
    echo "Segment 4 adalah = " . $this->uri->segment('4') . "</br>";
    echo "Segment 5 adalah = " . $this->uri->segment('5') . "</br>";
  }
}
