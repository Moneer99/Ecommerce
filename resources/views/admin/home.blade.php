

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin/sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
        <!-- partialmain panel body -->
    @include('admin.panelBody')
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
    @include('admin.footer')
          <!-- partial -->

    @include('admin.scriptScroller')
  </body>
</html>