<div id="sidebar" class="sidebar">
  <div class="sidebar-author-mobile">
    <img src="<?php echo ASSETS_URL . '/images/avatar/' . $avatarUrl; ?>" class="avatar" alt="">
    <h3 class="author-name"></h3>
    <a href="<?php url('logout') ?>" class="logout-link">Logout</a>
  </div>
  <ul class="list-menu">
    <li>
      <a href="<?php url("/dashboard"); ?>">
        <ion-icon class="menu-icon" name="speedometer-outline"></ion-icon>
        Dashboard
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/posts"); ?>">
        <ion-icon class="menu-icon" name="reader-outline"></ion-icon>
        Publicaciones
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/topics"); ?>">
        <ion-icon class="menu-icon" name="grid-outline"></ion-icon>
        Categorias
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/users"); ?>">
        <ion-icon class="menu-icon" name="people-outline"></ion-icon>
        Usuarios
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/roles"); ?>">
        <ion-icon class="menu-icon" name="lock-closed-outline"></ion-icon>
        Roles
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/permissions"); ?>">
        <ion-icon class="menu-icon" name="key-outline"></ion-icon>
        Permisos
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
    <li>
      <a href="<?php url("/admin/collections"); ?>">
        <ion-icon class="menu-icon" name="reader-outline"></ion-icon>
        Colecciones
        <ion-icon name="chevron-forward-outline" class="chevron-forward"></ion-icon>
      </a>
    </li>
  </ul>
</div>