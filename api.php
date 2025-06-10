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
                          <a class="btn btn-outline-success" aria-current="page" href="/api.php">API</a>
                      </li>
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
                      <div class="card-header">API</div>
                      <div class="card-body">
                          <h5 class="card-title">Требования к API</h5>
                          <p class="card-text">
                              <b>АИС "Расписание"</b> выполняет запрос к Вашему API и получает ответ в формате Json.<br>
                              Все данные должны выгружаться в кодировке "UTF-8"</p>
                          <p class="card-text">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalAud">Вывод расписания в аудитории</button><br>
                          </p>
                          <p class="card-text">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalPred">Вывод преподавателей</button><br>
                          </p>
                          <p class="card-text">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalRaspPred">Вывод расписания преподавателя</button><br>
                          </p>
                          <p class="card-text">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalGr">Вывод учебных групп</button><br>
                          </p>
                          <p class="card-text">
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ModalRaspGr">Вывод расписания групп</button><br>
                          </p>
                      </div>
                  </div>
                  
                  
                 
              </main>
          </div>
      </div>
      
      <!--Вывод расписания в аудитории-->
      <div class="modal fade" id="ModalAud" tabindex="-1" aria-labelledby="ModalAud" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вывод расписания в аудитории</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div class="modal-body">
                      <p><b>Адрес запроса:</b> /api/classroom_schedule?classroom={номер аудитории}</p>
                      <p><b>Структура ответа:</b> <br>
                          [<br>
                          {<br>
                          "id": "номер занятия",<br>
                          "education_group_name": "Учебная группа",<br>
                          "education_group_id": "Код учебной группы",<br>
                          "day_number": "Номер дня недели",<br>
                          "lesson_number": "Номер занятия",<br>
                          "place": "аудитория",<br>
                          "subgroup": "Подгруппа",<br>
                          "teacher_id": "Код преподавателя",<br>
                          "teacher_name": "Фио преподавателя",<br>
                          "subject": "Название предмета",<br>
                          "type": "Тип занятия(лекция, лабораторная...)",<br>
                          "date_lesson": "Дата занятия"<br>
                          },<br>
                          {<br>
                          "id": "номер занятия",<br>
                          "education_group_name": "Учебная группа",<br>
                          "education_group_id": "Код учебной группы",<br>
                          "day_number": "Номер дня недели",<br>
                          "lesson_number": "Номер занятия",<br>
                          "place": "аудитория",<br>
                          "subgroup": "Подгруппа",<br>
                          "teacher_id": "Код преподавателя",<br>
                          "teacher_name": "Фио преподавателя",<br>
                          "subject": "Название предмета",<br>
                          "type": "Тип занятия(лекция, лабораторная...)",<br>
                          "date_lesson": "Дата занятия"<br>
                          }<br>
                          ]<br>
                      <p>И так далее.  Выгрузка моджет быть как на несколько дней, так и на более долгий период. Оптимально на 2-3 недели. </p>        
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  </div>
              </div>
          </div>
      </div>
      <!--Вывод Преподавателей-->
      <div class="modal fade" id="ModalPred" tabindex="-1" aria-labelledby="ModalPred" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вывод преподавателей</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div class="modal-body">
                      <p><b>Адрес запроса:</b>  /api/teachers?teacher={search_string}</p>
                      <p><b>{search_string}</b> - строка для поиска(Фамилия, Имя, Фамилия и имя)</p>
                      <p><b>Вывод:</b> Все совпадения по строке поиска.</p>
                      <p><b>Структура ответа:</b> <br>
                          [<br>
                          {<br>
                          "person_id":"Код преподавателя",<br>
                          "name":"ФИО преподавателя",<br>
                          },<br>
                          {<br>
                          ...<br>
                          }<br>
                          ]<br>
                             
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  </div>
              </div>
          </div>
      </div>      
      <!--Вывод расписания преподавателя-->
      <div class="modal fade" id="ModalRaspPred" tabindex="-1" aria-labelledby="ModalRaspPred" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вывод расписания преподавателя</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div class="modal-body">
                      <p><b>Адрес запроса:</b> /api/teacher_schedule?teacher_id={код преподавателя}</p>
                      <p><b>Структура ответа:</b> <br>
                          [<br>
                          {<br>
                          "id":"Код занятия",   <br>
                          "education_group_name":"Группа",<br>
                          "education_group_id":"Код группы",<br>
                          "day_number":"Номер дня недели",<br>
                          "lesson_number":"Номер занятия",<br>
                          "place":"Номер аудитории",<br>
                          "subgroup":"Номер подгруппы",<br>
                          "subject":"Название предмета",<br>
                          "type":"Тип занятия(лекция, лабораторная...)",<br>
                          "date_lesson":"Дата занятия"<br>
                          },<br>
                          {<br>
                          ...<br>
                          }<br>
                          ]<br>
                      <p>И так далее.  Выгрузка моджет быть как на несколько дней, так и на более долгий период. Оптимально на 2-3 недели. </p>        
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  </div>
              </div>
          </div>
      </div>      
<!--Вывод групп-->
      <div class="modal fade" id="ModalGr" tabindex="-1" aria-labelledby="ModalGr" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вывод групп</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div class="modal-body">
                      <p><b>Адрес запроса:</b>   /api/group?group={search_string}</p>
                      <p><b>{search_string}</b> - строка для поиска(полное наименование группы или часть наименования)</p>
                      <p><b>Вывод:</b> Все совпадения по строке поиска.</p>
                      <p><b>Структура ответа:</b> <br>
                          [<br>
                          {<br>
                          "dept_id":"Код группы",<br>
                          "name":"Название группы",<br>
                          },<br>
                          {<br>
                          ...<br>
                          }<br>
                          ]<br>
                             
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                  </div>
              </div>
          </div>
      </div>          
      
      
      <!--Вывод расписания Группы-->
      <div class="modal fade" id="ModalRaspGr" tabindex="-1" aria-labelledby="ModalRaspGr" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Вывод расписания группы</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                  </div>
                  <div class="modal-body">
                      <p><b>Адрес запроса:</b> /api/student_schedule?group_id={Код группы}</p>
                      <p><b>Структура ответа:</b> <br>
                          [<br>
                          {<br>
                          "id":"Код занятия",<br>
                          "education_group_name":"Название группы",<br>
                          "education_group_id":"Код группы",<br>
                          "day_number":"Номер дня недели",<br>
                          "lesson_number":"Номер занятия",<br>
                          "place":"Номер Аудитории",<br>
                          "subgroup":"Подгруппа",<br>
                          "teacher_id":"Код преподавателя",<br>
                          "teacher_name":"ФИО преподавателя",<br>
                          "subject":"Название предмета",<br>
                          "type":"Тип занятия(лекция, лабораторная...)",<br>
                          "date_lesson":"Дата занятия"<br>
                          },<br>
                          {<br>
                          ...<br>
                          }<br>
                          ]<br>
                      <p>И так далее.  Выгрузка моджет быть как на несколько дней, так и на более долгий период. Оптимально на 2-3 недели. </p>        
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