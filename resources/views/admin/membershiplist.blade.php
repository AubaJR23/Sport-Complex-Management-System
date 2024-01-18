<!DOCTYPE html>
<html lang="en">
  <head>

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

      <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">

      <div class="container" style="text-align: center;">

        @if(session()->has('message'))

            <div class="alert alert-success">

            <button style="float: right;" type="button" class="close" data-dismiss="alert">x</button>

            {{session()->get('message')}}

            </div>

            @endif

        <table style="margin-left: auto; margin-right:auto;">

        <tr style="background-color: grey;">

            <td style="padding:20px;">MEMBERSHIP ID</td>
            <td style="padding:20px;">CUSTOMER NAME</td>
            <td style="padding:20px;">CUSTOMER EMAIL</td>
            <td style="padding:20px;">MEMBERSHIP LEVEL</td>
            <td style="padding:20px;">DURATION</td>
            <td style="padding:20px;">Update</td>
            <td style="padding:20px;">Delete</td>

        </tr>

        @foreach($membership as $membership)

        <tr text-align="center" style="background-color: black;">

            <td>{{$membership->membership_id}}</td>
            <td>{{$membership->customer_name}}</td>
            <td>{{$membership->customer_email}}</td>
            <td>{{$membership->membership_level}}</td>
            <td>{{$membership->duration}}</td>
            <td>
                <a class="btn btn-primary" href="{{url('changemembership',$membership->membership_id)}}">Update</a>
            </td>

            <td>
                <a class="btn btn-danger" onclick="return confirm('Are you sure')" href="{{url('deletemembership',$membership->membership_id)}}">Delete</a>
            </td>

        </tr>

        @endforeach

    </table>

      </div>

      </div>

      <!-- partial -->
      @include('admin.script')
  </body>
</html>
