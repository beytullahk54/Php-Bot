<?php 
ini_set('max_execution_time', 300);
require "simple_html_dom.php";
include("ayar.php");
function veri($r) {
   
	$html = str_get_html(file_get_contents('http://'.$r.'.diyanet.gov.tr'));  // Siteye bağlan

	$deneme="";
	foreach($html->find('div.text-left') as $element)  // Sitedeki tüm "a" elementlerini ara
	{
	        $deneme=$deneme . '<br>' . $element->innertext ;   // Foreach ile saydaki "a" elementi kadar döndür. Ve "href" değeri ile linke ulaş
	}
   return $deneme;
}

$sehirler=array('adana','adiyaman','afyonkarahisar','agri','aksaray','amasya','ankara','antalya','ardahan','artvin','aydin','balikesir','bartin','batman','bayburt','bilecik','bingol','bitlis','bolu','burdur','bursa','canakkale','cankiri','corum','denizli','diyarbakir','duzce','edirne','elazig','erzincan','erzurum','eskisehir','gaziantep','giresun','gumushane','hakkari','hatay','igdir','isparta','mersin','istanbul','izmir','kahramanmaras','karabuk','karaman','kars','kastamonu','kayseri','kirikkale','kirklareli','kirsehir','kilis','kocaeli','konya','kutahya','malatya','manisa','mardin','mugla','mus','nevsehir','nigde','ordu','osmaniye','rize','sakarya','samsun','siirt','sinop','sivas','sanliurfa','sirnak','tekirdag','tokat','trabzon','tunceli','usak','van','yalova','yozgat','zonguldak');

foreach ($sehirler as $sehir) {
	
	$url=trim(veri($sehir));
	echo  $sehir.'<br>'.$url.'<br>';
    $ekle=$baglanti->prepare("insert into  linkler(link,sehir) values(?,?)"); 
    $ekle -> execute(array($url,$sehir));

}

?>