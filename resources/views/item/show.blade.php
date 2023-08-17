<!DOCTYPE html>
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

        .btn-primary {
            float: right;
        }
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
           
        }

        .btn-group-vertical {
            display: flex;
            flex-direction: column;
        }

        .btn-group-vertical .btn {
            margin-bottom: 5px;
            margin-right: 5px;
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
            <div class="container mt-4">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <a href="/item/create" class="btn btn-primary">New Record</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">sl no.</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Updated at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $record)
                                <tr>
                                    <th scope="row">{{ $loop->iteration  }}</th>
                                    <td>{{ $record->name}}</td>
                                    <td>{{ $record->code}}</td>
                                    <td>{{ $record->userType->name}}</td>
                                    <td>{{ $record->price}}</td>
                                    <td>{{ $record->description}}</td>
                                    <td>{{ $record->created_at}}</td>
                                    <td>{{ $record->updated_at}}</td>
                                    <td>
                                    <div class="button-container">
                                        
                                            <a class="btn btn-success " href="/item/edit/{{$record->id}}">Edit</a>

                                            <a class="btn btn-danger ml-2 " style="margin-left: 10px" href="/item/delete/{{$record->id}}">Delete</a>
                                    
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>