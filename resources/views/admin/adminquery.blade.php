
<x-app-layout></x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Details</title>

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
                            <th scope="col" style="padding: 15px;">Subject</th>
                            <th scope="col" style="padding: 15px;">Query</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $query)
                            <tr align="center">
                                <td>{{ $query->name }}</td>
                                <td>{{ $query->email }}</td>
                                <td>{{ $query->Subject }}</td>
                                <td>{{ $query->Query }}</td>
                               
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
