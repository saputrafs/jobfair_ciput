<?php
error_reporting(error_reporting() & ~E_NOTICE);
include "koneksi.php";

if ($_GET['page'] == "home") {
    include "home.php";
} else if ($_GET['page'] == "details") {
    include "details.php";
}  else if ($_GET['page'] == "list") {
    include "list.php";
} else if ($_GET['page'] == "terima") {
    include "terima.php";
} else if ($_GET['page'] == "tolak") {
    include "tolak.php";
} else if ($_GET['page'] == "profil") {
    include "profil.php";
} else {
    include "home.php";
}
