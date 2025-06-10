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
                        <li class="breadcrumb-item active" aria-current="page">Настройки</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
               
                   <div class="mb-3">
                       <fieldset disabled>
                       <label for="f-name" class="form-label">Фамилия</label>
                       <input type="text" class="form-control" name="f-name" placeholder="Ерошевич">
                       <div id="f-namelHelp" class="form-text">Фамилию изменять может только администратор</div>
                       </fieldset>
                   </div>
                    <div class="mb-3">
                       <fieldset disabled>
                       <label for="l-name" class="form-label">Имя</label>
                       <input type="text" class="form-control" name="l-name" placeholder="Кирилл">
                       <div id="l-namelHelp" class="form-text">Имя изменять может только администратор</div>
                       </fieldset>
                   </div>
                   <div class="mb-3">
                       <fieldset disabled>
                       <label for="fl-name" class="form-label">Отчество</label>
                       <input type="text" class="form-control" name="fl-name" placeholder="Владимиррович">
                       <div id="fl-namelHelp" class="form-text">Отчество изменять может только администратор</div>
                       </fieldset>
                   </div>
                <form action="" method="post">
                    <div class="mb-3">
                       <label for="old_pass" class="form-label">Старый пароль</label>
                       <input type="password" class="form-control" name="old_pass" placeholder="">
                       <div id="fl-namelHelp" class="form-text">Введите старый пароль</div>
                    </div>
                    <div class="mb-3">
                       <label for="new_pass" class="form-label">Новый пароль</label>
                       <input type="password" class="form-control" name="new_pass" placeholder="">
                       <div id="fl-namelHelp" class="form-text">Введите новый пароль</div>
                    </div>
                    <div class="mb-3">
                       <label for="new_pass1" class="form-label">Новый пароль</label>
                       <input type="password" class="form-control" name="new_pass1" placeholder="">
                       <div id="fl-namelHelp" class="form-text">Повторите новый пароль</div>
                    </div>
                       
                   <button type="submit" class="btn btn-primary">Изменить пароль</button>
                </form>
                
            </div>
        </div>
    </div>

<?php
include "footer.php"
?>