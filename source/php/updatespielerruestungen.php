<?php
include('../../../connect.php');
//$ID = $_POST['ID'];
//$MOD=$_POST['INPUTARRAY'];
//$Name=$_POST['NAMEARRAY'];
//$stmt="UPDATE spieler.ruestung  SET reiten = $1,";
//for ($i=0; $i < 2 ; $i++) {
  $stmt='UPDATE spieler.ruestung set ausruestungsmodifikation= $1 where name_beschreibung=$2 and id=$3';
  $data=array(1,'Hakta',1);
  $result = pg_prepare($dbconn,$stmt);
  $result=pg_execute($dbconn,$data);
//}
pg_last_error();
pg_close($dbconn);
?>
