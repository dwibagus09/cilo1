<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo @$head; ?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php echo @$sidebar; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
    
      <!-- Main Content -->
      <div id="content">
      <?php echo @$navbar; ?>
        

        <!-- Begin Page Content -->
        <?php echo @$content; ?>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php echo @$footer; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <?php echo @$modal; ?>

  <!-- Bootstrap core JavaScript-->
  <?php echo @$js; ?>

</body>

</html>
