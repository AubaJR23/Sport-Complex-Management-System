<!DOCTYPE html>
<html lang="en">
  <head>

    @include('admin.css')

    <style type="text/css">

    .title
    {
        color: white;
        padding-top: 25px;
        font-size: 25px;
    }

    label
    {
        display: inline-block;
        width: 200px;
    }

    </style>

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- partial -->

      @include('admin.sidebar')

      @include('admin.navbar')

      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <div class="container" style="text-align: center;">
            <h1 class="title">ADD PRODUCT</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Product title</label>

                <input style="color: black;" type="text" name="title" placeholder="Give a product title"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Price</label>

                <input style="color: black;" type="number" name="price" placeholder="Give a price"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Description</label>

                <input style="color: black;" type="text" name="des" placeholder="Give a description"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Quantity</label>

                <input style="color: black;" type="text" name="quantity" placeholder="Product Quantity"
                required="">
            </div>


            <div style="padding:15px;">
                <input type="file" name="file">
            </div>


            <div class="btn btn-success" style="padding:15px;">
                <button type="submit"> ADD </button>
            </div>

        </form>

        </div>

    </div>


      <!-- partial -->
      @include('admin.script')
  </body>
</html>
