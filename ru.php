<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Render Cloud</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
    <!-- User Styles -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <header>
    <?php require_once "Content/RU/header.php"?>
  </header>
  <body style='background: url("images/background.jpg") center;'>
    <div class="container" id="home">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron pt-4 mt-5" style="background-color: rgba(200, 215, 240, 0.5);">
            <h1 class="text-center" style="color: rgb(35, 55, 75); 
            text-shadow: 2px 2px 3px #FFFFFF;">Добро пожаловать в мир облачного рендеринга</h1>
            <p class="text-center py-2">
              Не каждый человек может позволить себе дорогое оборудование 
              и обеспечить себя мощными вычислительными ресурсами. 
              <br> Поэтому мы предлагаем <u>бесплатный</u> облачный сервис, 
              решающий основную головную боль всех видеографов, 
              дизайнеров и проектировщиков - рендеринг проекта!
            </p>
            <img src="images/banner.jpg" alt="" class="img-fluid img-thumbnail">
            <p class="text-left">
              <h5 id="start">Мы предлагаем:</h5> 
              <ul>
                <li>Быстрый и простой рендеринг в пару кликов</li>
                <li>Широкую поддержку видео и 3d проектов</li>
                <li>Бесплатное услуги использования</li>
                <li>VIP приложение на специальных условиях</li>
              </ul>
            </p>
            <div class="row justify-content-center">
              <div class="col-auto">
                <p><a class="btn btn-success btn-lg text-white" href="#" role="button">Начать бесплатно</a></p>
              </div>
              <div class="col-auto">
                <p><a class="btn btn-primary btn-lg text-white" data-toggle="modal" 
                data-target="#logForm" role="button">Войти в аккаунт</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="text-center col-md-6 col-12 mb-4">
          <h3>Первый раз здесь?</h3>
          <p>Прочтите наше руководство и посетите страницы "Быстрый старт" и "ЧАВО"</p>
          <a class="btn btn-info btn-lg" href="#" role="button">Руководство</a>
        </div>
        <div class="text-center col-md-6 col-12 mb-4">
          <h3>Возникли сложности?</h3>
          <p>Свяжитесь с нашей поддержкой. Мы поможем вам</p>
          <a class="btn btn-warning btn-lg" href="#" role="button">Поддержка</a>
        </div>
      </div>
    </div>
    <hr>
<section>
  <h2 class="text-center">Видеонотация</h2>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="embed-responsive img-thumbnail embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UEzJ-Ckl7co"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <div class="container" id="news">
      <div class="row">
        <div class="col-md-6 col-12">
          <h2>Рендер видео</h2>
          <p>Мы сделали рендеринг видео простым и удобным, как никогда раньше.<br>
            Поддерживаются современные версии продуктов, таких как
            Adobe after effects, Premiere pro, Sony vegas, Corel VideoStudio Pro и многие другие
          </p>
        </div>
        <div class="col-md-6 col-12">
          <h2>Рендер 3D графики</h2>
          <p>
            Мы постоянно развиваемся и обновляем наш продукт, 
            расширяя свои возможности с каждым днем.
            Доступны следующие новые версии продуктов 3d графики:
            Autodesk Autocad, Revit, Maya, 3ds max; Blender и Cinema 4d
          </p>
        </div>
      </div>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/after_effects.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Обновление</h5>
              <p class="card-text">Добавлена поддержка Adobe After effects версии CC 2020 года</p>
              <a href="#" class="btn btn-primary">Узнать больше</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/3ds_max.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Новые возможности</h5>
              <p class="card-text">Теперь доступен плагин V-ray для 3ds max версии 4.30</p>
              <a href="#" class="btn btn-primary">Узнать больше</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="store">
      <div class="row">
        <div class="container py-sm-4">
          <div class="row">
            <div class="col-md-10 my-4 mx-auto">
              <h2 class="text-center">Тарифы</h2>
              <hr>
              <div class="row no-gutters my-3">
                <div class="col-md-4 pr-2">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Базовый</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      Бесплатно
                    </div>
                    <a href="#" class="list-group-item">
                      Облачный рендер
                    </a>
                    <a href="#" class="list-group-item">
                     Ограничение по процессорам: 2 CPU 
                    </a>
                    <a href="#" class="list-group-item">
                     Ограничение по памяти: 25 Gb или 10 проектов / месяц 
                    </a>
                    <a href="#" class="list-group-item">
                      Базовая поддержка
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Подписаться</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Стандарт<br></h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      3000 руб./мес.
                    </div>
                    <a href="#" class="list-group-item">
                      Облачный рендер
                    </a>
                    <a href="#" class="list-group-item">
                      Ограничение по процессорам: 8 CPU
                    </a>
                    <a href="#" class="list-group-item">
                      Ограничение по памяти: 1 Tb или 100 проектов / месяц
                    </a>
                    <a href="#" class="list-group-item">
                      Расширенная поддержка
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Купить сейчас</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pl-2">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Управляемый</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      Договорная цена
                    </div>
                    <a href="#" class="list-group-item">
                      Приложение для управления
                    </a>
                    <a href="#" class="list-group-item">
                      Ограничение по процессорам: до 16 CPU
                    </a>
                    <a href="#" class="list-group-item">
                      Ограничение по памяти: до 10 Tb / месяц 
                    </a>
                    <a href="#" class="list-group-item">
                      Круглосуточная поддержка
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Связаться с нами</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="container" id="support">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-md-0 mb-2">
          <h2>Поддержка</h2>
          <address>
            <strong>RenderCloud, Inc.</strong><br>
            <abbr title="email">email:</abbr> support@rendercloud.io<br>
            <abbr title="Phone">горячая линия:</abbr> +7 (495) 911-12-21
          </address>
          <h4>Мы в социальных сетях</h4>
          <div class="row">
            <div class="col-2"><img src="images/facebook.png"></div>
            <div class="col-2"><a href="https://vk.com/bayan_valit"><img src="images/vk.png"></a></div>
            <div class="col-2"><img src="images/telegram.png"></div>
            <div class="col-2"><img src="images/instagram.png"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <h2>Отзывы</h2>
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="images/Yulia.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">Юлия П.</h5>
                <p class="mb-0">Сказать, что это быстрый и удобный сервис - ничего не сказать. 
                  Рендеринг в несколько раз быстрее, чем на моем компьютере! Я полностью довольна, отличный проект.
                </p>
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="images/Michael.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">Михаил Р.</h5>
                <p class="mb-0">Я перепробовал несколько сервисов, пока не нашел этот. Это тот редкий случай, когда 
                  бесплатный сервис может дать фору многим платным. 
                  Рекомендую к использованию.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-12">
          <h2>О нас</h2>
          <p>Наша компания занимается технологиями, которые облегчают людям жизнь.
            Наша цель состоит в том, чтобы дать людям возможность делать то, что они хотят - просто, 
            легко и без каких-либо дополнительных затрат. И мы делаем это честно, без 
            меркантильных побуждений, но если вы хотите поддержать нас, вы можете сделать это, кликнув по
            <a style="white-space: nowrap;" href="#"><u>этой ссылке</u></a>=)
          </p>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <?php require_once "Content/RU/footer.php"?>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
    <!-- User Script -->
    <script src="js/script.js"></script>
  </body>
</html>