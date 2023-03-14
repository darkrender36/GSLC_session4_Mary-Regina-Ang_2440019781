<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{asset('css/template.css')}}">

</head>
<body>
    <!-- Navbar -->
    @include('navbar')


    <!-- Profile -->
    <div class="container-fluid card-font">

        <div class="row">

            <div class="col-lg-4">

                <div class="card mb-4 shadow rounded-4 custom-card-pop-color card-radius" style="margin: 30px; padding: 20px">

                    <div class="card-body text-center">
                        @yield('image')
                        <h1 class="my-3 profile-name-rightside">@yield('name')</h1>
                        <p class="text-muted mb-1">Computer Science and Statistics</p>
                        <p class="text-muted mb-1">Binus University, Jakarta</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-7">

                <div class="card mb-4 shadow rounded-4  custom-card-color card-radius" style="margin: 30px; padding: 20px">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-sm-3">
                                <p class="mb-0">Name</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('name')</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">E-mail</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('email')</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">

                            <div class="col-sm-3">
                                <p class="mb-0">Birthday</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('birthday')</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Favorite Course</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('course')</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">

                            <div class="col-sm-3">
                                <p class="mb-0">Hobbies</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('hobbies')</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">

                            <div class="col-sm-3">
                                <p class="mb-0">Description</p>
                            </div>

                            <div class="col-sm-8">
                                <p class="text-muted mb-0">@yield('description')</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
