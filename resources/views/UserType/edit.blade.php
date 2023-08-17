<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            margin: 20px;
        }

        .header {
            padding: 10px;
            background-color: #111;
            color: #f1f1f1;
            display: flex;
            justify-content: flex-end;
        }

        .header a {
            margin-left: 20px;
            color: #f1f1f1;
            text-decoration: none;
        }

        .header a:hover {
            color: #818181;
        }

        .container-fluid {
            display: flex;
        }

        .col-md-3 {
            width: 200px;
            background-color: #111;
            color: #fff;
            padding-top: 20px;
            overflow-x: hidden;
        }

        .col-md-9 {
            margin-left: 20px;
        }
    </style>
</head>

<body>

    <div class="header">
        <a class="active" href="#home">Logout</a>
    </div>
    <div class="container-fluid">
        <div class="col-md-3">
            @include('sidebar')
        </div>
        <div class="col-md-9">

            <div class="container my-5">
                <form method="POST" action="/usertype/update/{{$usertype->id}}">
                    @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">User Type</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="user_type" name="user_type" value="{{$usertype->user_type}}" />
                        </div>
                    </div>

                    <input type="submit" name="submit" id="btn-submit" value="Update" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>