<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-light shadow">
  <div class="container col-md-12">
    <a style="font-family:fantasy; "  class="navbar-brand text-dark fw-bold fs-4" href="index.php">THRIFTED.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-black  " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="categories.php">Collections</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-black " href="cart.php">Cart</a>
        </li>
       
        <?php if(isset($_SESSION['auth'])) { ?>
            <li class="nav-item dropdown">
            <a class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['name'];?>
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
            </ul>
            </li>
                <?php    }
                else { ?>
                <li class="nav-item">
                <a class="nav-link text-black" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-black" href="login.php">Login</a>
                </li>
                <?php  }
                ?>
  
      </ul>
    </div>
  </div>
</nav>