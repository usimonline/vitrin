<?php
setlocale(LC_TIME,"ru_RU.utf8");



function transform_img($string,$url,$pic_alt) {
	$first=array('bestmemes','helpstud','caricatures','belnews','coldwar','polithumor','ancientukri','economy','history','agents');
	$url = str_replace($first, 'pictures', $url);
	$url = str_replace('news', 'pictures', $url);
	$first = '<figure class="article__video"><div class="article__video-container"><img src="'.$url.'img_';
	$second = '.jpg" alt="';
	$third = '" /></div><figcaption>';
	$fourth = '</figcaption></figure><p></p>';
	if (!empty($pic_alt[2])) $string = str_replace("<img_2img>", $first.'2'.$second.$pic_alt[2].$third.$pic_alt[2].$fourth, $string);
	if (!empty($pic_alt[3])) $string = str_replace("<img_3img>", $first.'3'.$second.$pic_alt[3].$third.$pic_alt[3].$fourth, $string);
	if (!empty($pic_alt[4])) $string = str_replace("<img_4img>", $first.'4'.$second.$pic_alt[4].$third.$pic_alt[4].$fourth, $string);
	if (!empty($pic_alt[5])) $string = str_replace("<img_5img>", $first.'5'.$second.$pic_alt[5].$third.$pic_alt[5].$fourth, $string);
	if (!empty($pic_alt[6])) $string = str_replace("<img_6img>", $first.'6'.$second.$pic_alt[6].$third.$pic_alt[6].$fourth, $string);
	if (!empty($pic_alt[7])) $string = str_replace("<img_7img>", $first.'7'.$second.$pic_alt[7].$third.$pic_alt[7].$fourth, $string);
	if (!empty($pic_alt[8])) $string = str_replace("<img_8img>", $first.'8'.$second.$pic_alt[8].$third.$pic_alt[8].$fourth, $string);
	if (!empty($pic_alt[9])) $string = str_replace("<img_9img>", $first.'9'.$second.$pic_alt[9].$third.$pic_alt[9].$fourth, $string);
	if (!empty($pic_alt[10])) $string = str_replace("<img_10img>", $first.'10'.$second.$pic_alt[10].$third.$pic_alt[10].$fourth, $string);
	//$img=array('<figure class="article__video"><div class="article__video-container"><img src="'.$url.'img_','.jpg" alt="Альтернатива" /></div><figcaption>Подпись под фото</figcaption></figure><p></p><p>');
	//$zamena=array('<img_','img>');
	//$string = str_replace($zamena, $img, $string);
	return $string;
}

function transform_img_prost($string) {
	$first=array('bestmemes','helpstud','caricatures','belnews','coldwar','polithumor','ancientukri','economy','history','agents');
	$string = str_replace($first, 'pictures', $string);
return $string;
}
