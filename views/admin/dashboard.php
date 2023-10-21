<?php include('path.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Styles -->
  <link rel="stylesheet" href="<?php echo ASSETS_URL . '/css/admin_style.css'; ?>">

  <title>Admin Dashboard</title>
</head>

<body>

  <?php include(ROOT_PATH . '/views/partials/admin_navbar.php'); ?>
  
  <main class="page-wrapper">
    <div class="sidebar-overlay"></div>
    <?php include(ROOT_PATH . '/views/partials/admin_sidebar.php'); ?>
    

    <!-- Page Content -->
    <div class="page-content">
      <div class="admin-container lg-box">
          <h1 class="center">Admin Dashboard</h1>

      </div>
    </div>
    <!-- // Page Content -->
  </main>

  <!-- Scripts -->
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>

  <!-- Quill JS -->
  <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <!-- General Admin scripts -->
  <script src="<?php echo ASSETS_URL . '/js/admin.js' ?>"></script>

</body>

</html>