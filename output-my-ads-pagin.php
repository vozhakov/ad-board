<?php
// подъем записи
$const_time_int = 3600;
if(isset($_GET['lift'])){
$sql = "SELECT priority  FROM ads WHERE id  = '{$_GET['lift']}'";
$result = mysqli_query($conn, $sql);
$prior = mysqli_fetch_assoc($result);
$prior_time = $prior["priority"];
$prior_time_int = strtotime($prior_time);// время момента записи или подъема
$cur_time_int = time(); // текущее время
$differ_t = $cur_time_int - $prior_time_int;// время существования записи

$sql = "SELECT MAX(priority) AS max_time  FROM ads";
$result = mysqli_query($conn, $sql);
$mt = mysqli_fetch_assoc($result);
$max_time = $mt['max_time'];
$max_time_int = strtotime($max_time);
	if($differ_t >= $const_time_int){
    $new_t = $max_time_int + 3;
    $new_t = date('Y-m-d H:i:s');
    $sql= "UPDATE ads SET  	priority  = '$new_t' WHERE id = {$_GET['lift']} ";
   mysqli_query($conn, $sql);
	}
}

// пагинация
$id_user = $_SESSION['id'];
$sql = "SELECT COUNT(*) as count FROM ads WHERE id_user  = '$id_user'";
$result = mysqli_query($conn, $sql);
$arr = mysqli_fetch_assoc($result);
$number_DB_rows = $arr['count']; // количество записей в БД с категорией $cat_link
$rows_per_page = 3; // количество записей на страницу
$number_of_pages = ceil($number_DB_rows/$rows_per_page); // количество страниц
$number_pagination = 5; // количество позиций в пагинации, максимум
$number_left = floor($number_pagination/2); // количество позиций в пагинации слева
$number_right = $number_left; // количество позиций в пагинации справа
$prev = '';
$next = '';
$pagin_start = 1;
$pagin_end = $number_of_pages;
$current_page = 1;
$ads_content = "";

if( $_GET['pagin']>1 && $_GET['pagin']<=$number_of_pages) 
{  
 $current_page = $_GET['pagin'];// текущая страница пагинации из GET параметров
}

if($number_DB_rows != "0"){  // ************************

$start = ($current_page - 1) * $rows_per_page; // начальная запись в БД
$sql = "SELECT ads.id, ads.name, ads.title, ads.text, ads.priority, ads.photo, ads.price, ads.time, categories.name_cat, regions.name_region FROM ads, categories, regions WHERE id_user  = '$id_user' AND categories.id_cat = ads.id_categories AND ads.id_regions = regions.id_region ORDER BY priority  DESC LIMIT $start, $rows_per_page";
$result = mysqli_query($conn, $sql);

// формирование контента
while ( $row = mysqli_fetch_assoc($result) ) {
$note_time_int = strtotime($row["priority"]);// время момента записи или подъема
$current_time_int = time(); // текущее время
$dif_time = $current_time_int - $note_time_int;// время существования записи

if( $dif_time >= $const_time_int) {
$up_ads = ' class="up-ads"';
}else {$up_ads = ' class="btn-ads"';	    }
	
	if( isset ($_GET['pagin']) ) {
		$pag = '&pagin=' . $_GET['pagin'];
	} else { $pag = '';} 

$ads_content .=  '<h5 class="bottom-line1 center">' . $row["title"] . '</h5><p class="bottom-line1">Категория: ' . $row["name_cat"] . ' | Регион: ' . $row["name_region"] . '</p><p class="bottom-line1">Автор: ' . $row["name"] . ' | Цена: ' . $row["price"] . ' руб' . ' | Дата публикации: ' . $row["time"] . '</p><div class="bottom-line2"><p class="ads-photo">' . 'ФОТО' . '</p><p class="ads-text">' .  $row["text"] . '</p></div><div class="center bottom-line3"><a  href="?page=myadv' . $pag . '&lift=' . $row["id"] . '"><button' . $up_ads .  '>Поднять объявление</button></a></div>';
}// while ( $row = mysqli_fetch_assoc($result) )

// ограничиваем количество позиций пагинации до $number_pagination
$current_left = $current_page - 1; // текущее количество позиций слева
$current_right = $number_of_pages - $current_page; // текущее количество позиций справа

if($current_left > $number_left) {
    $prev = '...';
    $pagin_start = $current_page - $number_left;
}

if($current_right > $number_right) {
    $next = '...';
    $pagin_end = $current_page + $number_right;
}

if($number_of_pages > $number_pagination){
	if($current_left < $number_left) {
	   $pagin_end = $number_pagination;
	}
	if($current_right < $number_right) {
	   $pagin_start =$number_of_pages - $number_pagination;
	}
}else{
	$pagin_end = $number_of_pages;
	$pagin_start = 1;
	 $prev = '';
	 $next = '';	
	}



} //if($number_DB_rows != "0")
if( empty($ads_content) ) $ads_content = '<p class="bottom-line1 center">Нет объявлений</p>';

