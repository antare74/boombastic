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
                    <h1>Cassava</h1>
                </div>
            </div>
        </div>
        {{-- HOME end --}}

        {{-- Location Start --}}
        <div class="location-section">
            <div id="paralax-image">
            </div>
            <div class="container py-2 pb-4">
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
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#" class="btn menu-btn">Check Ourmenu >>></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Ourmenu End --}}

        {{-- Who We Are --}}
        <div class="whoweare-section">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="restaurant">
                            <img src="/frontend/img/photo/restaurant.jpg" alt="Restaurant" class="">
                        </div>
                        <div class="ingredient">
                            <img src="/frontend/img/photo/ingredients_2.jpg" alt="" class="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel text-left">
                            <h1>Who We Are</h1>
                            <p class="pt3">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum aperiam voluptate
                                possimus molestiae? Facere cum unde odio ad fuga architecto quisquam repellendus. Atque
                                hic consequuntur aspernatur, necessitatibus magnam voluptas sed!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Who We Are End --}}

        {{-- Catering --}}
        <div class="catering-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="catering">
                            <h1>Catering</h1>
                        </div>
                        <div class="bag">
                            <img src="/frontend/img/bag.svg" alt="">
                        </div>
                        <div class="catering-img">
                            <img src="/frontend/img/photo/potato_wedges.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="catering-text">
                            <h3>Interest in Our Special <br>Catering Services?</h3>
                            <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Minima, ipsam?</p>
                        </div>
                        <form action="" method="post">
                            @method('post')
                            @csrf
                            <div class="catering-form">
                                {{-- Nama Dan Email Form --}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Enter Your Name</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Enter Your Email *</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                {{-- Nomor Telepon --}}
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Enter Your Phone</label>
                                            <input type="text" name="" id="" class="form-control" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Enter Your Message</label>
                                            <textarea class="form-control" id="" rows="3"
                                                placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn catering-btn mx-auto d-block"><span>Send</span></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        {{-- Catering End --}}

        <div class="contact-sectionb">
            <div class="container">
                <div class="row">
                    <h1>TEST</h1>
                </div>
            </div>
        </div>

    </div>

    @include('includes.user.footer')



    @include('includes.user.script')
</body>

</html>
