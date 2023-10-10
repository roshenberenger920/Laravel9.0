<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

             </head>

<body>


    @extends('layouts.app')

    @section("contents")
    <h2 align="middle">This is my first  Laraval Project<h2>

        <div class="container text-center">
          <div class="row">
            <div class="col-mt-4"></div>
            <div class="col-mt-4">

            <div class="card mt-4">
          <div class="card-header">
            Home Page
          </div>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>

            </div>
            <div class="col-mt-4">
                  </div>
          </div>
        </div>


        <div class="container text-center">
          <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">


            </div>
            <div class="col-sm-4">


            </div>
          </div>
        </div>

       <div>

        @endsection

@include('components.carousel')

</body>
</html>
