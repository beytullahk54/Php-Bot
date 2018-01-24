

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Document</title>
</head>
<body>

	<?php 
		include("ayar.php");

		  $stok = $baglanti -> query("SELECT * FROM linkler  where Durum='0'");
	      $stok ->execute();
	      if(isset($_GET['id'])){
	      	  $duzenle=$baglanti->query("Update linkler set Durum='1'  where id='".$_GET['id']."' ");
            
            
            if($duzenle){
                echo "Pasif Edildi.";
              }
	      } 
	?>
<style>	
th{width: 15%;}
td{text-align: center;}
</style>
	<table>
	 	<tr><th >İd</th><th>Şehir</th><th style="    width: 35% !important;">Link</th></tr>
	 	<?php foreach($stok as $stokcek){
	                    
	          echo "<tr><td>".$stokcek['id']."</td><td>".$stokcek["sehir"]."</td><td style='text-align:left;'><a href='".$stokcek["link"]."' > ".$stokcek["link_adi"]."</a><td><td><a href='?id=".$stokcek["id"]."' class='btn btn-danger'>Pasif Et</a></td></tr>";
	    } ?>

    </table>                           
	
</body>
</html>