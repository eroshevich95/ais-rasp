<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>АИС ЭО ВУЗ</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-utilities.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">АИС ЭО ВУЗ</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Образовательная организация</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Решение проблем</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="error.php">Ошибка в работе портала</a></li>
                            <li><a class="dropdown-item" href="inter.php">Получить доступ</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="contact.php">Обратная связь</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    
    
    
    
    
 <!-- Основная разметка страницы -->
    <div class="container">
        <div class="row align-items-center">
                    <main class="col">
                <img src="img/img.PNG" class="rounded mx-auto d-block" alt="...">
            </main>
        </div>
        <div class="row">  
        <main class="col">
            <!-- Основной контент -->
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Логин</b></label>
                    <input type="text" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ваш логин в системе</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><b>Пароль</b></label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
                    <div id="emailHelp" class="form-text">Ваш пароль в системе</div>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Вход</button>
                </div>
            </form>
        </main>
        </div> 
    </div>
    
    
<nav class="navbar navbar-expand-lg bg-primary fixed-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">АИС ЭО ВУЗ</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Образовательная организация</a>
                    </li>
                </ul>
                <a class="navbar-brand" href="/">АИС ЭО ВУЗ</a>
            </div>
        </div>
    </nav>
    
</body>
</html>