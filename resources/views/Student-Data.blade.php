<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Data</title>
    @extends("layouts.app")
</head>
<body>

@section("formdata")
<div>
@include("components.form1")
</div>
@endsection

@section("tbldata")
<div>
    @include("components.tbldata")
</div>
@endsection

</body>
</html>
