

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.head')
    <style>
      .title{
        color:white;
        padding-top:25px;
        font-size:25px;
      }
      .field-product{
        padding: 15px;
      }
      .field-product label{
        font-weight:bold;
        display: inline-block;
        width:200px;
      }
      .field-product input{
        color:black;
        font-size:20px;
      }
      .field-product .choose{
        color:white;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    @include('admin/sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
    @include('admin.navbar')
        <!-- partialmain panel body -->
  <div class="container-fluid page-body-wrapper">
      <div class='container' align='center'>
          <h1 class='title'>Add Product</h1>
        <form action="" method="post">
          @csrf
          <div class='field-product'>
            <label for='title'>Product Title:</label>
            <input type='text' placeholder='Give a Title of Product' id='title' name='title'>
          </div>
          <div class='field-product'>
            <label for='price'>Price:</label>
            <input type='number' placeholder='Give a Price of Product' id='price' name='price'>
          </div>
          <div class='field-product'>
            <label for='description'>Description:</label>
            <input type='text' placeholder='description of Product' id='description' name='description'>
          </div>
          <div class='field-product'>
            <label for='Quantity'>Quantity:</label>
            <input type='text' placeholder='Quantity' id='Quantity' name='Quantity'>
          </div>
          <div class='field-product'>
            <input type='file' name='file' class='choose'>
          </div>

          <div class='field-product'>
              <input type="submit" class='btn btn-success'>
          </div>
        </form>
      </div>

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <!-- partial -->

    @include('admin.scriptScroller')
  </body>
</html>