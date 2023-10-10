<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tbldata</title>
    </head>
<body>

    <table class="table mt-5">
        <thead>

          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">DOB</th>
            <th scope="col">Home</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ( $students as $key => $students )
          <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $students->stuName }}</td>
            <td>{{ $students->stuDOB }}</td>
            <td>{{ $students->stuHome }}</td>
            <td>{{ $students->status }}</td>
            <td><a href="{{ route("student.edit", $students->id) }}"><i class="bi bi-pen"></i></a>
                | <a href="{{ route("student.delete", $students->id) }}" class="vertical"><i class="bi bi-person-dash"></i></a></td>
           </tr>
           @endforeach
         </tbody>

      </table>

</body>
</html>
