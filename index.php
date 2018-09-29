<?php
session_start();
set_time_limit(0);
require_once("functions.php"); //бесполезная часть
require_once("requisites.php");
require_once("base.php");//просто база данных
require_once("route.php");
if (!$route) require_once("login_users.php");


?>



<!DOCTYPE html>
<html lang="ru">
<head>

  <?php
      require_once ('head.php');
  ?>

  
</head>


<body class="t-body" style="margin: 0px;">
<?php
if ($admin) require_once("admin.php");

if ($route) require_once("l-main.php");
else require_once("page.php");

  require_once ('footer.php');
  ?>

</div>

<div class="t360__progress" style="display: none;">
  <div class="t360__bar t360__barprogressfinished t360__barprogresshidden">

  </div>
</div>

<script type="text/javascript" src="./index/json.txt">

</script>

</body>
</html>