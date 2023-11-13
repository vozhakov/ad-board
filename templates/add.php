<div class="container">
<h3>Подать объявление </h3>
<form enctype="multipart/form-data" method="post" name="add" action="">
 
 <div class="row">
  <div class="col-md-3">
  <label for="name">Контактное лицо</label>
  </div>
  <div class="col-md-9">
  <input  type="text" size="50" name="name" id="name" placeholder="Обязательно" value="<?=$name_to_form?>" required/>
  </div>
</div> 

 <div class="row">
  <div class="col-md-3">
  <label for="phone">Телефон </label>
  </div>
  <div class="col-md-9">
  <input  type="tel" size="50" name="phone" id="phone" placeholder="Обязательно" value="<?=$phone_to_form?>" required/>
  </div>
</div>    

<div class="row">
  <div class="col-md-3">
 <label>Выберите регион </label>
 </div>
  <div class="col-md-9">
  <select name="region" id="sel-region">
    <option  value="1">Алтайский край</option>
    <option  value="2">Амурская область</option>
    <option  value="3">Архангельская область</option>
    <option  value="4">Астраханская область</option>
    <option  value="5">Белгородская область"</option>
    <option  value="6">Брянская область</option>
    <option  value="7">Владимирская область</option>
    <option  value="8">Волгоградская область</option>
    <option  value="9">Вологодская область</option>
    <option  value="10">Воронежская область</option>
    <option  value="11">г. Москва</option>
    <option  value="12">Еврейская автономная область</option>
    <option  value="13">Другое</option>
    </select>
  </div>
</div> 

<div class="row">
  <div class="col-md-3">
  <label>Выберите категорию </label>
  </div>
    <div class="col-md-9">
    <select name="category" id="sel-cat">
    <option  value="1">Транспорт</option>
    <option  value="2">Недвижимость</option>
    <option  value="3">Личные вещи</option>
    <option  value="4">Электроника, техника</option>
    <option  value="5">Дом и сад, мебель, бытовое"</option>
    <option  value="6">Текстиль</option>
    <option  value="7">Животные</option>
    <option  value="8">Услуги и предложения</option>
    <option  value="9">Хобби, Отдых, Спорт</option>
    <option  value="10">Оборудование</option>
    <option  value="11">Строительные товары</option>
    <option  value="12">Продукты питания</option>
    <option  value="13">Другое</option>
    </select>
  </div> 
</div>

<div class="row">
  <div class="col-md-3">
 <label for="theme">Тема </label>
 </div>
  <div class="col-md-9">
  <input  type="text" size="50" name="theme" id="theme" placeholder="Обязательно"  value="" required/> максимально 80 символов
  </div>
</div>

<div class="row">
  <div class="col-md-3">
 <label for="text">Текст объявления </label>
 </div>
  <div class="col-md-9">
  <textarea  rows="8" cols="82" maxlength="3000" name="text" id="text" placeholder="Обязательно"  value="" required></textarea>
  <p>максимально 3000 символов</p>
  </div>
</div> 

<div class="row">
  <div class="col-md-3">
 <label for="price">Цена, руб </label>
 </div>
  <div class="col-md-9">
  <input  type="text" size="50" name="price" id="price"  placeholder="Обязательно"  value="" required/> только цифры
  </div>
</div>

<div class="row">
  <div class="col-md-3">
 <label>Добавить фото </label>
 </div>
  <div class="col-md-9">
  <input type="file" id="image-upload" name="image" accept="image/*,image/jpeg"/>
   </div>
</div>

<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-9">
<button type="submit"  name="submit-add" value="add" class="btn btn-primary">Подать объявление</button>
  </div> 
</div>  

</form>
</div>
