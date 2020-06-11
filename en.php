<!DOCTYPE html>
<html lang="en">
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
    <?php require_once "Content/EN/header.php"?>
  </header>
  <body style='background: url("images/background.jpg") center;'></body>
    <div class="container" id="home">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron pt-4 mt-5" style="background-color: rgba(200, 215, 240, 0.5);">
            <h1 class="text-center" style="color: rgb(35, 55, 75); 
            text-shadow: 2px 2px 3px #FFFFFF;">Welcome to world of cloud rendering</h1>
            <p class="text-center py-2">
              Not everyone can afford expensive equipment and provide themselves 
              with powerful computing resources.
              <br>That's why we offer a <u>free</u> cloud service that solves the main 
              headache of all videographers, designers and planners-project rendering!
            </p>
            <img src="images/banner.jpg" alt="" class="img-fluid img-thumbnail">
            <p class="text-left">
              <h5 id="start">We offer:</h5> 
              <ul>
                <li>Fast and very simple rendering in two clicks</li>
                <li>Large selection of supported project formats video and 3d graphics</li>
                <li>Free use of the online service</li>
                <li>VIP application with special conditions</li>
              </ul>
            </p>
            <div class="row justify-content-center">
              <div class="col-auto">
                <p><a class="btn btn-success btn-lg text-white" href="#" role="button">Start free</a></p>
              </div>
              <div class="col-auto">
                <p><a class="btn btn-primary btn-lg text-white" data-toggle="modal" 
                data-target="#logForm" role="button">Log in</a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="text-center col-md-6 col-12 mb-4">
          <h3>First time with us?</h3>
          <p>Read our tutorials and visit "Get start" and "FAQ" pages</p>
          <a class="btn btn-info btn-lg" href="#" role="button">Tutorials</a>
        </div>
        <div class="text-center col-md-6 col-12 mb-4">
          <h3>Any problems?</h3>
          <p>Contact our support team. We will help you</p>
          <a class="btn btn-warning btn-lg" href="#" role="button">Support</a>
        </div>
      </div>
    </div>
    <hr>
<section>
  <h2 class="text-center">Video Tutorial</h2>
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
          <h2>Video render</h2>
          <p>We've made video rendering as easy and convenient as ever.<br>
            Supported modern versions of products such as 
            Adobe after effects, Premiere pro, Sony vegas, Corel VideoStudio Pro and many other
          </p>
        </div>
        <div class="col-md-6 col-12">
          <h2>3D render</h2>
          <p>
            We are constantly developing and updating our product, 
            expanding its capabilities every day.
            Supported next new 3d project formats:
            Autodesk Autocad, Revit, Maya, 3ds max; Blender and Cinema 4d
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
              <h5 class="card-title">Upgrade</h5>
              <p class="card-text">Added support for Adobe After effects projects CC version 2020</p>
              <a href="#" class="btn btn-primary">Learn more</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/3ds_max.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">New feature</h5>
              <p class="card-text">V-ray plugin rendering for 3ds max version 4.30 is now available</p>
              <a href="#" class="btn btn-primary">Learn more</a>
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
              <h2 class="text-center">Pricing Table</h2>
              <hr>
              <div class="row no-gutters my-3">
                <div class="col-md-4 pr-2">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Basic</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      Free
                    </div>
                    <a href="#" class="list-group-item">
                      Web Render
                    </a>
                    <a href="#" class="list-group-item">
                     Processor limit: 2 CPU 
                    </a>
                    <a href="#" class="list-group-item">
                     Memory limit: 25 Gb or 10 project / Mounth 
                    </a>
                    <a href="#" class="list-group-item">
                      Basic support
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Sign-up</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Standard<br></h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      $49/mo.
                    </div>
                    <a href="#" class="list-group-item">
                      Web Render
                    </a>
                    <a href="#" class="list-group-item">
                      Processor limit: 8 CPU
                    </a>
                    <a href="#" class="list-group-item">
                     Memory limit: 1 Tb or 100 project / Mounth
                    </a>
                    <a href="#" class="list-group-item">
                      Premium support
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Buy Now</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pl-2">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Managed</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      Сontract price
                    </div>
                    <a href="#" class="list-group-item">
                      Control application panel
                    </a>
                    <a href="#" class="list-group-item">
                      Processor limit: Up to 16 CPU
                    </a>
                    <a href="#" class="list-group-item">
                      Memory limit: Up to 10 Tb / Mounth 
                    </a>
                    <a href="#" class="list-group-item">
                      24/7 Support and Consultation
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Contact Us</button>
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
          <h2>Support contact</h2>
          <address>
            <strong>RenderCloud, Inc.</strong><br>
            <abbr title="email">email:</abbr> support@rendercloud.io<br>
            <abbr title="Phone">hotline:</abbr> +7 (495) 911-12-21
          </address>
          <h4>Social</h4>
          <div class="row">
            <div class="col-2"><img src="images/facebook.png"></div>
            <div class="col-2"><a href="https://vk.com/bayan_valit"><img src="images/vk.png"></a></div>
            <div class="col-2"><img src="images/telegram.png"></div>
            <div class="col-2"><img src="images/instagram.png"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
          <h2>Feedbacks</h2>
          <ul class="list-unstyled">
            <li class="media">
              <img class="mr-3" src="images/Yulia.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">Yulia P.</h5>
                <p class="mb-0">To say that this is a Fast and convenient service is not to say anything. 
                  rendering is several times faster than on my computer! I am completely satisfied, great job.
                </p>
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="images/Michael.jpg" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">Michael R.</h5>
                <p class="mb-0">I tried several services until I found this one. This is a rare case when 
                  a free service can give a head start to many paid ones. 
                  I recommend using it.</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-12">
          <h2>About Us</h2>
          <p>Our company is engaged in technologies that make people's lives easier.
            Our goal is to give people the opportunity to do what they want-simply, 
            easily and at no extra cost. And we do it honestly, without showing 
            commercialism, but if you want to support us, you can do it at 
            <a style="white-space: nowrap;" href="#"><u>this link</u></a>=)
          </p>
        </div>
      </div>
    </div>
    <hr>
    <footer class="text-center">
      <?php require_once "Content/EN/footer.php"?>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.3.1.js"></script>
    <!-- User Script -->
    <script src="js/script.js"></script>
  </body>
</html>