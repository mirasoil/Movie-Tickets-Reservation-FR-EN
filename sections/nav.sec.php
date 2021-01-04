<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">CINEMA</a>
    </div>
      
    
    
    <ul class="nav navbar-nav">
      <?php 
      if ($language == "romana") {
         
       ?>
      <li class="active"><a href="index.php">Acasa</a></li>
                
                <li class="nav-item">
                    <a href="filme.php" class="nav-link active">Filme</a>
                </li>
                <li class="nav-item">
                    <a href="schedule.php" class="nav-link active">Orar</a>
                </li>
                <li class="nav-item">
                    <a href="movies.php" class="nav-link active">Engleza</a>
                </li>
                <li class="nav-item">
                    <a href="films.php" class="nav-link active">Franceza</a>
                </li>
          <?php } ?>     

<?php 
      if ($language == "engleza") {
        
       ?>
      <li class="active"><a href="indexeng.php">Home</a></li>
               
                <li class="nav-item">
                    <a href="movies.php" class="nav-link active">Movies</a>
                </li>
                <li class="nav-item">
                    <a href="schedule.php" class="nav-link active">Schedule</a>
                </li>
                <li class="nav-item">
                    <a href="filme.php" class="nav-link active">Romanian</a>
                </li>
                
                <li class="nav-item">
                    <a href="films.php" class="nav-link active">French</a>
                </li>
          <?php } ?> 

          <?php 
      if ($language == "franceza") {
       ?>
      <li class="active"><a href="indexfr.php">Page d'accueil
</a></li>
                <li class="nav-item">
                    <a href="films.php" class="nav-link active">Films</a>
                </li>
                <li class="nav-item">
                    <a href="schedule.php" class="nav-link active">Horaire</a>
                </li>
                <li class="nav-item">
                    <a href="filme.php" class="nav-link active">Roumain</a>
                </li>
                <li class="nav-item">
                    <a href="movies.php" class="nav-link active">
                        Anglais</a>
                </li>
                
          <?php } ?> 
    </ul>
     <ul class="nav navbar-nav navbar-right">
      
      <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
          if (isset($_SESSION['accountType']) && $_SESSION['accountType'] == 'admin') {
             echo '<li><a href="controlPanel.php"><span "></span> Control Panel</a></li>';//control panel apare doar daca esti admin
          }
        }
      if ($language == "romana") {
         
      
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
          
          echo '
          <li><a href="cos.php"> Cos</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';//apare doar daca esti logat
      }else {
        echo '<li><a href="registration.html"><span class="glyphicon glyphicon-user"></span>Inregistrare</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logare</a></li>'; //apar in orice alt caz
      }

      } ?>

      <?php 
      if ($language == "engleza") {
         
      
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
          
          echo '
          <li><a href="cos.php">Cart</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';//apare doar daca esti logat
      }else {
        echo '<li><a href="registration.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>'; //apar in orice alt caz
      }

      } ?>

      <?php 
      if ($language == "franceza") {
         
      
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
          
          echo '
          <li><a href="cos.php"></span>Panier</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';//apare doar daca esti logat

      }else {
        echo '<li><a href="registration.html"><span class="glyphicon glyphicon-user"></span>Créer un compte</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span>Se connecter</a></li>'; //apar in orice alt caz
      }

      } ?>
    </ul>
  </div>
</nav>



