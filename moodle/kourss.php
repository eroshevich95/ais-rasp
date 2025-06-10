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
                        <li class="breadcrumb-item"><a href="/user.php">ФИО</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Курсы пользователя</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <div class="card">
                    <div class="card-header">Учебная дисциплина</div>
                    <div class="card-body">
                        <h5 class="card-title">Наименование</h5>
                        <p class="card-text">Направление подготовки</p>
                        <a href="#" class="btn btn-primary">К курсу</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Учебная дисциплина</div>
                    <div class="card-body">
                        <h5 class="card-title">Наименование</h5>
                        <p class="card-text">Направление подготовки</p>
                        <a href="#" class="btn btn-primary">К курсу</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Учебная дисциплина</div>
                    <div class="card-body">
                        <h5 class="card-title">Наименование</h5>
                        <p class="card-text">Направление подготовки</p>
                        <a href="#" class="btn btn-primary">К курсу</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php"
?>