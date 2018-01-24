
<!DOCTYPE html>
<html lang="tr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php 
ini_set('max_execution_time', 20000);
require "simple_html_dom.php";
function veri($r) {
	   
	$html = str_get_html(file_get_contents('http://'.$r.'.meb.gov.tr/www/iletisim.php'));  // Siteye bağlan
	include("../ayar.php");

	
	if($html){
		$ret = $html->find('table.table>td',5)->plaintext;
		echo $ret;
		 $stok = $baglanti->prepare("select * from linkler where link_adi=? "); //Güvenli yol 1
			    $stok->execute(array($ret));
			    $stokcek = $stok->fetch();
			    
				if(count($stokcek)==1){
					$ekle=$baglanti->prepare("insert into  linkler(link_adi,sehir) values(?,?)"); 
					 $ekle -> execute(array(trim($ret),$r));
					 sleep(0.5);
				}
		return $ret;

	}else{
		return $r ."  Yok<br>";	
	}
				





}

$sehirler=array();

foreach ($sehirler as $sehir) {

$url=trim(veri($sehir));
echo  $sehir.'<br>'.$url.'<br>';
   

}





?>
</body>
</html>