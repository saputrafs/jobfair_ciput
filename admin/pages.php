<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "../koneksi.php";

if ($_GET['page'] == "home") {
    include "home.php";
} else if ($_GET['page'] == "tambah_event") {
    include "tambah_event.php";
}
else if ($_GET['page'] == "edit_event") {
    include "edit_event.php";
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
else if ($_GET['page'] == "profil") {
    include "profil.php";
}
else if ($_GET['page'] == "perusahaan") {
    include "perusahaan.php";
}
else if ($_GET['page'] == "peserta") {
    include "user.php";
}
else {
    include "home.php";
}
