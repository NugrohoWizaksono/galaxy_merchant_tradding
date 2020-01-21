<?php 

$input = "glob prok prok prok silver";
$data  = explode(" ", $input);
$conversi = conversiRoman($data); //start conversi kata-kata ke romawi
$nominal = romanToNominal($conversi);

function conversiRoman($datas) {
   
   $romawi = ""; //inisialisasi penampungan conversi
   foreach ($datas as $value) {
      switch ($value) {
         //ketika value == case isi angka romawi ke dalam variabel
         case 'glob': 
            $romawi .= "I"; 
            break;
         
         case 'prok':
            $romawi .= "V";
            break;
         
         case 'pish':
            $romawi .= "X";
            break;

         case 'tegj':
            $romawi .= "L";
            break;
      }
   }
   //mengembalikan hasil yang disimpan di variabel
   return $romawi;
}

function romanToNominal($conversi)
{
   // list angka romawi
   $romawi = array(
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1,
   );
   $angka = 0;

   //proses loop dari romawi
   foreach ($romawi as $key => $value) {
      // jika string di dalam konversi mengandung tulisan pada key array romawi maka lakukan pemrosesan
      if(strpos($conversi, $key) === 0) {
         $angka += $value; // isi dengan value
         $conversi = substr($conversi, strlen($key)); //hapus isi string yang sudah di proses
      }
   }
return $angka;
}

print_r($nominal);

?>

