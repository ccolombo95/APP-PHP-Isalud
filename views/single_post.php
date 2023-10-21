<?php
include 'path.php';

use App\Utils;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Slick Carousel CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
    rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/admin_style.css'; ?>">
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/style.css'; ?>">

  <title><?php echo $this->post['title'] ?> | Blog</title>
</head>

<body>

  <?php include ROOT_PATH . '/views/partials/public_navbar.php';?>

  <!-- Page Banner -->
  <section class="page-banner">
    <div class="banner-container">

      <div class="left-box">

        <div class="breadcrumbs" role="navigation">
          <small>
            <a href="<?php url('/') ?>">Home</a> >
            <span>
              <a href="<?php url("/topics/" . $this->post['topic_slug']); ?>"><?php echo $this->post['topic_name']; ?></a> >
              <span>
                <span><?php echo $this->post['title']; ?></span>
              </span>
            </span>
          </small>
        </div>
        <h1 class="banner-title"><?php echo $this->post['title']; ?></h1>
        <div class="post-details">
          <div class="author-wrapper">
            <img src="<?php echo BASE_URL . '/assets/images/avatar/' . $this->post['user_image']; ?>" height="40" width="40" style="border-radius: 50%;" alt="">
            <div class="name-wrapper">
              <a
                class="simple-link"
                href="<?php url("/users/" . Utils::slugify($this->post['username'], '_', false) . "?id=" . $this->post['user_id']); ?>"><?php echo $this->post['username']; ?></a>
              <small><?php echo date_format(date_create($this->post['created_at']), 'M j') ?> &middot; <?php echo Utils::estimateReadTime($this->post['body']); ?></small>
            </div>
          </div>
          <div class="social-links">
            <span>Compartir</span>
            <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo Utils::fullUrl() ?>">
              <img src="<?php echo BASE_URL . '/assets/images/icons/facebook.jpeg' ?>" alt="">
            </a>
            <a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo Utils::fullUrl() ?>">
              <img src="<?php echo BASE_URL . '/assets/images/icons/linkedin.png' ?>" alt="">
            </a>
            <a target="_blank" href="http://twitter.com/share?text=<?php echo $this->post['title'] ?>&url=<?php echo Utils::fullUrl() ?>">
              <img src="<?php echo BASE_URL . '/assets/images/icons/twitter.png' ?>" alt="">
            </a>
          </div>
        </div>
        
      </div>

    </div>
  </section>
  <!-- // End Page Banner -->

  <!-- Page Content -->
  <div class="page-content single-page">
    
    <!-- Main Content -->
    <div class="main-content">
      <div class="main-post-wrapper">
        <div class="post-body primary-font"><?php echo html_entity_decode($this->post['body']); ?></div>

        <!-- Author Bio -->
        <div class="author-bio">
          <div class="avatar-wrapper">
            <img src="<?php echo BASE_URL . '/assets/images/avatar/' . $this->post['user_image']; ?>" class="avatar" alt="">
          </div>
          <div class="bio-wrapper">
            <a href="<?php url("/users/" . Utils::slugify($this->post['username'], '_', false) . "?id=" . $this->post['user_id']); ?>" class="simple-link">
              <h3><?php echo $this->post['username']; ?></h3>
            </a>
            <div class="primary-font"><?php echo $this->post['bio']; ?></div>
              <div class="social-links">
                <?php if (isset($this->post['instagram'])): ?>
                  <a href="<?php echo $this->post['instagram']; ?>">
                    <img src="<?php echo BASE_URL . '/assets/images/icons/instagram.png' ?>" alt="">
                  </a>
                <?php endif;?>
                <?php if (isset($this->post['linkedin'])): ?>
                  <a href="<?php echo $this->post['linkedin']; ?>">
                    <img src="<?php echo BASE_URL . '/assets/images/icons/linkedin.png' ?>" alt="">
                  </a>
                <?php endif;?>
                <?php if (isset($this->post['twitter'])): ?>
                  <a href="<?php echo $this->post['twitter']; ?>">
                    <img src="<?php echo BASE_URL . '/assets/images/icons/twitter.png' ?>" alt="">
                  </a>
                <?php endif;?>
              </div>
          </div>
        </div>
        <!-- // End Author Bio -->
      </div>
      <!-- Sidebar -->
      <div class="sidebar-single">
        <?php include ROOT_PATH . '/views/partials/public_sidebar.php';?>
      </div>
    </div>
    <!-- // End Main Content -->
  </div>
  <!-- // End Page Content -->
  <!-- Suggested Posts -->
  <?php if (!empty($this->relatedPosts)): ?>
  <div class="suggested-posts" style="width: 100%;">
    <section class="slider-container">
      <div class="slider-header">
        <h2>Recomendaciones</h2>
      </div>
      <ion-icon class="slider-arrow next-arrow" name="arrow-forward-circle-outline"></ion-icon>
      <ion-icon class="slider-arrow prev-arrow" name="arrow-back-circle-outline"></ion-icon>

      <div class="post-slider">
        <?php foreach ($this->relatedPosts as $r_post): ?>
          <article class="post-card">
            <div class="bg-image image-wrapper" style="background-image: url(<?php echo BASE_URL . '/assets/images/featured_images/' . $r_post['post_image']; ?>);"></div>
            <div class="post-info">
              <div>
                <a href="<?php url("/posts/" . $r_post['slug']); ?>" class="td-none">
                  <h3 class="post-title" style="font-weight: 600; font-size: 1.1rem;"><?php echo $r_post['title']; ?></h3>
                </a>
              </div>
              <div class="author-info">
                <div class="author">
                  <img src="<?php echo BASE_URL . '/assets/images/avatar/' . $r_post['user_image']; ?>" class="avatar" alt="">
                  <a href="<?php url("/users/" . Utils::slugify($r_post['username'], '_', false) . "?id=" . $this->post['user_id']); ?>" class="name simple-link"><?php echo $r_post['username']; ?></a>
                </div>
              </div>
            </div>
          </article>
        <?php endforeach;?>
      </div>
    </section>
  </div>
<?php endif;?>
<!-- // End Suggested Posts -->

  <!-- Page Footer -->
  <?php include ROOT_PATH . '/views/partials/footer.php';?>

  <!-- Scripts -->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Slick Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

  <script>
    $('.post-slider').each(function (index, slider) {
      $(slider).slick({
        dots: false,
        nextArrow: $(slider).siblings('.next-arrow'),
        prevArrow: $(slider).siblings('.prev-arrow'),
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
            breakpoint: 870,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          },
          {
            breakpoint: 550,
            settings: 'unslick',
          }
        ]
      });
    });
  </script>

  <!-- Custom scripts -->
  <script src="<?php echo ASSETS_URL . '/js/public.js' ?>"></script>

</body>
</html>