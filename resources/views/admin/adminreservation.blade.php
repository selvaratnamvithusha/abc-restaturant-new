{{-- 
<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">

    @include("admin.navbar")

    <div style="position: relative; top:70px; right: -150;">

        <table bgcolor="grey" border="1px">

            <tr>
                <th style="padding: 30px">Name</th>
                <th style="padding: 30px">email</th>
                <th style="padding: 30px">phone</th>
                <th style="padding: 30px">date</th>
                <th style="padding: 30px">time</th>
                <th style="padding: 30px">Message</th>
            </tr>

             @foreach ($data as $data)
                 
             
            <tr align="center">

                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->message}}</td>
            </tr>
            @endforeach

            
        </table>
    </div>

    </div>

    @include("admin.adminscript")
    

    
  </body>
</html>  --}}



<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>

    <!-- Include Admin CSS -->
    @include('admin.admincss')
</head>
<body>
    <div class="container-scroller">
        <!-- Include Navbar -->
        @include('admin.navbar')

        <div class="content" style="margin-top: 70px; padding-left: 150px;">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" style="background-color: #f8f9fa;">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" style="padding: 15px;">Name</th>
                            <th scope="col" style="padding: 15px;">Email</th>
                            <th scope="col" style="padding: 15px;">Phone</th>
                            <th scope="col" style="padding: 15px;">Date</th>
                            <th scope="col" style="padding: 15px;">Time</th>
                            <th scope="col" style="padding: 15px;">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $reservation)
                            <tr align="center">
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ $reservation->date }}</td>
                                <td>{{ $reservation->time }}</td>
                                <td>{{ $reservation->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Include Admin Scripts -->
    @include('admin.adminscript')
</body>
</html>
