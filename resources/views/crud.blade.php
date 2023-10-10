<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Model and Controller</title>
  </head>
  <body>

    <div class="container md-5 mt-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <a href="save-data">
                    <button class="btn btn-primary">Save Data</button>
                </a>

                <a href="update-data">
                    <button class="btn btn-success">Update Data</button>
                </a>

                <a href="delete-data">
                    <button class="btn btn-danger">Delete Data</button>
                </a>
                <hr>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user1)
                        <tr>
                            <th scope="row">{{ $user1->id }}</th>
                            <td>{{ $user1->name }}</td>
                            <td>{{$user1->email}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                    </table>

            </div>
        </div>
    </div>



  </body>
</html>
