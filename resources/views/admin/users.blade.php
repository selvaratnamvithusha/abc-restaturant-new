

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - User Management</title>

    <!-- Include Admin CSS -->
    @include('admin.admincss')
</head>
<body>
    <x-app-layout></x-app-layout>

    <div class="container-scroller">
        <!-- Include Navbar -->
        @include('admin.navbar')

        <div class="content" style="margin-top: 60px; margin-left: 150px;">
            <table class="table table-bordered" style="background-color: #f8f9fa; border-color: #343a40; width: 80%;">
                <thead class="thead-dark">
                    <tr align="center">
                        <th style="padding: 15px;">Name</th>
                        <th style="padding: 15px;">Email</th>
                        <th style="padding: 15px;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $user)
                        <tr align="center">
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            @if($user->usertype == "0")
                                <td>
                                    <a href="{{ url('/deleteuser', $user->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                                </td>
                            @else
                                <td><span class="text-muted">Not Allowed</span></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Admin Scripts -->
    @include('admin.adminscript')
</body>
</html>
