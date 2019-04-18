<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <title>TeshKind</title>

 <link rel="stylesheet" href="fonts/stylesheet.css" type="text/css" charset="utf-8" />
      <link href="css/style.css" rel="stylesheet">
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


 <script src="https://api-maps.yandex.ru/2.1/?apikey=<d925b50c-a629-4e5b-bc0f-59303da74991>&lang=ru_RU" type="text/javascript">
    </script>
</head>
<body>

<nav>
    <div class="nav-wrapper">
      <div class="row">
      <div class="container">
      <a href="#" class="brand-logo"><img src="img/668.png"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse">
          <i class="material-icons" style="margin-top:-11px">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a style="font-size:20px;width:100%;" href="sass.html">О нас</a></li>
        <li><a style="font-size:20px;width:100%;" href="badges.html">Заявка на ремонт</a></li>
        <li><a style="font-size:20px;width:100%;" href="forma.php">Связаться со специалистом</a></li>
      </ul>
<ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">О нас</a></li>
        <li><a href="badges.html">помогите</a></li>
        <li><a href="forma.php"></a></li>
        
      </ul>
   </div>
    
  </nav>

<section class="losharik" style="">
<div class="container">                  
    <div class="contact-form z-depth-5 grey lighten-5 " id="contact" style="padding: 0 70px;border-radius:55px;">   
          <div class="row">                       <h2 class="center-align" style="font-size: 40px;    padding: 18px;font-family: 'Roboto Condensed', sans-serif;">Связаться со специалистом </h2>            
            <form  method="post" id="contactForm" data-toggle="validator">
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                
                <div class="input-field col m12 s12 wow fadeIn a2" data-wow-delay="0.2s">
                  <i class="material-icons prefix">account_circle</i>
                    <label for="name" class="h4">Ваше Имя</label>

                    <input type="text" name="name" class="form-control validate" id="name" required data-error="NEW ERROR MESSAGE">
                </div>
                <div class="input-field col m12 s12 wow fadeIn a4" data-wow-delay="0.4s">
                  <i class="material-icons prefix">phone</i>
                    <label for="tel" class="h4">Ваш номер телефона</label>
                    <input type="tel" name="tel" class="form-control validate" id="tel"  required>                
                </div>
                <div class="input-field col m12 s12 wow fadeIn a6" data-wow-delay="0.6s">
                  <i class="material-icons prefix">mode_edit</i>
                    <label for="message" class="h4 ">Сообщение</label>
                    <textarea id="message" name="message" class="form-control materialize-textarea validate" required></textarea>   
        
                    <button class="btn waves-effect waves-light grey darken-4" type="submit" name="submit" value="submit"style="float: right;">Отправить
    <i class="material-icons right">send</i>
  </button>      
                </div> 
            </form>                                     
        </div> 
    </div>
  </div>  
  <div style="padding: 25px;">
   </div>

</section>

<div id="map" style="width: 100%; height: 400px"></div>

<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){ 
        // Создание карты.    
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.5005, 46.41288],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 15
        });
    }
</script>



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




<script src="https://www.google.com/recaptcha/api.js?render=6LeE2J4UAAAAANd8072irunM8gzA_sta8YLYjaz3"></script>

<script>
  grecaptcha.ready(function() {
      grecaptcha.execute('6LeE2J4UAAAAANd8072irunM8gzA_sta8YLYjaz3', {action: 'homepage'}).then(function(token) {
         
      });
  });
  </script>




<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

  
<script src="js/script.js"></script>
</body>
</html>