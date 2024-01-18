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
            <h1 class="title">CHANGE STAFF</h1>

            @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

            <form action="{{url('updatechangemembership',$data->membership_id)}}" method="get" enctype="multipart/form-data">

                @csrf

            <div style="padding:15px;">
                <label>Customer Name</label>

                 <input style="color: black;" type="text" name="customer_name" value="{{$data->customer_name}}"
                 required="">
            </div>

            <div style="padding:15px;">
                <label>Customer Email</label>

                <input style="color: black;" type="email" name="customer_email" value="{{$data->customer_email}}"
                required="">
            </div>


            <div style="padding:15px;">
                <label>Membership Level</label>

                <select style="color: black;" type="enum" name="membership_level" value="{{$data->membership_level}}" required>
                    <option value="Bronze">Bronze</option>
                    <option value="Silver">Silver</option>
                    <option value="Gold">Gold</option>
                    <option value="Platinum">Platinum</option>
                </select>
            </div>


            <div style="padding:15px;">
                <label>Duration</label>

                <select style="color: black;" type="enum" name="duration" value="{{$data->duration}}" required>
                    <option value="3 months">3 months</option>
                    <option value="6 months">6 months</option>
                    <option value="9 months">9 months</option>
                    <option value="12 months">12 months</option>
                </select>
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
