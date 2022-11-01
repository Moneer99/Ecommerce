<!DOCTYPE html>
<html lang="en">
  <head>

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
      <div class='container mt-10' align='center'>


                <table>
                  <tr class='title-table'align='center'>
                    <td class='row-td'>Name</td>
                    <td class='row-td'>phone</td>
                    <td class='row-td'>Address</td>
                    <td class='row-td'>Product Name</td>
                    <td class='row-td'>Price</td>
                    <td class='row-td'>Quantity</td>
                    <td class='row-td'>Status</td>
                    <td class='row-td'>Action</td>
                  </tr>

                  <tr class='content-table'>
                  {{-- @if (session()->has('order'))
                  <td>{{ session('order') }}</td>
                </tr>
                @else --}}
                    @foreach ($order as $product)
                      <td class='row-td'>{{ $product->name }}</td>
                      <td class='row-td'>{{ $product->phone }}</td>
                      <td class='row-td'>{{ $product->address }}</td>
                      <td class='row-td'>{{ $product->product_title }}</td>
                      <td class='row-td'>{{ $product->price }}</td>
                    <td class='row-td'>{{ $product->quantity}}</td>
                    <td class='row-td'>{{ $product->status}}</td>
                    <td class='row-td'>
                        <a href="{{ url('status',$product->id) }}"class="btn btn-success">Delivered</a>
                    </td>
                    {{-- <td class='row-td'><img height="100px"width="100px" src="/productImage/{{ $product->image }}" alt=""></td> --}}
                    {{-- <td class='row-td'>
                      <a href="{{ url('updateview',$product->id)}}"class="btn btn-primary">Update</a>
                      <a href="{{ url('deleteproduct',$product->id)}}" class="btn btn-danger">Delete</a>
                    </td> --}}
                  </tr>
                @endforeach

                  {{-- @endif --}}



                </table>
{{-- =======================  paginator  ========================= --}}
                <div class="d-flex justify-content-center">
                  {!! $order->links() !!}
              </div>

    @include('admin.scriptScroller')
  </body>
</html>