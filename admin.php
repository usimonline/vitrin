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
	//if ($_POST["chpu_url_switch"] == 1 ) $url = $url.translate_into_english($_POST['teme']).'/';
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


	//$text = transform_img($text,$url,$site_url);

	$keys = $_POST["keys"];



$url_ext = $_POST["url_ext"];


	$url_ext = array( array($_POST["table_0_0"],$_POST["table_0_1"]),
		array($_POST["table_1_0"],$_POST["table_1_1"]),
		array($_POST["table_2_0"],$_POST["table_2_1"]),
		array($_POST["table_3_0"],$_POST["table_3_1"]),
		array($_POST["table_4_0"],$_POST["table_4_1"]),
		array($_POST["table_5_0"],$_POST["table_5_1"]),
		array($_POST["table_6_0"],$_POST["table_6_1"]),
		array($_POST["table_7_0"],$_POST["table_7_1"]),
		array($_POST["table_8_0"],$_POST["table_8_1"]),
		array($_POST["table_9_0"],$_POST["table_9_1"])
	);

	$url_ext = serialize($url_ext);


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
	//$url_mass = explode ( '/', $url);
	//if (!empty($url_mass[6])) $chpu_url ="/".$url_mass[6];
	//else $url_mass[6] = '';
	$url_pic = "picture/".$url;
	//@mkdir("pictures/".$url_mass[2], 0755);
	//@mkdir("pictures/".$url_mass[2]."/".$url_mass[3], 0755);
	//@mkdir("pictures/".$url_mass[2]."/".$url_mass[3]."/".$url_mass[4], 0755);
	//@mkdir("pictures/".$url_mass[2]."/".$url_mass[3]."/".$url_mass[4]."/".$id, 0755);
	@mkdir($url_pic, 0755);
    if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
    {
    // Если файл загружен успешно, перемещаем его
    // из временной директории в конечную
	// Создаем папки

			move_uploaded_file($_FILES["filename"]["tmp_name"], $url_pic."/img_1");

   // move_uploaded_file($_FILES["filename"]["tmp_name"], $url_pic."/img_1");
		//$filename_sq = $url_pic."/";
		//$filename1_sq = $filename_sq.'img_1.jpg';
		//echo $filename1;
		//$filename2_sq = $filename_sq.'img_1_2.jpg';
		//echo $filename2;
		//$image_smoll_sq =  imagecreatefromjpeg($filename1_sq);
		//imagejpeg($image_smoll_sq, $filename2_sq, 10);
    } //else echo "хуйхуйхуйхуйхуйхуйхуйхуйхуй!!!";

	if(is_uploaded_file($_FILES["filename_2"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_2"]["tmp_name"], $url_pic."/img_2");
	}
	if(is_uploaded_file($_FILES["filename_3"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_3"]["tmp_name"], $url_pic."/img_3");
	}
	if(is_uploaded_file($_FILES["filename_4"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_4"]["tmp_name"], $url_pic."/img_4");
	}
	if(is_uploaded_file($_FILES["filename_5"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_5"]["tmp_name"], $url_pic."/img_5");
	}
	if(is_uploaded_file($_FILES["filename_6"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_6"]["tmp_name"], $url_pic."/img_6");
	}
	if(is_uploaded_file($_FILES["filename_7"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_7"]["tmp_name"], $url_pic."/img_7");
	}
	if(is_uploaded_file($_FILES["filename_8"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_8"]["tmp_name"], $url_pic."/img_8");
	}
	if(is_uploaded_file($_FILES["filename_9"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_9"]["tmp_name"], $url_pic."/img_9");
	}
	if(is_uploaded_file($_FILES["filename_10"]["tmp_name"]))
	{
		move_uploaded_file($_FILES["filename_10"]["tmp_name"], $url_pic."/img_10");
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

	$url_ext = unserialize($row["url_ext"]);




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
    $url = '/vvedite_url_stranici/';
	$chpu_url_switch = 1;
    $comments = 0;
	$teme = 'Тема';
	$description = 'Описание';
	$razdel = 'Не используется';
	$text = 'Здесь текст страницы.
Пример:
&lt;text_ne_udaliati&gt;Вставка первого текста, далее картинка 2&lt;/text_ne_udaliati&gt;
&lt;img_2img&gt;
&lt;text_ne_udaliati&gt;Вставка второго текста, далее картинка 3&lt;/text_ne_udaliati&gt;
&lt;img_3img&gt;';
	$keys = 'Не используется';

	$url_ext = array( array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('',''),
		array('','')
	);

	$url_frame = 'Не используется';
	$url_int = 'Не используется';
	$teme_int = 'Не используется';
	$post_vk = 1;
	$text_re = 0;
}
?>
<br><br>
<h1>Панель добавления новых и изменения существующих страниц</h1>
<p>Для выбора существующих страниц и элементов главной страницы следуйте ниже.</p>
<form method="POST" enctype="multipart/form-data" action="<?php echo $main_name; ?>/admin/<?php echo $keys_value; ?>/<?php echo $nomer_url; ?>/">
        <textarea style="width:500px; height:50px; border: 1px solid #cccccc;" name="teme" type="text" ><?php echo $teme; ?></textarea><br>
		<textarea style="width:600px; height:50px; border: 1px solid #cccccc;" 
		name="description" type="text" ><?php echo $description; ?></textarea><br>



<p>&lt;a target="_blank" href="\news\...\"&gt;&lt;/a&gt; - вставка ссылки (скопируйте в нужное место)</p>
<?php 
echo '&lt;img_2img&gt; - вставка картинки (скопируйте в нужное место, измените цифру по номеру картинки (2-10))';
?><br>
<?php
echo '&lt;img_2img_smol&gt; - вставка маленькой картинки (скопируйте в нужное место)';
?><br>
<?php
echo '&lt;text_ne_udaliati&gt;на это место вставлять обычный текст&lt;/text_ne_udaliati&gt;<br>';
echo '&lt;perenos_stroki&gt; - для переноса строки вставить в нужное место (отделить блоки по вертикали)';
?><br>

		<textarea style="width:800px; height:300px; border: 1px solid #cccccc;" name="text" type="text" ><?php echo $text ?></textarea><br>
	<?php echo 'Пункты для таблицы цен и услуг (или дополниельные настройки главной страницы - заполнять по порядку)<br>';
	 foreach ($url_ext as $key => $value) : ?>
	<textarea style="width:300px; height:25px; border: 1px solid #cccccc;" name="table_<?php echo $key; ?>_0" type="text" ><?php echo $value[0]; ?></textarea>
		<textarea style="width:200px; height:25px; border: 1px solid #cccccc;" name="table_<?php echo $key; ?>_1" type="text" ><?php echo $value[1]; ?></textarea><br>
	<?php  endforeach; ?>


<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url_frame" type="text" ><?php echo $url_frame ?></textarea><br>
<textarea style="width:600px; height:100px; border: 1px solid #cccccc;" name="teme_int" type="text" ><?php echo $teme_int ?></textarea><br>
<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url_int" type="text" ><?php echo $url_int ?></textarea><br>
		<textarea style="width:500px; height:50px; border: 1px solid #cccccc;" name="keys" type="text" ><?php echo $keys ?></textarea><br>
		<input type="hidden" name="chpu_url_switch" value="<?php echo $chpu_url_switch; ?>">
		
		<select style="width:300px; height:30px; border: 1px solid #cccccc;" name="razdel" type="text">
  <option <?php if ($razdel == 'news_latest') echo "selected"; ?> value="news_latest">Обычный текст</option>
  <option <?php if ($razdel == 'header') echo "selected"; ?> value="header">Шапка (3)</option>
   <option <?php if ($razdel == 'topnews') echo "selected"; ?> value="topnews">Главная (1)</option>
   <option <?php if ($razdel == 'toplist') echo "selected"; ?> value="toplist">Топ (4)</option>
   <option <?php if ($razdel == 'l-sidebar') echo "selected"; ?> value="l-sidebar">Мнение (4)</option>
</select><br><br>
<textarea style="width:200px; height:30px; border: 1px solid #cccccc;" 
		name="datetime" type="text" ><?php echo $datetime; ?></textarea><br>
		<textarea 	 name="id" type="text" ><?php echo $id; ?></textarea><br>
	<p>Тут нужно ввести относительный адрес страницы в браузере  на латинице(без доменного имени, для новой страницы), слэши слева и справа не убирать</p>
		<textarea style="width:600px; height:25px; border: 1px solid #cccccc;" name="url" type="text" ><?php echo $url; ?></textarea><br>
        <p>Добавить картинки (360х230, jpg, Главная)</p>
		<input type="hidden" name="MAX_FILE_SIZE" value="1500000">
	<?php
	echo 'Картинка номер 1 для главной страницы (размер не более 1 МБ)';
	?><br>
        <input type="file" name="filename"><br>
	<?php
	echo 'Другие картинки для данной страницы (2-10)';
	?><br>
		<input type="file" name="filename_2"><br>
		<input type="file" name="filename_3"><br>
		<input type="file" name="filename_4"><br>
	<input type="file" name="filename_5"><br>
	<input type="file" name="filename_6"><br>
	<input type="file" name="filename_7"><br>
	<input type="file" name="filename_8"><br>
	<input type="file" name="filename_9"><br>
	<input type="file" name="filename_10"><br>
	<input type="hidden" name="post_vk" value="<?php echo $post_vk; ?>">
		<input style="width:200px; height:50px; border: 1px solid #cccccc;" type="submit" value="Отправить статью"/>
		<br><br>
</form>

<?php if($text_re == 1) exit; ?>