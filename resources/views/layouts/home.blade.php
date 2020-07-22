<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boombastic</title>
    @include('includes.user.style')
</head>

<body>
    @include('includes.user.sidebar')
    @include('includes.user.header')

<div class="container-fluid w-screen mt-3">
    
    {{-- HOME start --}}
    <div class="home-section">
        <div class="jumbotron jumbotron-fluid">
            <div class="intro container text-center">
                <img src="/frontend/img/logo.svg" class="mx-auto d-block" alt="">
            </div>
        </div>
    </div>
    {{-- HOME end --}}

    {{-- Location Start --}}
    <div class="location-section">
        <div id="paralax-image">
        </div>
        <div class="container py-2 pb-3">
            <div class="location text-center">
                <h1 class="pb-3"><span>Locations</span></h1>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 text-left my-3">
                        <h4>Jl. Gading Serpong Boulevard No.26</h4>
                        <p><b>Sunday - Saturday , 10am - 9pm</b></p>
                        <a href=""><i class="fas fa-map-marked fa-2x"></i> Map</a>

                    </div>
                    <div class="col-sm-3 text-left my-3">
                        <h4>Jl. Kecubung Raya Alfamart Harapan Kita 3</h4>
                        <p><b>Sunday - Saturday , 10am - 9pm</b></p>
                        <a href=""><i class="fas fa-map-marked fa-2x"></i> Map</a>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- Location End --}}

    {{-- Ourmenu --}}
    <div class="ourmenu-section text-center">
        <div class="jumbotron jumbotron-fluid">

            <div class="intro">
                <div class="card mx-auto d-flex" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Treat Yourself</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn menu-btn">Check Ourmenu >>></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- Ourmenu End --}}

</div>
    @include('includes.user.footer')



    @include('includes.user.script')
</body>

</html>
