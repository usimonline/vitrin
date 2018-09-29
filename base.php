<?php

$link = mysqli_connect(
	$name_server,
	$name_user,
	$password,
	$Name_database);
if (!$link) {
	printf("Ошибка в базе данных: %s\n", mysqli_connect_error());
	exit;
}

$table_users ='users';

$table_comments ='comments';

$table ='news';

