<div class="container">
<h3 class="center">Посмотреть объявления</h3>

<div class="row  main ">
    <div class="col-md-3 sidebar">
    <h4 class="center">Категории</h4>
    <ul>
    <?=$cat_list?>
    </ul>
    </div>
    <div class="col-md-9  main-content">
    <h4 class="center">Объявления</h4>
    <?=$ads_content?> <!-- вывод контента -->
    </div>
</div>

<!-- Пагинация -->
<div class="row">
<nav class="center ">   
<ul class="pagination"> 
<?php if($current_page == 1) {$disabled = ' class="disabled"';} else {$disabled = '';}  ?>
<?php if($number_DB_rows == "0") {$visib1 = ' id="visib1"';} else {$visib1 = '';}  ?>
<li <?php echo $disabled . $visib1 ?> >
<a href="?page=look&cat=<?php echo $cat_link; ?>&pagin=1"><span>&laquo;</span></a>
</li>

<?php
echo $prev; 
for ($i = $pagin_start; $i <= $pagin_end; $i++){
if ($i == $current_page)  {$active = ' class="active"';} else{$active = "";}
echo "<li $active><a href=\"?page=look&cat=$cat_link&pagin=$i\">$i</a></li>";
}
echo $next;
?>

<?php if($current_page == $number_of_pages) {$disabled = ' class="disabled"';} else {$disabled = '';}  ?>
<?php if($number_DB_rows == "0") {$visib2 = ' id="visib2"';} else {$visib2 = '';}  ?>
<li <?php echo $disabled . $visib2 ?>>
    <a href="?page=look&cat=<?php echo $cat_link ?>&pagin=<?php echo $number_of_pages ?>"><span>&raquo;</span></a>
</li>

</ul>
</nav>
</div>

</div>
