<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "../koneksi.php";

if ($_GET['page'] == "home") {
    include "home.php";
} else if ($_GET['page'] == "tambah_loker") {
    include "tambah_loker.php";
}
else if ($_GET['page'] == "loker") {
    include "loker.php";
}
else if ($_GET['page'] == "terima") {
    include "terima.php";
}
else if ($_GET['page'] == "tolak") {
    include "tolak.php";
}
else if ($_GET['page'] == "edd") {
    include "edd.php";
}
else if ($_GET['page'] == "pelamar") {
    include "pelamar.php";
}else if ($_GET['page'] == "pelamar_terima") {
    include "pelamar_terima.php";
}else if ($_GET['page'] == "pelamar_tolak") {
    include "pelamar_tolak.php";
}else if ($_GET['page'] == "pelamar_setuju") {
    include "pelamar_setuju.php";
}
else if ($_GET['page'] == "profil") {
    include "profil.php";
}

else {
    include "home.php";
}
