<?php
// berikut adalah class yang mendefinisikan library baru, bernama PrimsLib yang nantinya dapat dimuat di berbagai controller
class PrimsLib  
{
  // berikut adalah sebuah contoh method pada library/pustaka yang dapat dipakai oleh controller lain
  public function nama_saya()
  {
    echo "Nama saya adalah Nur Iftita Sari!";
  }

  // berikut adalah sebuah contoh method yang membutuhkan parameter untuk dijalankan
  public function nama_kamu($nama)
  {
    echo "Nama kamu adalah ". $nama ."!";
  }
}
