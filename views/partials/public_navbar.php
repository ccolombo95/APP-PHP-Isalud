<?php

use App\PostCollection;
$bestOfCollections = PostCollection::getBestCollections();
?>

<header>
  <ion-icon name="menu-sharp" class="menu-icon"></ion-icon>
  <div class="nav-overlay"></div>

  <a href="<?php url('/'); ?>" class="logo-wrapper td-none">
    <div><img src="<?php echo ASSETS_URL . '/images/imgfilled.png'; ?>" width="70rem" /></div>
  </a>
  <nav>
    <div class="search-item">
      <span class="search-icon" role="button">
        <ion-icon name="search-outline" ></ion-icon>
      </span>
      <form action="<?php url("/posts"); ?>" method="GET" class="header-search-form hide">
        <input type="text" name="search" placeholder="Buscar"
          class="input-control input-control-sm search-input">
      </form>
    </div>
    <ul class="navmenu">
      <li class="navitem"><a href="<?php url("/"); ?>">Inicio</a></li>
      <?php if (!empty($this->topics)): ?>
        <li class="navitem category"><a href="#">
          Categorías
          <ion-icon name="chevron-down-outline" class="chevron-down"></ion-icon></a>
          <ul class="dropdown">
            <li><a href="<?php url("/posts"); ?>">Todos</a></li>
            <li><?php foreach ($this->topics as $topic): ?>
              <a href="<?php url("/topics/" . $topic['slug']); ?>"><?php echo $topic['name']; ?></a>
              <?php endforeach;?>
            </li>
          </ul>
        </li>
      <?php endif;?>
      <?php if (isset($_SESSION['id'])): ?>
        <li class="navitem">
          <?php $avatarUrl = !empty($_SESSION['image']) ? $_SESSION['image'] : 'avatar.jpg';?>
          <a href="#">
            <img src="<?php echo ASSETS_URL . '/images/avatar/' . $avatarUrl; ?>" alt="" class="user-icon">
            <span><?php echo $_SESSION['username']; ?></span>
            <ion-icon name="chevron-down-outline" class="chevron-down"></ion-icon>
          </a>
          <ul class="dropdown">
          <?php if (isset($_SESSION['role_id']) && !empty($_SESSION['role_id'])): ?>
            <li><a href="<?php url("/dashboard"); ?>">Dashboard</a></li>
          <?php endif;?>
            <li><a href="<?php url("/logout"); ?>">Logout</a></li>
          </ul>
        </li>
      <?php else: ?>
        <li class="navitem"><a href="<?php url("/login"); ?>">Login</a></li>
      <?php endif;?>

    </ul>
  </nav>
</header>
<?php if (!empty($this->topics)): ?>
  <section class="nav-section topics-container-nav">
    <div class="topics-nav">
      <a href="<?php url("/posts"); ?>">Todos</a>
      <?php foreach ($this->topics as $topic): ?>
        <a href="<?php url("/topics/" . $topic['slug']); ?>"><?php echo $topic['name']; ?></a>
      <?php endforeach;?>
    </div>
  </section>
<?php endif;?>

