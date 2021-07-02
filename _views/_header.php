<?php 
if(isset($_SESSION)) session_start();
// $_SESSION['devstcr'] = 'cguruprakash';
// $_SESSION['devstcrr'] = 'Administrator';
// $_SESSION['devstcrid'] = 10000;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand fw-lighter" title="😉 Youflicx" href="./index"><img src="./assets/yx-logo.svg" width="32" height="32" border="0" class="img-responsive me-1" alt="😉"/><strong class="fw-bolder">You</strong>flicx.tv</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="la la-ellipsis-v text-white"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainmenu">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="langDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Languages
          </a>
          <ul class="dropdown-menu" aria-labelledby="langDropdown">
            <li><a class="dropdown-item" href="./index?l=en">English</a></li>
            <li><a class="dropdown-item" href="./index?l=ta">Tamil</a></li>
            <li><a class="dropdown-item" href="./index?l=ta">Korean</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./index?l=ch">Chinese</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./index?t=tvshows">TV Shows</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="genreDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genres
          </a>
          <ul class="dropdown-menu" aria-labelledby="genreDropdown">
            <li><a class="dropdown-item" href="./index?g=horror">Horror</a></li>
            <li><a class="dropdown-item" href="./index?g=romantic">Romantic</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./index?g=action">Action</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#searchbar" aria-expanded="false" aria-controls="searchbar">Search</a>
        </li>
      </ul>
      <section class="d-flex me-0 side-menu">
        <?php if(!empty($_SESSION['devstcr']) && strtolower($_SESSION['devstcrr']) == 'administrator') { ?>
          <a href="./contribute" class="text-white lnk ms-0 me-1">Upload<i class="la la-cloud-upload-alt ms-1"></i></a>/
          <a href="./signout" class="text-danger lnk ms-1 me-0">Signout<i class="la la-power-off ms-1"></i></a>
        <?php } else { ?>  
        <a href="./signup" class="text-white lnk ms-0 me-1"><i class="la la-user me-0"></i>&nbsp;Create account</a>/
        <a href="./signin" class="text-white lnk ms-1 me-0">Signin</a>
        <?php } ?>
      </section>
    </div>
  </div>
</nav>