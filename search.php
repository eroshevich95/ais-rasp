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
                          <a class="nav-link active" aria-current="page" href="/index.php">Главная</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="aud_search.php">Расписание по аудиториям</a>
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
          <div class="row align-items-center">
              <main class="col">
                  <div class="card">
                      <div class="card-header">Выберите...</div>
                      <div class="card-body">
                          <h5 class="card-title">Где будем искать?</h5>
                          <div class="mb-3">
                              <p><a class="btn btn-success" href="aud_search.php?aud=<?php echo $_GET["search"];?>">Аудитории=></a></p>
                          </div>
                           <div class="d-grid gap-2">
                               <p><a class="btn btn-success" href="prepod_search.php?fio=<?php echo $_GET["search"];?>">Преподаватели=></a></p>
                              </div>
                           <div class="d-grid gap-2">
                             <p> <a class="btn btn-success" href="group_search.php?name=<?php echo $_GET["search"];?>">Группы=></a></p>
                              </div>
  </div>
</div>
              </main>
          </div> 
      </div>
      
      
    
    
      
      
      
     <?php include "footer.php"; ?>
  </body>
</html>