<?php
header("Content-Type: text/html; charset=utf-8");
//echo array_search('c', $arr);  // 2
$name="";

$arr =["","Кононов Максим Сергеевич", "Зеленский Михаил Михайлович", "Пушксрев Роман Николаевич", "Старцев Сергей Андреевич", "Гребенников Егор Александрович", "Садов Артём Вячеславович", "Кичутов  Илья  Николаевич", "Худорожков Павел Владимирович", "Акобирова Мадина Фирузовна", "Пасынков  Егор Константинович", "Быстрова Татьяна Александровна", "Кругликов Артём Павлович", "Андрухленко Дмитрий Юрьевич", "Цыганов Владимир Александрович", "Баркова Ольга Витальевна", "Бочаров Вячеслав Александрович", "Чернета Антон Дмитриевич", "Бурнышев Алексей Юрьевич", "Часовников  Артём Игоревич", "Вяльцев  Никита  Александрович", "Дударев Захар Алексеевич", "Бибик Елизавета Николаевна", "Гербель Владислав Алексеевич", "Метаева Софья Евгеньевна", "Таранова Наталья Денисовна", "Колупаева Алена Власовна", "Беляев  Вячеслав  Дмитриевич", "Тесленко Роман Денисович", "Скляров Дмитрий Вадимович", "Добренко Тимофей Сергеевич", "Солодовников Кирилл Алексеевич", "Кузнецов  Сергей Егорович", "Мкоян Александр Сергеевич", "Баталов  Максим Сергеевич", "Шакалова Ксения Сергеевна", "Халецкая Ника Денисовна", "Лаврухин Захар Алексеевич", "Куренов Алексей  Иванович", "Лидовских Павел Алексеевич", "Николенко Александр Васильевич", "Чепурных Данил Андреевич", "Азанова Виктория Александровна", "Полухин Артём Сергеевич", "Хуснудинова Анастасия Сергеевна", "Савочкин Артур Анатольевич", "Васина Софья Александровна", "Сучков Иван Павлович", "Авдонин Дмитрий Андреевич", "Проскура Кирилл Андреевич", "Баздырев Максим Захарович", "Стайно Кирилл Константинович", "Кузнецова Валерия Ивановна", "Угрюмов Степан Алексеевич", "Осипов Александр  Сергеевич", "Васильев Дмитрий Алексеевич", "Цымбаев Владислав Константинович", "Павлов Кирилл Артёмович", "Черяпкин Виктор Андреевич", "Курбатов Михаил Русланович", "Сафонов Максим Алексеевич", "Михалёв Евгений Викторович", "Солдаткин Владислав Вячеславович", "Разников Михаил Игоревич"];


$arr1 =["","maxkonononov@mail.ru", "mikhail.zel.06@gmail.com", "strange.sas@yandex.ru", "sstarcev996@gmail.com", "eg6052753@gmail.com", "artemsadov513@gmail.com", "Kichutovilia177@gmail.com", "Hudorozhkovpavel@yandex.ru", "cbord246@outlook.com", "egorpasynkov1840@gmail.com", "btana9457@gmail.com", "artemkruglikov370@gmail.com", "dimandr0804@gmail.com", "vladimirvladimir8833@gmail.com", "olya.13997@gmail.com", "tntmics@gmail.com", "antoncherneta05@gmail.com", "toyotapremka@ya.ru", "chasart2006@gmail.com", "nikita.v.al2006@gmail.com", "tverskaya-2016@mail.ru", "elizavetabibik666@gmail.com", "pin26@yandex.ru", "metaevasona@gmail.com", "taranovanatasha2000@gmail.com", "kolupaevaalena621@gmail.com", "slava28071997@gmail.com", "analytics8009@gmail.com", "sklyarovdima1234@gmail.com", "t40411304@gmail.com", "topciktopcik199@gmail.com", "Sergey.123kuz@mail.ru", "89050760356kk@gmail.com", "arhipovm010@gmail.com", "sakalovaksenia48@gmail.com", "nikahaleckaa46@gmail.com", "zlavrukhin404@gmail.com", "kurenovaleksij@gmail.com", "pavellidovskih@gmail.com", "sasanikolenko0@gmail.com", "danilcepurnyh03@gmail.com", "viktoriaazan@gmail.com", "artempoluhin50@gmail.com", "anastasiahusnudinova@yandex.ru", "timethiofa@gmail.com", "Sonja.vasina@gmail.com", "solomenny06@gmail.com", "sherronyt26@gmail.com", "lordkrazy38@gmail.com", "borrid355@gmail.com", "kirillstajno328@gmail.com", "lerak5642@gmail.com", "stepanugrumov@mail.ru", "jbltlava@vk.com", "gafigo14@gmail.com", "pv.prap@bk.ru", "pavlov26.2008@gmail.com", "zeta2535@mail.ru", "mihailkurbatov40@gmail.com", "safonov08maxim@yandex.ru", "jekmikhalev@gmail.com", "chasart2006@gmail.com", "raznik.prokaznik@mail.ru"];

$arr2 =["",22, 13, 4, 0, 0, 0, 0, 3, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 16, 6, 0, 0, 0, 0, 17, 0, 0, 16, 16, 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 7];
$res='';
$em="";
$z1='';
$z2='';
if(isset($_GET['em']))
{
$id= array_search($_GET['em'], $arr1);  // 2
$name= $arr[$id];
$res=$arr2[$id];
    $em=$_GET['em'];
    $z1='<b>ФИО</b><br>';
$z2='<b>Баллы</b><br>';
}
?>


<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Результаты областного IT-турнира по программированию 3 февраля 2025г.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
      
      <div class="container">
  <div class="row align-items-start">
    <div class="col">
     <h1>Результаты областного IT-турнира по программированию 3 февраля 2025г.</h1> 
    </div>
  </div>
</div>
      
<div class="container">
  <div class="row align-items-start">
    <div class="col">
         <form action="" method="get">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input type="email" name="em" value="<?php echo $em;?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Адрес электронной почты, указанный при регистрации на турнир!</div>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
      </div>
      </div>
    
      <div class="row align-items-start">
    <div class="col">
        
        
        
        
        <?php 
        if(isset($_GET['em']) and $id!=0)
        {
            ?>
        <div class="card text-center">      
  <div class="card-header">
    Ваш результат
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $name;?>,</h5>
    <p class="card-text">по результатам выполнения тестов вы набрали</p>
    <a class="btn btn-primary"><?php echo $res;?> из 24 баллов!</a>
  </div>
  <div class="card-footer text-body-secondary">
   По результатам системы автоматического проведения тестов кода.
  </div>
</div>
       <?php
        }?>
        
        
        
      </div>
      </div>
</div>
      
      
      
      
      
      
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>