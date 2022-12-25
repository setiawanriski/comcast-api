<?php
include 'module.php';
echo "
╭╮╱╱╭╮╱╭╮╱╱╱╭╮╭━━━╮╱╱╱╱╱By :╱╱╱╱╱╭╮
┃╰╮╭╯┃╱┃┃╱╱╱┃┃┃╭━╮┃╱Setiawan AR╱╭╯╰╮
╰╮┃┃╭┻━┫┃╭┳━╯┃┃┃╱╰╋━━┳╮╭┳━━┳━━┳━┻╮╭╯
╱┃╰╯┃╭╮┃┃┣┫╭╮┃┃┃╱╭┫╭╮┃╰╯┃╭━┫╭╮┃━━┫┃
╱╰╮╭┫╭╮┃╰┫┃╰╯┃┃╰━╯┃╰╯┃┃┃┃╰━┫╭╮┣━━┃╰╮
╱╱╰╯╰╯╰┻━┻┻━━╯╰━━━┻━━┻┻┻┻━━┻╯╰┻━━┻━╯
";
echo "[?] Input File(.txt) : ";
$file = file(trim(fgets(STDIN)));
echo "[?] Save File To(.txt) : ";
$nama_file = trim(fgets(STDIN));

foreach ($file as $data) {
  $email = str_replace("\n", "", $data);
  // print_r($email);
  $msg = json_decode(CurlData($email));
  $pesan = "Email : ".$msg->email." => ".$msg->msg."\n";
  SaveFile($nama_file,$msg->email);
  print_r($pesan);
}














