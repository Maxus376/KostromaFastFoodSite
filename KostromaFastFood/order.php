<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оформить первый заказ</title>
</head>
<body>
    <h1>Оформление первого заказа</h1>
  <fieldset>
  <legend>контактная информация</legend>  
  <p><label for="text">Имя</label>    
  <input type="text"></p>
  <p><label for="phone number">Телефон</label>     
  <input type="phone number">
  </p>
  <p><label for="E-mail">Email</label>        
  <input type="E-mail">
  </p>
   </fieldset>
   <h1></h1>
   <fieldset>
       <legend>Персональная информация</legend>
      <p><label for="age">Возраст</label>
       <input type="number" min="1" max="100" step="1"></p>
    <p><bel for="favorite cuisine">Любимая кухня</label>
       <imput type="favorite cuisine"></p>
       <select>
           <option>Русская</option>
        <option>Татарская</option>
        <option>Итальянская </option>
       </select>  
   </fieldset>
   <h1></h1>
   <fieldset>
       <legend>Меню</legend>
       <h3>Выберите интересующее блюдо</h3>
       <p><input type="checkbox" name="pizza">Пицца</p>
       <p><input type="checkbox" name="rolls">Роллы</p>
       <p><input type="checkbox" name="shaurma">Шаурма</p>
       <p><input type="checkbox" name="burger">Бургер</p>
   </fieldset>
   <fieldset>
       <legend>Про наш ресторан</legend>
       <h3>Откуда Вы узнали про наш ресторан?</h3>
       <p><input type="radio" name="restaraunt" value="sovet">Посоветовали знакомые</p>
       <p><input type="radio" name="restaraunt" value="ads">Реклама по радио/телевизору/Интернет</p>
       <p><input type="radio" name="restaraunt" value="nearby">Видел заведение рядом с домом</p>
   </fieldset>
   <input type="submit" value="Отправить">
   <h3><a href="index.php">на главную страницу</a></h3>
</body>
</html>