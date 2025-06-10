<?php
include "header.php"
?>
  <div class="offcanvas-body">
    <div>
      Я не закроюсь, если вы нажмете вне меня.
    </div>
  </div>
</div>
    
    
    
    
    
    
 <!-- Основная разметка страницы -->
    <div class="container">
              
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/my.php">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Личный кабинет</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="img/f1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ерошевич Кирилл Владимирович</h5>
                        <p class="card-text">Преподаватель</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="kourss.php" class="card-link">Мои курсы</a></li>
                        <li class="list-group-item"><a href="user_info.php" class="card-link">Личные данные</a></li>
                        <li class="list-group-item"><a href="settings.php" class="card-link">Настройки</a></li>
                    </ul>
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalmess">Сообщение</button>
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Контакты</button>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!--Всплывающее окно контактная информация-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Контакты</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <p><b>Аудитория:</b> 5200</p>
        <p><b>E-mail:</b> www@gmail.com</p>
        <p><b>Телефон:</b> +7-904-376-8880</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<!--Всплывающее окно сообщение-->
    <div class="modal fade" id="exampleModalmess" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Сообщение</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
          <form action="send_mess.php" method="post">
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Сообщение</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<?php
include "footer.php"
?>