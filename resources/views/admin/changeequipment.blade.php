<!DOCTYPE html>
<html lang="en">
  <head>

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
    <base href="/public">

    @include('admin.css')

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
            <h1 class="title">CHANGE EQUIPMENT</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updatechangeequipment',$data->equipment_id)}}" method="get" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Equipment Name</label>

                 <input style="color: black;" type="text" name="equipment_name" value="{{$data->equipment_name}}"
                 required="">
            </div>

            <div style="padding:15px;">
                <label>Equipment Quantity</label>

                <input style="color: black;" type="text" name="equipment_quantity" value="{{$data->equipment_quantity}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Equipment Last Maintenance</label>

                <input style="color: black;" type="date" name="equipment_last_maintenance" value="{{$data->equipment_last_maintenance}}"
                required="">
            </div>
            <br>
            <div class="btn btn-success" style="padding:15px;">
                <button type="submit"> -= CHANGE =- </button>
            </div>

        </form>

        </div>

    </div>


      <!-- partial -->
      @include('admin.script')
  </body>
</html>
