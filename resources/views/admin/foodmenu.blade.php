
<x-app-layout>
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include("admin.admincss")
    <style>
        /* Additional styling for the form and table */
        .form-container {
            position: relative;
            top: 20px;
            right: 0px;
            background-color: #d4cdcd06;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.897);
        }

        .form-container div {
            margin-bottom: 15px;
        }

        .form-container label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container input[type="num"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .form-container input[type="submit"]:hover {
            background-color: #218838;
        }

        table {
            width: 50%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #ebe2e2;
            color: rgb(123, 116, 116);
            text-align: center;
            border-radius: 6px;
            overflow: hidden;
        }

        table th, table td {
            padding: 20px;
            border-bottom: 1px solid #444;
        }

        table th {
            background-color: #444;
        }

        table td img {
            border-radius: 8px;
        }

        table a {
            color: #17a2b8;
            text-decoration: none;
            font-weight: bold;
        }

        table a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container-scroller">
    @include("admin.navbar")
    <div class="form-container">
        <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" placeholder="Write a title" required>
            </div>

            <div>
                <label>Price</label>
                <input type="num" name="price" placeholder="Price" required>
            </div>

            <div>
                <label>Image</label>
                <input type="file" name="image" required>
            </div>

            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description" required>
            </div>

            <div>
                <input type="submit" value="Save">
            </div>
        </form>
    </div>

    <div>
        <table>
            <tr>
                <th>Food Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
                <th>Action</th>
            </tr>

            @foreach($data as $data)
            <tr>
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->description}}</td>
                <td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
                <td><a href="{{url('/deletemenu', $data->id)}}">Delete</a></td>
                <td><a href="{{url('/updateview', $data->id)}}">Update</a></td>
            </tr>
            @endforeach
        </table>
    </div>

    @include("admin.adminscript")
</div>

</body>
</html>

