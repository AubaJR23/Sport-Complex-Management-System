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
            <h1 class="title">CHANGE MAINTENANCE</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updatechangemaintenance',$data->facility_id)}}" method="get" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Facility Name</label>

                 <input style="color: black;" type="text" name="facility_name" value="{{$data->facility_name}}"
                 required="">
            </div>

            <div style="padding:15px;">
                <label>Facility Type</label>

                <input style="color: black;" type="text" name="facility_type" value="{{$data->facility_type}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Facility Description</label>

                <input style="color: black;" type="text" name="facility_description" value="{{$data->facility_description}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Facility Last Maintenance</label>

                <input style="color: black;" type="date" name="facility_last_maintenance" value="{{$data->facility_last_maintenance}}"
                required="">
            </div>

            <div style="padding:15px;">
                <label>Maintenance Status</label>

                <input style="color: black;" type="text" name="maintenance_status" value="{{$data->maintenance_status}}"
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
