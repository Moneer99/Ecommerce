

<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    @include('admin.head')
    <style>
      .alert-success {
        background-color:#00D25B;
        color: #ffffff;
        padding: 15px;
        width: 600px;
        margin-top: 20px;
      }
      div .close{
        color:#000000;
      }
      .title{
        color: white;
        font-size: 25px;
        background-color: #6262cb;
        width: 500px;
        padding: 20px;
        margin-top: 35px;
        margin-bottom: 20px;
        font-size: 25px;
        border-radius: 11px;
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
          <h1 class="title">Update Product</h1>

          {{-- alert message when successful added new product --}}
          @if (session()->has('message'))
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{-- {{ session()->get('message') }} --}}
            {{ session('message') }}

          </div>

          @endif

        <form action="{{ url('updateproduct',$data->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class='field-product'>
            <label for='title'>Product Title:</label>
            <input type='text' value='{{ $data->title }}' id='title' name='title'>
          </div>
          <div class='field-product'>
            <label for='price'>Price:</label>
            <input type='number' value='{{ $data->price }}' id='price' name='price'>
          </div>
          <div class='field-product'>
            <label for='description'>Description:</label>
            <input type='text' value='{{ $data->description }}' id='description' name='description'>
          </div>
          <div class='field-product'>
            <label for='Quantity'>Quantity:</label>
            <input type='text' value='{{ $data->quantity }}' id='quantity' name='quantity'>
          </div>
          <div class='field-product'align='auto'>
              <img height='200px' width='200px' src="/productImage/{{ $data->image }}" alt="">
            <input type='file' name='file' class='choose'>
          </div>

          <div class='field-product'>
              <input type="submit" class='btn btn-success'>
          </div>
        </form>
      </div>

    @include('admin.scriptScroller')
  </body>
</html>