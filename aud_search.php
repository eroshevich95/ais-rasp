<!doctype html>
<html lang="ru">
  <head>
      <?php include "sh.php"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>АИС - Расписание v2.0</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </head>
    
    
    
    
    
  <body>
      <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark sticky-top" data-bs-theme="dark">
          <div class="container-fluid">
              <a class="navbar-brand" href="/index.php">АИС - Расписание v2.0</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                          <a class="nav-link" aria-current="page" href="/index.php">Главная</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link active" href="aud_search.php">Расписание по аудиториям</a>
                      </li>
                       <li class="nav-item">
                          <a class="nav-link" href="prepod_search.php">Расписание по преподавателям</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="group_search.php">Расписание по группам</a>
                      </li>
                  </ul>
                  <form class="d-flex" role="search" method="get" action="search.php">
                      <input class="form-control me-2" name="search" type="search" placeholder="&#128270; Введите запрос" aria-label="Поиск">
                      <button class="btn btn btn-success" type="submit">Поиск</button>
                  </form>
              </div>
          </div>
      </nav>
      
      
      
      
      <div class="container">
          <div class="row">
          <main class="col">
              <div class="card"></div>
              </main>
          </div>
          <div class="row align-items-center">
              <main class="col">
                  <div class="card">
                      <h5 class="card-header">Поиск по аудиториям</h5>
                      <div class="card-body">
                          <form action="" method="get">
                              <div class="mb-3">
                              <input class="form-control me-2" name="aud" type="search" placeholder="&#128270; Введите номер аудитории" aria-label="Поиск">
                              </div>
                              <div class="d-grid gap-2">
                                  <button class="btn btn-success" type="submit">Поиск</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </main>
          </div> 
<?php
if(isset($_GET['aud']))
{
          $api_address = "https://portal.kuzstu.ru/api/classroom_schedule?classroom=".$_GET['aud'];
   
          ?>
          <div class="row">
              <main class="col">
                  
                  <div class="card">
                      <h5 class="card-header">&#128195; Расписание занятий в аудитории <b><?php echo $_GET['aud']; ?></b></h5>
                      
                  </div>
                  <?php rasp($api_address);?>
                  
             
              
              </main>
          </div>
          
          <?php } ?>
      </div>
      
      
    
    
            <div class="card">
                      <h5 class="card-header"></h5>
                      <div class="card-body">
          </div>
          </div>
      </div>
      
      
     <?php include "footer.php"; ?>
  </body>
</html>
<?php
function num($num)
{
    if($num == 1){return "1️⃣ <b>.::. &#9200;9:00-10:30</b>";}
    if($num == 2){return "2️⃣ <b>.::. &#9200;10:50-12:20</b>";}
    if($num == 3){return "3️⃣ <b>.::. &#9200;13:20-14:50</b>";}
    if($num == 4){return "4️⃣ <b>.::. &#9200;15:10-16:40</b>";}
    if($num == 5){return "5️⃣ <b>.::. &#9200;17:00-18:30</b>";}
    if($num == 6){return "6️⃣ <b>.::. &#9200;18:50-20:20</b>";}
}

function rasp($api_address)
{
     $day = array(
	   '---',
	   'Понедельник',
	   'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота',
        );
    
    //$api_address=$api_address;
    $json_border = file_get_contents($api_address);
    if ($json_border != NULL)
    {
        $border_obj = json_decode($json_border,true);
    }
    else
    {
        $border_obj = array("FATAL", "API is not responding");
    }
    $border_obj = json_decode($json_border,true);
    //var_dump($border_obj);
    $lastdate="0";
    $flag=1;
    for ($n = 0; $n < count($border_obj); $n++) 
    {
        if($border_obj[$n]["date_lesson"]>=date('Y-m-d'))
        {
            if($lastdate==$border_obj[$n]["date_lesson"])
            {$flag=0;}
            if($lastdate!=$border_obj[$n]["date_lesson"])
            {
                if($flag==0)
                {
                    echo "
                        </div>
                        </div>";}
                echo"
                                <div class='card text-bg-secondary mb-3'>
                      <div class='card-header'><b>&#128198;".$day[$border_obj[$n]["day_number"]]." | ".$border_obj[$n]["date_lesson"]."</b></div>
                      <div class='card-body'>
                   ";
              
                $lastdate=$border_obj[$n]["date_lesson"];
                $flag=1;
            }
    
            echo"

                      
                          <h5 class='card-title'>".num($border_obj[$n]["lesson_number"])."</h5>
                          <p class='card-text'>". $border_obj[$n]["type"]." ".$border_obj[$n]["subject"]."</p>
                          <p class='card-text'>
                          <a class='navbar-brand' href='prepodrasp.php?id_prepod=".$border_obj[$n]["teacher_id"]."&fio=".$border_obj[$n]["teacher_name"]."'>&#128104;&#8205;&#127979 ".$border_obj[$n]["teacher_name"]."</a>
                          </p>
                          <p class='card-text'>
                           <a class='navbar-brand' href='grouprasp.php?dept_id=".$border_obj[$n]["education_group_id"]."&name=".$border_obj[$n]["education_group_name"]."'>".$border_obj[$n]["education_group_name"]."</a> <i>под.</i>".$border_obj[$n]["subgroup"]."
                          </p>
                      
            ";
            

           

           
           // echo "--------------------------------------<br>\r\n"  ;
        }
        
       // return "1";
    }
    
    
}
    ?>
