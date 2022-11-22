<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.head')

    <style>
      body{
        color:white;
      }
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
      .container{
        padding:20px;
      }
      .row-td{
        padding: 10px;
        align-items: center;
      }
      .title-table{
        background-color:rgb(72, 74, 75);
        padding: 15px;
      }
      .content-table{
        background-color:black;
        align-items: center;
      }
      .content-table .row-td{
        text-align:center;
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

        @if (session()->has('message'))
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert">x</button>
              {{ session('message') }}
            </div>
            @endif

                <table style="color:#fff;">
                  <tr class='title-table'align='center'>
                    <td class='row-td'>Title</td>
                    <td class='row-td'>Price</td>
                    <td class='row-td'>Description</td>
                    <td class='row-td'>Quantity</td>
                    <td class='row-td'>Image</td>
                    <td class='row-td'>Action</td>
                  </tr>
                  @foreach ($data as $product)
                  <tr class='content-table'>
                    <td class='row-td'>{{ $product->title }}</td>
                    <td class='row-td'>{{ $product->price }}</td>
                    <td class='row-td'>{{ $product->description }}</td>
                    <td class='row-td'>{{ $product->quantity}}</td>
                    <td class='row-td'><img height="100px"width="100px" src="/productImage/{{ $product->image }}" alt=""></td>
                    <td class='row-td'>
                      <a href="{{ url('updateview',$product->id)}}"class="btn btn-primary">Update</a>
                      <a href="{{ url('deleteproduct',$product->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                @endforeach

                </table>
{{-- =======================  paginator  ========================= --}}
                <div class="d-flex justify-content-center" style="margin-top:15px;">
                  {!! $data->links() !!}
              </div>

    @include('admin.scriptScroller')
  </body>
</html>