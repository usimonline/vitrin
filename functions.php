<?php
setlocale(LC_TIME,"ru_RU.utf8");

function translate_into_english($s) {
//$s = (string) $s; // преобразуем в строковое значение
//  $s = strip_tags($s); // убираем HTML-теги
//  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
//  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
//  $s = trim($s); // убираем пробелы в начале и конце строки
	//$s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
//  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
//  $s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
//  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
	// return $s; // возвращаем результат
	$s = strip_tags($s); // убираем HTML-теги
	$s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
	$s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
	$s = trim($s); // убираем пробелы в начале и конце строки
	$rus=array('Щ','щ');
	$lat=array('Sch','sch');
	$string = str_replace($rus, $lat, $s);
	$rus=array('Ж','Ч','Ш','Ю','Я','ж','ч','ш','ю','я');
	$lat=array('G','Ch','Sh','Ju','Ja','g','ch','sh','ju','ja');
	$string = str_replace($rus, $lat, $string);
	$rus=array('!',' - ',':',',','?',')','(','»','«','>','<','"',' ','А','Б','В','Г','Д','Е','Ё','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ъ','Ы','Ь','Э','а','б','в','г','д','е','ё','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ъ','ы','ь','э');
	$lat=array('','-','','','','','','','','','','','-','A','B','V','G','D','E','E','Z','I','Ji','K','L','M','N','O','P','R','S','T','U','F','H','C','J','I','','E','a','b','v','g','d','e','e','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','c','','i','','e');
	$string = str_replace($rus, $lat, $string);
	return $string;
}

function translate_into_russian_service_1($string) {
	$rus=array('Щ','щ');
	$lat=array('SCH','sch');
	$string = str_replace($lat, $rus, $string);
	return $string;
}

function translate_into_russian_service_2($string) {
	$string = translate_into_russian_service_1($string);
	$rus=array('Ж','Ч','Ш','Ю','Я','ж','ч','ш','ю','я');
	$lat=array('GH','CH','SH','YU','YA','gh','ch','sh','yu','ya');
	$string = str_replace($lat, $rus, $string);
	return $string;
}

function translate_into_russian($string) {
	$string = translate_into_russian_service_2($string);
	$rus=array(' ','А','Б','В','Г','Д','Е','Ё','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ъ','Ы','Ь','Э','а','б','в','г','д','е','ё','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ъ','ы','ь','э',' ');
	$lat=array('-','A','B','V','G','D','E','E','Z','I','Y','K','L','M','N','O','P','R','S','T','U','F','H','C','Y','Y','Y','E','a','b','v','g','d','e','e','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','c','y','y','y','e',' ');
	$string = str_replace($lat, $rus, $string);
	return $string;
}


function translate_into_russian_pastnews($string) {
	$rus=array('МЕМЫ', 'СТУДЕНТЫ', 'КАРИКАТУРЫ', 'новости Беларуси', 'холодная война', 'политический юмор', 'Белоруссия','Россия','Украина','Польша','Запад','Советский Союз','СНГ','Экономика','Политика','Сирия','Новороссия','Прибалтика','Мир','Интервью','Армия','Союзное государство России и Белоруссии','История','Религия','Наука','Русский язык','Агенты Запада','Ядерное оружие','ОДКБ','by-by.info');
	$lat=array('bestmemes','helpstud','caricatures','belnews','coldwar','polithumor','belarus','russia','ancientukri','poland','west','ussr','cis','economy','policy','syria','novoros','baltic','world','interview','army','rusbel','history','religion','science','language','agents','nweapon','CSTO','site');
	$string = str_replace($lat, $rus, $string);
	return $string;
}

function preobrazovanie_url_razdel($url){

	return $url;
}



function transform_img($string,$url,$pic_alt) {
	//$first=array('bestmemes','helpstud','caricatures','belnews','coldwar','polithumor','ancientukri','economy','history','agents');
	//$url = str_replace($first, 'pictures', $url);
	//$url = str_replace('news', 'pictures', $url);
	$first = '<figure class="article__video"><div class="article__video-container"><img src="./picture'.$url.'img_';
	$second = '" alt="';
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


function transform_words($string) {
	//$string = str_replace('Беларусью','Белоруссией',$string);
	//$string = str_replace('через Беларусь','через Белоруссию',$string);
	//$string = str_replace('Через Беларусь','Через Белоруссию',$string);
	//$string = str_replace('Беларусью','Белоруссией',$string);
	//$string = str_replace('в Беларусь','в Белоруссию',$string);
	//$string = str_replace('В Беларусь','В Белоруссию',$string);
	//$string = str_replace('Беларусь','Белоруссия',$string);
	//$string = str_replace('Беларуси','Белоруссии',$string);
	$string = str_replace('в Украине','на Украине',$string);
	$string = str_replace('В Украине','На Украине',$string);
	return $string;
}

function otbor_parse($string, $StartWord, $EndWord)
{
	$LengthWord = 0;
// Определяем позицию строки, до которой нужно все отрезать
	$pos = strpos($string, $StartWord);
	//if ($pos === false) return '';
//Отрезаем все, что идет до нужной нам позиции <item>
	$string = substr($string, $pos);
// Точно таким же образом находим позицию конечной строки
	$pos = strpos($string, $EndWord);
	//if ($pos === false) return '';
// Отрезаем нужное количество символов от нулевого
	$string = substr($string, $LengthWord, $pos);
	$string = str_replace($StartWord, '', $string);//получили
	return $string;
}

function str_replace_once($search, $replace, $text)// заменяет первое вхождение подстроки
{
	$pos = strpos($text, $search);
	return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
}

function str_replace_poslednee($search, $replace, $subject)// заменяет последнее вхождение подстроки
{
	$pos = strrpos($subject, $search);

	if($pos !== false)
	{
		$subject = substr_replace($subject, $replace, $pos, strlen($search));
	}

	return $subject;
}

function autor_rand($string)
{
	$first=array('Ольга Усим','Анастасия Булгакова','Алексей Машеров','Алесь Карпович','Олег Бондарев','Алена Монахова',
		'Нина Тимошенко','Татьяна Клышникова','Сергей Станочник','Ольга Таланцева','Сергей Станочник','Георгий Найденов',
		'Кирилл Сазонов','Налым Каримов','Налым Каримов','Налым Каримов','Андрей Клюев','Владимир Взглядов');
	$kol_sim = strlen($string);
	$kol_sim_mod = $kol_sim%count($first);
	$name_autor = $first[$kol_sim_mod];
	return $name_autor;
}

function colichestvo_h2($string)
{
	$col_h2 = substr_count($string, '<h2>');
	return $col_h2;
}

function virezat_h2($string)
{
	for ($i = 0; ; $i++) {
		$content = $string;
		$StartWord = "<h2>";
		$EndWord = "</h2>";

		$pos = strpos($string, $StartWord);
		if ($pos === false) break;

		$string = substr($string, $pos);

		$pos = strpos($string, $EndWord);
		$string = substr($string, $pos); //сохранили в $string обрезку original до </h2>

		$content = otbor_parse($content, $StartWord, $EndWord); //i-й обрезок от <h2> до </h2>

		$content_link[$i] = $content;
	}

	return $content_link;
}

function podstanovka_kh2($string, $kol)
{
	if($kol <= 1) return $string;

	for($i = 0; $i < $kol; $i++) {
		$string = preg_replace('[<h2>]', '<h2 id="my_page_'.$i.'">', $string, 1);
	}
	return $string;
}