
<!--Modal-->
<div class="modal fade" id="logForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Log in</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <div class="modal-body">
            <form class="signin" method="" action="" autocomplete="off">
              <input type="text" id="user" name="user" placeholder="username" />
              <input type="password" id="pass" name="pass" placeholder="password" />
              <button type="submit">&#xf0da;</button>
              <p>forgot your password? <a href="#">click here</a></p>
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
            <a class="nav-link" href="#news">News</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#start">Get start</a>
          </li>
		      <li class="nav-item">
            <a class="nav-link" href="#store">Store App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#support">Support</a>
          </li>
        </ul>
      <div class="navbar-nav dropdown mr-sm-3"><a class="nav-link dropdown-toggle" 
        href="#" id="changeLanguage" role="button" 
        data-toggle="dropdown" aria-haspopup="true" 
        aria-expanded="false">Language</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./ru.php">RU</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./index.php">EN</a>
        </div>
      </div>
        <button class="btn btn-outline-success" type="button" class="btn btn-primary" 
        data-toggle="modal" data-target="#logForm">Log in</button>
      </div>
    </nav>