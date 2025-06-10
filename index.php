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
      <meta name="author" content="Ерошевич К. В.">
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
                  <div class="card mb-3">
                      <img src="img/1.png" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">АИС "Расписание"</h5>
                          <p class="card-text">
                          <p><b>"АИС "Расписание"</b> - Автоматизированная информационная система, которая позволяет просматривать расписание занятий по аудиториям, преподавателям и группам.</p>

                          <p>На данный момент к системе <b>"АИС "Расписание"</b> подключен ФГБОУ ВО «Кузбасский государственный технический университет имени Т.Ф. Горбачева»(КузГТУ).</p>

                          <p>Заполните форму для подключения своего ВУЗа к системе <b>"АИС "Расписание"</b></p>
                          <p> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalmess">Заполнить заявку</button></p>
                      </div>
                      <p class="card-text"><small class="text-body-secondary"></small></p>
                  </div>
              </main>
          </div>
      </div>
      
      <!--Всплывающее окно сообщение-->
    <div class="modal fade" id="exampleModalmess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Подключение к <b>"АИС Расписание"</b></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
          <p>В данный момент мы работает над подключением!</p>
          <p>Попробуйте через недельку.</p>
          <p>Спасибо за понимание!</p>
          <p>А пока можете изучить <a href="api.php" class="btn btn-success">требование к API</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
    
     <div class="card">
                      <h5 class="card-header"></h5>
                      <div class="card-body">
          </div>
          </div>
      
      <?php include "footer.php"; ?>
     
  </body>
</html>