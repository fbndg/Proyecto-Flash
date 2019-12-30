<div class="logo">
  <a href="index.php">
   <img src="img/flashLogo.png" alt="Logotipo">
 </a>
 <p>flashtorecomputacion.com</p>
</div>

<nav class="navbar navbar-expand-sm justify-content-center ">

  <button class="navbar-toggler justify-content-center" type="button" data-toggle="collapse" data-target="#buno">
    <i class="fa fa-bars tros" aria-hidden="false"></i>
  </button>

  <div class="collapse navbar-collapse" id="buno">
    <ul class="navbar-nav">
      <li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Productos</a>
          <div class="dropdown-menu">
              <div class="dropdown-header"><a href="productos.php">Todas las categorias</a></div>
              <div class="dropdown-divider"></div>
              <form  action="productos.php" method="GET">
                <input style="display:none" class="formsd" type="text" value="Desktop" name="id">
                <input style="height: 32px;" type="submit" class="dropdown-item" value="Pc's de escritorio">
              </form>
              <form  action="productos.php" method="GET">
                <input style="display:none" class="formsd" type="text" value="Notebooks" name="id">
                <input style="height: 32px;" type="submit" class="dropdown-item" value="Notebooks">
              </form>
              <form  action="productos.php" method="GET">
                <input style="display:none" class="formsd" type="text" value="Impresoras" name="id">
                <input style="height: 32px;" type="submit" class="dropdown-item" value="Impresoras">
              </form>
          </div>
      </li>
      <li class="nav-item"><a href="faq.php" class="nav-link">Preguntas frecuentes</a></li>
      <li class="nav-item"><a href="contacto.php" class="nav-link">Contacto</a></li>
    </ul>
  </div>
  <div class="collapse navbar-collapse justify-content-end" id="buno">
    <ul class="navbar-nav">
      <?php if (!isset($_SESSION["email"])): ?>
        <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="registro.php" class="nav-link">Registro</a></li>
      <?php endif; ?>
      <?php if (isset($_SESSION["email"])): ?>
        <li class="nav-item"><a href="usuario.php" class="nav-link">Usuario</a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link">Log out</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
