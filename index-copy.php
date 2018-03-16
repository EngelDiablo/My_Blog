<?php
$action = empty ($_GET ['action']) ? 'home' : $_GET['action'];
//echo $action; exit;
function menu()
{
	$output = "<a href='/index.php?action=home'>Home</a>";
	$output .= " | <a href='/index.php?action=about'>About us</a>";
	return $output;
}

switch ($action) {
	case 'home':
	echo menu();
		echo "<h1>Home</h1>";
		break;
	case 'about':
	echo menu();
		echo "<h1>About</h1>";
		break;
	default:
		echo "<h1>Нет такой страницы</h1>";
		break;
}