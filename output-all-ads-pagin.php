<?php
// вывод категорий
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
$cat_list = ""; // список категорий
if( !isset($_GET['cat']) ) {$cat_link = 1;}
else {$cat_link = $_GET['cat'];}

while ( $row = mysqli_fetch_assoc($result) ) {
	if( $cat_link == $row['id_cat']) {
		$cat_active = ' class="active-link"';
	}else{ $cat_active = ''; }
 $cat_list .=  '<li' . $cat_active . '><a href="?page=look&cat=' . $row['id_cat'] . '">' . $row['name_cat'] . '</a></li>';
}

// пагинация
$sql = "SELECT COUNT(*) as count FROM ads WHERE id_categories = '$cat_link'";
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
$start = ($current_page - 1) * $rows_per_page; // насальная запись в БД
$sql = "SELECT ads.name, ads.title, ads.text, ads.priority, ads.photo, ads.price, ads.time, categories.name_cat, regions.name_region FROM ads, categories, regions WHERE ads.id_categories = '$cat_link' AND categories.id_cat = '$cat_link' AND ads.id_regions = regions.id_region ORDER BY priority  DESC LIMIT $start, $rows_per_page";
$result = mysqli_query($conn, $sql);
// формирование контента
while ( $row = mysqli_fetch_assoc($result) ) {
$ads_content .=  '<h5 class="bottom-line1 center">' . $row["title"] . '</h5><p class="bottom-line1">Категория: ' . $row["name_cat"] . ' | Регион: ' . $row["name_region"] . '</p><p class="bottom-line1">Автор: ' . $row["name"] . ' | Цена: ' . $row["price"] . ' руб' . ' | Дата публикации: ' . $row["time"] . '</p><div class="bottom-line2"><p class="ads-photo">' . 'ФОТО' . '</p><p class="ads-text">' .  $row["text"] . '</p></div>';
}
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

 
 













