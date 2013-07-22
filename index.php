<?php 
	define(BASE_URL,  'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'); 
	define(BASE_PATH, dirname(__FILE__));
	include 'Database.php'; // Call Database
	$page = $_GET['page']=="" ? "home":$_GET['page']; // set $page = get parameter page
?>
<!DOCTYPE html>
<html>
<head>
<title>Aplikasi Penilaian dengan PHP</title>
<link rel="stylesheet"href="http://yui.yahooapis.com/pure/0.2.1/pure-min.css">
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<div class="content">
<div class="header">
        <div class="pure-menu pure-menu-open pure-menu-fixed pure-menu-horizontal">
            <a href="" class="pure-menu-heading">Aplikasi Penilaian dengan PHP</a>
            <ul>
                <li class="pure-menu-selected"><a href="<?php echo BASE_URL?>">Home</a></li>
                <li><a href="<?php echo BASE_URL?>murid">Murid</a></li>
                <li><a href="<?php echo BASE_URL?>mata_pelajaran">Mata Pelajaran</a></li>
            </ul>
        </div>
    </div>
	<div class="content" style="padding-top:30px;padding-left:5%">
		<?php 
			if(file_exists($page.'.php'))
				include $page .'.php';
			else
				include '404.php';
		?>
	</div>
</div>
</body>
</html>