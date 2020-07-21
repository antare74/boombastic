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

    <div class="hero w-100">
        <div class="row">
            <div class="col-md-12 text-center py-5">
                <div class="logo-container">
                    <img src="/frontend/img/boom_logo.svg" class="mx-auto d-block logo_big" alt="...">
                </div>
            </div>
        </div>
    </div>




    <div id="paralax-image">
    </div>
    <div class="container py-5">
        <div class="row h-100">
            <div class="col-md-12 align-self-center">
                <div class="location text-center">
                    <h1 class="pb-5">Locations</h1>
                    <div class="row">
                        <div class="col-md-6 pb-5">
                            <h4>Jl. Gading Serpong Boulevard No.26</h4>
                            <p><b>Sunday - Saturday , 10am - 9pm</b></p>
                            <a href=""><i class="fas fa-map-marked fa-2x"></i></a>


                        </div>
                        <div class="col-md-6">
                            <h4>Jl. Kecubung Raya Alfamart Harapan Kita 3</h4>
                            <p><b>Sunday - Saturday , 10am - 9pm</b></p>
                            <a href=""><i class="fas fa-map-marked fa-2x"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="paralax-image-2" class="img-fluid max-width: 100% height: auto;">
        <div class="row h-100">
            <div class="col-md-12 align-self-center">
                <div class="card text-center" style="width: 25rem;">
                    <div class="card-body">
                        <h5 class="card-title">Treat Yourself</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn modal-btn">Check Our Menu >>></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <!-- modal -->
    <div class="modal-overlay">
        <div class="modal-container">
            <h3>modal content</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem similique molestiae labore
                maxime
                necessitatibus consectetur enim vero assumenda iusto voluptas.</p>
            <button class="close-button">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div> --}}

    @include('includes.user.footer')



    @include('includes.user.script')
</body>

</html>
