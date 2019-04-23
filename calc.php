<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>TeshKind</title>
   <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="calc.css">
 <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
      <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

</head>
<body>
  <div class="background2">
<nav>
    <div class="nav-wrapper grey darken-3">
      <div class="row">
      <div class="container">
      <a href="index.php" class="brand-logo"><img src="img/668.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons" style="margin-top:-11px">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li><a style="font-size:20px;width:100%;" href="index.php">Главная</a></li>
        <li><a style="font-size:20px;width:100%;" href="forma.php">Связаться со специалистом</a></li>
      </ul>
<ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">О нас</a></li>
        <li><a href="badges.html">помогите</a></li>
        <li><a href="forma.php"></a></li>
        
      </ul>
   </div>
    
  </nav>
<form id="price" class="price2" v-cloak method="post" style="background-color: #424242" >

<h2 class="center" style="color:white" >Каталог услуг</h2>

<ul>
<li v-for="service in services" v-on:click="toggleActive(service)" v-bind:class="{ 'active': service.active}">
{{service.name}}<span>{{service.price}}&#8381</span>
</li>
<!-- <li v-for="m3 in m3" v-bind:class="{ 'active': m3.active}"> <div class="tooltip"> {{m3.name}}<span>{{m3.qwert}}</span> <input id="parameters" type="text" v-model="m3.qwert"/> </div> </li> -->
<li v-for="Discount in Discount" v-on:keyup="countDiscoint()" v-bind:class="{ 'active': Discount.active}">
{{Discount.name}}<span>{{Discount.discount2}}%</span>
<input type="text" v-model="searchString" placeholder="Введите промокод" />
</li>
</ul>
<form  method="post" id="contactForm" data-toggle="validator" style="color:white">
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                
                <div class="input-field col m12 s12 wow fadeIn a2" data-wow-delay="0.2s">
                  <i class="material-icons prefix" style="color:white">account_circle</i>
                    <label for="name" class="h4" style="color:white">Ваше Имя</label>

                    <input type="text" name="name" style="color:white" class="form-control validate" id="name" required data-error="NEW ERROR MESSAGE" style="font-weight: 600;" >
                </div>
                <div class="input-field col m12 s12 wow fadeIn a4" data-wow-delay="0.4s">
                  <i class="material-icons prefix" style="color:white">phone</i>
                    <label for="tel" class="h4" style="color:white">Ваш номер телефона</label>
                    <input type="tel" name="tel" style="color:white" class="form-control validate" style="font-weight: 600;" id="tel"  required>                
                </div>
                <div class="input-field col m12 s12 wow fadeIn a4" data-wow-delay="0.4s">
                  <i class="material-icons prefix" style="color:white">create</i>
                    <label for="prob" class="h4" style="color:white">Опишите Вашу проблему</label>
                    <input type="text" name="prob" style="color:white" class="form-control validate" style="font-weight: 600;" id="prob"  required>                
                </div>
                
                
             
<div class="total">
 <textarea name="cena" style="border: none;
    overflow: auto;
    outline: none;

    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;

    resize: none;"  readonly >Итого: {{total()}} Rub</textarea>
</div>
<button class="btn waves-effect waves-light grey darken-4" type="submit" name="submit" value="submit"style="float: right;">Отправить
    <i class="material-icons right">send</i>
  </button>      
<?php
require_once 'contr2.php';
?>
</form></form></div></div></nav></div>


</div>
</div>
 <footer class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">TeshKind</h5>
                <p class="grey-text text-lighten-4">Ремонт цифровой техники </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Информация о нас</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">VK</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">WhatsApp</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Telegram</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright grey darken-3">
            <div class="container" style="    margin-top: -40px;">
            © 2019 Все права защищены
            </div>
          </div>
        </footer>


<script src='js/vue.min.js'></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="calc.js"></script>
</body>
</html>