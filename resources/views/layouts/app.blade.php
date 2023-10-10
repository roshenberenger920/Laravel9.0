<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>layout</title>
</head>
<body>
    @include('Sources.css')
    @include('Sources.js')
<div>@include('components.footer')</div>
<div>@include("components.navs")</div>
<div>@yield("contents")</div>
<div>@yield("students")</div>
<div>@yield("formdata")</div>
<div>@yield("formdataEdit")</div>
<div>@yield("tbldata")</div>
<div>  @include('components.footer0')</div>

</body>
</html>
