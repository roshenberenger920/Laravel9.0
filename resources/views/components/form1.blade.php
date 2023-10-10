<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>
    <div class="container" align="center">
        <div class="raw" style="background-color:grey;">
            <div class="col-md-3"></div>
            <div class="col-md-6">

               <!-- <form action="/Student-Data/save" method="post"></form>-->
               <form action="{{route('student.save')}}" method="post">
               @csrf

                <div class="stu-form-area">
                    <div class="row">
                        <div class="col">
                            <lable class="name">Name</lable>
                          <input name="stuName" type="text" class="form-control @error("stuName") is-invalid @enderror" placeholder="First name" aria-label="First name">

                          @error('stuName')
                          <div  class="text-danger form-text">{{$message}}</div>
                          @enderror
                        </div>

                         <div class="col">
                            <i class="fa fa-birthday-cake" aria-hidden="true"><lable class="name">Date of Birth</lable></i>
                          <input name="stuDOB" type="date" class="form-control @error("stuDOB") is-invalid @enderror" placeholder="DOB" aria-label="Last name">

                          @error("stuDOB")
                          <div class="text-danger  form-text">Please Enter Your <i class="fa fa-birthday-cake" aria-hidden="true"></i> Birthday </div>
                          @enderror

                        </div>
                        </div>

                     <div class="raw">
                        <div class="col">
                            <lable class="name">House</lable>
                        <input name="stuHome" type="text" class="form-control @error('stuHome') is-invalid @enderror" placeholder="House" aria-label="First name">
                        @error('stuHome')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>
                <div class="raw">
                   <button class="btn btn-primary mt-3 mb-3" type="submit">Save</button>

                </div>
                </div>
            </form>
                </div>

            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
