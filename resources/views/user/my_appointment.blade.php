<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>The Barber</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<style>
    html {
        scroll-behavior: smooth;
    }

</style>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>


        <nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{url('home')}}"><span class="text-primary">The-Barber</span></a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ourteams">Our Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#appointment">Book</a>
                        </li>

                        @if (Route::has('login'))
                            @auth

                            <li class="nav-item">
                                <a class="nav-link" href="{{url('myappointment')}}">My Appointment</a>
                            </li>

                                <x-app-layout>
                                </x-app-layout>
                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login / Register</a>
                                </li>

                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <div align="center" style="padding: 100px">
        <table class="table-bordered table-sm">

            <tr style="background-color:rgb(39, 226, 170)" align="center">
                <th style="padding: 10; font-size:20; color:white">Team Name</th>
                <th style="padding: 10; font-size:20; color:white">Date</th>
                <th style="padding: 10; font-size:20; color:white">Time</th>
                <th style="padding: 10; font-size:20; color:white">Message</th>
                <th style="padding: 10; font-size:20; color:white">Status</th>
                <th style="padding: 10; font-size:20; color:white">Action</th>
            </tr>

            @foreach($appoint as $appoints)

            <tr align="center">
                <td>{{$appoints->name}}</td>
                <td>{{$appoints->date}}</td>
                <td>{{$appoints->reservation}}:00 WIB</td>
                <td>{{$appoints->message}}</td>
                <td>{{$appoints->status}}</td>
                <td>
                    <a class="btn btn-danger" onclick="return confirm('Are you sure to cancel?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancle</a>
                    <a class="btn btn-warning" onclick="return confirm('Are you sure to download?')" href="{{route('printappoint', ["id"=>$appoints->id])}}">Print</a>
                </td>
            </tr>

            @endforeach

        </table>
    </div>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
