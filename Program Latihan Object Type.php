<?php
class Toko{
  public $namaBarang, 
        $merk, 
        $harga;
            // membuat method
        public function cetakProduk(){
            return "$this->namaBarang, $this->merk, (Rp $this->harga)";
        }
        public function __construct($namaBarang = "Nama Barang", $merk = "Merk", $harga = 0){
            $this->namaBarang = $namaBarang;
            $this->merk = $merk;
            $this->harga = $harga;
        }
}

class CetakInfoBarang{
    public function info(Toko $barang){
        $str="{$barang->namaBarang}, {$barang->cetakProduk()}";
        return $str;

    }


}

$barang1 = new Toko("Macbook Pro" , "Apple", 30000000);
$barang2 = new Toko("Iphone 11 Pro Max", "Apple", 23000000);
$barang3 = new Toko("Realme XT", "Realme", 3000000);
$barang4 = new Toko("Iphone XR", "Apple", 6000000);
$infoBarang = new CetakInfoBarang($barang1);


echo "Nama Barang : " . $barang1->cetakProduk();
echo "<br>";
echo "Nama Barang : " . $barang2->cetakProduk();
echo "<br>";
echo "Nama Barang : " . $barang3->cetakProduk();
echo "<br>";
echo "Nama Barang : " . $barang4->cetakProduk();
echo "<br>";
echo $infoBarang->info($barang1);

?>