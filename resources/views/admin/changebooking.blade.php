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
            <h1 class="title">CHANGE BOOKING</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updatechangebooking',$data->booking_id)}}" method="get" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Customer Name</label>

                 <input style="color: black;" type="text" name="booking_customer" value="{{$data->booking_customer}}"
                 required="">
            </div>

            <div style="padding:15px;">
                <label>Facility Booked</label>

                <input style="color: black;" type="text" name="booking_facility" value="{{$data->booking_facility}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Book Start</label>

                <input style="color: black;" type="datetime-local" name="booking_start" value="{{$data->booking_start}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Book End</label>

                <input style="color: black;" type="datetime-local" name="booking_end" value="{{$data->booking_end}}"
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
