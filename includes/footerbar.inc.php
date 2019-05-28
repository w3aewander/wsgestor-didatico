<nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-bottom">
   <div class="navbar-item">
      <div class="text-info">Usuário: <?=isset($_SESSION["nome"])?$_SESSION["nome"]:"anônimo";?></div>
   </div>
</nav>