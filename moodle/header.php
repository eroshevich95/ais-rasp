<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>АИС ЭО ВУЗ .::. Личный кабинет</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
        <button class="btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">Меню</button>
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
            <img src="img/img.PNG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">АИС ЭО ВУЗ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/my.php">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="about.php">Официальный сайт</a>
                    </li>  
                </ul>
            </div> 
            <form action="massegers.php">
            <button type="submit" class="btn btn-primary position-relative">
                Сообщения
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    5
                    <span class="visually-hidden">непрочитанные сообщения</span>
                </span>
            </button>
                </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Ерошевич Кирилл Владимирович</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="user.php">Личный кабинет</a></li>
                        <li><a class="dropdown-item" href="evaluations.php">Оценки</a></li>
                        <li><a class="dropdown-item" href="settings.php">Настройки</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="out.php">Выход</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="staticBackdropLabel">Меню</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
  </div>