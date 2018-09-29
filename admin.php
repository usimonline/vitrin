<?php 





if (!empty($_POST['teme'])){
	
	$datetime = $_POST["datetime"];//date("Y-m-d H:i:s");
    $id = $_POST["id"];//time();
	$datetime_mass_1 = explode ( ' ', $datetime);
	$datetime_mass_2 = explode ( '-', $datetime_mass_1[0]);
	$year = $datetime_mass_2[0];
	$month = $datetime_mass_2[1];
	$day = $datetime_mass_2[2];
    $comments = 0;
	$teme = $_POST["teme"];
	$url = $_POST["url"];
	if ($_POST["chpu_url_switch"] == 1 ) $url = $url.translate_into_english($_POST['teme']).'/';
	$description = $_POST["description"];
	$razdel = $_POST["razdel"];


	$text = $_POST["text"];
	//$colichestvo_h2_per = colichestvo_h2($text);
	//if ($colichestvo_h2_per > 1) {
	//	$massiv_h2 = virezat_h2($text);
	//	$text = podstanovka_kh2($string_page_temp, $colichestvo_h2_per);
	//	$dop_text_soderg = '<noindex><p><blockquote></p><ul><li><strong>Содержание</strong></li>';
	//	for($i = 0; $i < $colichestvo_h2_per; $i++) {
	//		$dop_text_soderg = $dop_text_soderg.'<li><a href="#my_page_' . $i . '">' . ($i + 1) . '. ' . $massiv_h2[$i] . '</a></li>';
	//	}
	//	$dop_text_soderg = $dop_text_soderg.'</ul><p></blockquote></p></noindex>';
	//	$text = $dop_text_soderg.$text;
	//}




	$picture_text = $_POST["picture_text"];
	$pic_alt_2 = $_POST["pic_alt_2"];
	$pic_alt_3 = $_POST["pic_alt_3"];
	$pic_alt_4 = $_POST["pic_alt_4"];
	$pic_alt_5 = $_POST["pic_alt_5"];
	$pic_alt_6 = $_POST["pic_alt_6"];
	$pic_alt_7 = $_POST["pic_alt_7"];
	$pic_alt_8 = $_POST["pic_alt_8"];
	$pic_alt_9 = $_POST["pic_alt_9"];
	$pic_alt_10 = $_POST["pic_alt_10"];
	$pic_alt = array(
		2 => $pic_alt_2,
		$pic_alt_3,
		$pic_alt_4,
		$pic_alt_5,
		$pic_alt_6,
		$pic_alt_7,
		$pic_alt_8,
		$pic_alt_9,
		$pic_alt_10
	);
	$text = transform_img($text,$url,$pic_alt);
	$keys = $_POST["keys"];
$url_ext = $_POST["url_ext"];
$url_frame = $_POST["url_frame"];
$url_int = $_POST["url_int"];
$teme_int = $_POST["teme_int"];
	
	$insert = "REPLACE INTO $Name_database.$table (`id`, `datetime`, `teme`, `description`, `razdel`, `url`, `comments`, `text`, `keys`, `url_ext`, `url_frame`, `url_int`, `teme_int`) 
	VALUES ($id,'$datetime','$teme','$description','$razdel','$url',$comments,'$text','$keys','$url_ext','$url_frame','$url_int','$teme_int')";
	
	$result = mysqli_query($link, $insert);
	if ($result = 'true'){
       //echo "Информация занесена в базу данных";
    }else{
    echo "Информация не занесена в базу данных";
	}
	
	//echo '<br>';
	//print_r($_FILES);
	//Для загрузки файлов
	$filePath  = $_FILES['filename']['tmp_name'];
	$errorCode = $_FILES['filename']['error'];

	if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($filePath)) {

		// Массив с названиями ошибок
		$errorMessages = [
			UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
			UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
			UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
			UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
			UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
			UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
			UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
		];

		// Зададим неизвестную ошибку
		$unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';

		// Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
		$outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;

		// Выведем название ошибки
		die($outputMessage);
	}





	if($_FILES['filename']['size'] > 1024*1024)
    {
    echo ("Размер файла превышает 1 мегабайт");
    exit;
    }
	if($_FILES['filename_2']['size'] > 1024*1024)
    {
    echo ("Размер файла превышает 1 мегабайт");
    exit;
    }
	if($_FILES['filename_3']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_4']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_5']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_6']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_7']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_8']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_9']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}
	if($_FILES['filename_10']['size'] > 1024*1024)
	{
		echo ("Размер файла превышает 1 мегабайт");
		exit;
	}

    // Проверяем загружен ли файл
	$url_mass = explode ( '/', $url);
	if (!empty($url_mass[6])) $chpu_url ="/".$url_mass[6];
	else $url_mass[6] = '';
	$url_pic = "pictures/".$url_mass[2]."/".$url_mass[3]."/".$url_mass[4]."/".$url_mass[5].$chpu_url;
	@mkdir("pictures/".$url_mass[2], 0755);
	@mkdir("pictures/".$url_mass[2]."/".$url_mass[3], 0755);
	@mkdir("pictures/".$url_mass[2]."/".$url_mass[3]."/".$url_mass[4], 0755);
	@mkdir("pictures/".$url_mass[2]."/".$url_mass[3]."/".$url_mass[4]."/".$id, 0755);
	@mkdir($url_pic, 0755);
    if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
    {
    // Если файл загружен успешно, перемещаем его
    // из временной директории в конечную
	// Создаем папки

    move_uploaded_file($_FILES["filename"]["tmp_name"], $url_pic."/img_1.jpg");
		$filename_sq = $url_pic."/";
		$filename1_sq = $filename_sq.'img_1.jpg';
		//echo $filename1;
		$filename2_sq = $filename_sq.'img_1_2.jpg';
		//echo $filename2;
		$image_smoll_sq =  imagecreatefromjpeg($filename1_sq);
		imagejpeg($image_smoll_sq, $filename2_sq, 10);
    } //else echo "хуйхуйхуйхуйхуйхуйхуйхуйхуй!!!";
	if(is_uploaded_file($_FILES["filename_2"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_2"]["tmp_name"], $url_pic."/img_2.jpg");
	}
	if(is_uploaded_file($_FILES["filename_3"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_3"]["tmp_name"], $url_pic."/img_3.jpg");
	}
	if(is_uploaded_file($_FILES["filename_4"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_4"]["tmp_name"], $url_pic."/img_4.jpg");
	}
	if(is_uploaded_file($_FILES["filename_5"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_5"]["tmp_name"], $url_pic."/img_5.jpg");
	}
	if(is_uploaded_file($_FILES["filename_6"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_6"]["tmp_name"], $url_pic."/img_6.jpg");
	}
	if(is_uploaded_file($_FILES["filename_7"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_7"]["tmp_name"], $url_pic."/img_7.jpg");
	}
	if(is_uploaded_file($_FILES["filename_8"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_8"]["tmp_name"], $url_pic."/img_8.jpg");
	}
	if(is_uploaded_file($_FILES["filename_9"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_9"]["tmp_name"], $url_pic."/img_9.jpg");
	}
	if(is_uploaded_file($_FILES["filename_10"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_10"]["tmp_name"], $url_pic."/img_10.jpg");
	}
}
//if(@$_POST["post_vk"] == 1) require_once('vk.php');

?>


<br><br>
<?php
if (!empty($_POST['datetime_del'])){
	
	$sel_2 = $_POST['datetime_del'];

$delete = "DELETE FROM $Name_database.$table WHERE datetime = '$sel_2'";
$res = mysqli_query($link, $delete);
exit;
}

?>

<br>

<?php
if (!empty($_POST['datetime_re'])){
	
$sel_1 = $_POST['datetime_re'];

$select = "SELECT * FROM $Name_database.$table WHERE datetime = '$sel_1' ";
$res = mysqli_query($link, $select);

	$row = mysqli_fetch_array($res);
	
	$datetime = $row['datetime'];
    $id = $row['id'];
    $url = $row['url'];
    $comments = $row['comments'];
	$teme = $row['teme'];
	$chpu_url_switch = 0;
	$description = $row['description'];
	$razdel = $row["razdel"];
	$text = $row["text"];
	$keys = $row["keys"];
    $url_ext = $row["url_ext"];
    $url_frame = $row["url_frame"];
    $url_int = $row["url_int"];
    $teme_int = $row["teme_int"];
	$post_vk = 0;
	$text_re = 1;

} else {
	$datetime = date("Y-m-d H:i:s");
    $id = time();
	$datetime_mass_1 = explode ( ' ', $datetime);
	$datetime_mass_2 = explode ( '-', $datetime_mass_1[0]);
	$year = $datetime_mass_2[0];
	$month = $datetime_mass_2[1];
	$day = $datetime_mass_2[2];
    $url = '/news/'.$year.'/'.$month.'/'.$day.'/'.$id.'/';
	$chpu_url_switch = 1;
    $comments = 0;
	$teme = 'Тема';
	$description = 'Описание';
	$razdel = '';
	$text = 'Ранее мы сообщали, что &lt;a target="_blank" href="\news\...\"&gt;&lt;/a&gt;';
	$keys = 'НОВОСТИ БЕЛАРУСИ, ХОЛОДНАЯ ВОЙНА, УКРАИНА, ПОЛИТИЧЕСКИЙ ЮМОР, ЭКОНОМИКА, ИСТОРИЯ, МЕМЫ, КАРИКАТУРЫ, СТУДЕНТЫ, 
	СИРИЯ, ПОЛЬША, НОВОРОССИЯ, ПРИБАЛТИКА, АРМИЯ, РЕЛИГИЯ, НАУКА, АГЕНТЫ ЗАПАДА';
	$url_ext = 'https://by-by.info/news';
	$url_frame = '';
	$url_int = '/news';
	$teme_int = 'Другие новости по этой теме.';
	$post_vk = 1;
	$text_re = 0;
}
?>

<h1>Панель администратора для добавления статей</h1>
<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo $nomer_url; ?>/">
        <textarea style="width:500px; height:50px; border: 1px solid #cccccc;" name="teme" type="text" ><?php echo $teme; ?></textarea><br>
		<textarea style="width:600px; height:50px; border: 1px solid #cccccc;" 
		name="description" type="text" ><?php echo $description; ?></textarea><br>
<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="url_ext" type="text" ><?php echo $url_ext ?></textarea><br><br>
<p>&lt;a target="_blank" href="\news\...\"&gt;&lt;/a&gt;</p>
<?php 
echo '&lt;/p&gt;&lt;img_2img&gt;&lt;p&gt;';?><br>
<?php
echo '&lt;/p&gt;&lt;h2&gt;&lt;/h2&gt;&lt;img_2img&gt;&lt;p&gt;';?><br>
<?php
echo '&lt;/p&gt;&lt;h2&gt;&lt;/h2&gt;&lt;p&gt;';?><br>

		<textarea style="width:800px; height:300px; border: 1px solid #cccccc;" name="text" type="text" ><?php echo $text ?></textarea><br>
<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url_frame" type="text" ><?php echo $url_frame ?></textarea><br>
<textarea style="width:600px; height:100px; border: 1px solid #cccccc;" name="teme_int" type="text" ><?php echo $teme_int ?></textarea><br>
<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url_int" type="text" ><?php echo $url_int ?></textarea><br>
		<textarea style="width:500px; height:50px; border: 1px solid #cccccc;" name="keys" type="text" ><?php echo $keys ?></textarea><br>
		<input type="hidden" name="chpu_url_switch" value="<?php echo $chpu_url_switch; ?>">
		
		<select style="width:300px; height:30px; border: 1px solid #cccccc;" name="razdel" type="text">
  <option <?php if ($razdel == 'news_latest') echo "selected"; ?> value="news_latest">Обычные новости</option>
  <option <?php if ($razdel == 'header') echo "selected"; ?> value="header">Шапка (3)</option>
   <option <?php if ($razdel == 'topnews') echo "selected"; ?> value="topnews">Главная (1)</option>
   <option <?php if ($razdel == 'toplist') echo "selected"; ?> value="toplist">Топ (4)</option>
   <option <?php if ($razdel == 'l-sidebar') echo "selected"; ?> value="l-sidebar">Мнение (4)</option>
</select><br><br>
<textarea style="width:200px; height:30px; border: 1px solid #cccccc;" 
		name="datetime" type="text" ><?php echo $datetime; ?></textarea><br>
		<textarea 	 name="id" type="text" ><?php echo $id; ?></textarea><br>
	<p>belnews coldwar polithumor helpstud caricatures bestmemes history agents economy ancientukri</p><br>
		<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url" type="text" ><?php echo $url; ?></textarea><br>
        <p>Добавить картинки (360х230, jpg, Главная)</p>
		<input type="hidden" name="MAX_FILE_SIZE" value="1500000">
        <input type="file" name="filename"><br><br>

		<input type="file" name="filename_2"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_2" type="text" >пусто</textarea><br><br>
		<input type="file" name="filename_3"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_3" type="text" >пусто</textarea><br><br>
		<input type="file" name="filename_4"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_4" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_5"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_5" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_6"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_6" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_7"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_7" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_8"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_8" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_9"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_9" type="text" >пусто</textarea><br><br>
	<input type="file" name="filename_10"><br>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="pic_alt_10" type="text" >пусто</textarea><br><br>
	<input type="hidden" name="post_vk" value="<?php echo $post_vk; ?>">
		<input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
		<br><br>
</form>

<?php if($text_re == 1) exit; ?>