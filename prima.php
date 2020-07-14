<form method="post">
        <input type="number" class="form-control" placeholder="Gassss" name="n">
        <input name="submit" type="submit" value="Itung">
    </form>
    <?php
if (@$_POST['submit']) {
  for($i=1;$i<=$_POST['n'];$i++){ 
    $a = 0;
    for($j=1;$j<=$i;$j++){ 
        if($i % $j == 0){ 
            $a++; 
        }
    }
    if($a == 2){ 
     echo $i.',';
    }
}
echo "By Odhie Rahmawan h3h3";
}
?>
