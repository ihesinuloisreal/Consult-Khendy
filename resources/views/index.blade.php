
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
         <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
    <!-- Styles -->
    <!-- @vite('public/dist/scss/bootstrap.scss')
    @vite('node_modules/bootstrap-icons/font/fonts/bootstrap-icons.css') -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="{{ asset('dist/css/custom.css')}}" rel="stylesheet">


    </head>
    <body class="beta">
        <header class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid fw-bolder">

                    <a class="navbar-brand fw-bolder col-3" href="#">Health</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="grid gap-5 nav collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="col-3 nav-ul navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                        </ul>
                        <button class="btn btn-dark fw-bolder p-2 g-col-2">Contact Us <i class="bi bi-arrow-right-circle-fill"></i>
                        </button>

                    </div>
                </div>
            </nav>
        </header>
        <div class="container pb-5">
            <h1 class="h1-i pt-4">Search Doctor, Make An Appointment</h1>
            <h5 class="text-center p-2">Discover the best doctors, clinic & hospital in the city nearest to you</h5>

            <div class="row pt-5">

                <div class="col ms-auto">
                    <form class="row row-cols-lg-auto g-3  ">
                        <div class="col-12 me-3">
                            <label class="form-check-label pb-3" for="inlineRadio1">(Only for Medical Treatment)</label>

                            <div>
                                <label class="form-check-label" for="inlineRadio1">Treatment Enquiry for </label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label " for="inlineRadio1">Myself</label>
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">Someone</label>
                            </div>

                        </div>
                        <div class="col-12">
                            <label for="inputPassword4" class="form-label pb-1">Name</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>

                        <div class="col-12">
                            <label for="inputPassword4" class="form-label pb-1">Phone or Email</label>
                            <input type="password" class="form-control" id="inputPassword4">
                        </div>


                        <div class="col-12 pt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
            <div class="border-top border-dark border-1">
                <div class="container">
                    <div class="row ">
                        <div class="col-5 me-auto border-end border-dark">
                            <form class="align-items-center pt-2 pb-2 mb-3 f-c ">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Search</label>
                                    <input type="email" class="form-control wi-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Country</label>
                                    <select class="form-select wi-5" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">District/State</label>
                                    <select class="form-select wi-5" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select wi-5" size="3" aria-label="size 3 select example">
                                        <input type="email" class="form-control wi-5" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div class="col-7">

                            <!-- First Row -->
                            <div class="row">
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                                <div class="col-8 border-end border-bottom border-dark">

                                </div>
                            </div>
                            <!-- Second Row -->
                            <div class="row">
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                                <div class="col-4 dhi border-bottom border-end border-dark">
                                    <div class=" ">
                                        <img src="https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cGVyc29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="rounded-circle border border-success object-fit-scale ms-auto d-block hi " alt="...">

                                    </div>

                                    <div class="text-center">
                                        <h5>Elysser Perry</h5>
                                        <p class="fs-6">Senior at Orthopedic</p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        </footer>
    </body>
</html>
