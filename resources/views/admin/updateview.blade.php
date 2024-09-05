
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include("admin.admincss")
    <style>
        /* Container styling */
        .container-scroller {
            padding: 20px;
        }

        /* Form container styling */
        .form-container {
            max-width: 1500px;
            margin:0 auto;
            background-color: #f4f4f4;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
            top: 40px;
        }

        .form-container div {
            margin-bottom: 10px;
        }

        .form-container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .form-container input[type="text"],
        .form-container input[type="num"],
        .form-container input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
            background-color: #fff;
        }

        .form-container input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            width: 100%;
            font-size: 16px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #218838;
        }

        .form-container img {
            border-radius: 8px;
            display: block;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container-scroller">
        @include("admin.navbar")

        <div class="form-container">
            <form action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="{{$data->title}}" required>
                </div>

                <div>
                    <label>Price</label>
                    <input type="num" name="price" value="{{$data->price}}" required>
                </div>

                <div>
                    <label>Description</label>
                    <input type="text" name="description" value="{{$data->description}}" required>
                </div>

                <div>
                    <label>Old Image</label>
                    <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="Current Image">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image">
                </div>

                <div>
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>

    @include("admin.adminscript")
</body>
</html>
