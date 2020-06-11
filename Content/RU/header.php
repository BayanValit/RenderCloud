<!--Modal-->
<div class="modal fade" id="logForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form class="signin" method="" action="" autocomplete="off">
              <input type="text" id="user" name="user" placeholder="имя" />
              <input type="password" id="pass" name="pass" placeholder="пароль" />
              <button type="submit">&#xf0da;</button>
              <p>Забыли пароль? <a href="#">Нажмите здесь</a></p>
            </form>
          </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#home">RenderCloud</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#news">Новости</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#start">Быстрый старт</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#store">Магазин</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#support">Поддержка</a>
        </li>
      </ul>
    <div class="navbar-nav dropdown mr-sm-3"><a class="nav-link dropdown-toggle" 
      href="#" id="changeLanguage" role="button" 
      data-toggle="dropdown" aria-haspopup="true" 
      aria-expanded="false">Язык</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="./ru.php">RU</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="./index.php">EN</a>
      </div>
    </div>
      <button class="btn btn-outline-success" type="button" class="btn btn-primary" 
      data-toggle="modal" data-target="#logForm">Войти</button>
    </div>
  </nav>