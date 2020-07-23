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

    <main>
        <div class="container-fluid w-screen mt-3">

            {{-- HOME start --}}
            <div class="home-section">
                <div class="jumbotron jumbotron-fluid">
                    <div class="intro container text-center">
                        <img src="/frontend/img/logo.svg" class="mx-auto d-block" alt="">
                        <h3>Cassava Food Corner</h1>
                    </div>
                </div>
            </div>
            {{-- HOME end --}}

            {{-- Location Start --}}
            <div class="location-section">
                <div id="paralax-image">
                </div>
                <div class="container py-2 pb-4  section-center section">
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

                    <div class="intro section-center">
                        <div class="card mx-auto d-flex" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Treat Yourself</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.
                                </p>
                                <a href="#" class="btn menu-btn">Check Ourmenu >>></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Ourmenu End --}}

            {{-- Who We Are --}}
            <div class="whoweare-section position-relative">
                <div class="container text-center  section-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="restaurant">
                                <img src="/frontend/img/boombastic/whoweare_1.jpg" alt="Restaurant" class="position-relative">
                            </div>
                            <div class="ingredient">
                                <img src="/frontend/img/boombastic/whoweare_2.jpg" alt="" class="position-absolute">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel text-left">
                                <h1>Who We Are</h1>
                                <p class="pt3">
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum aperiam voluptate
                                    possimus molestiae? Facere cum unde odio ad fuga architecto quisquam repellendus.
                                    Atque
                                    hic consequuntur aspernatur, necessitatibus magnam voluptas sed!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Who We Are End --}}

            {{-- Gallery Section Start --}}
            <div class="gallery-section section mt-4">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3"><img src="/frontend/img/photo/square-1.jpg" alt="" class="img-thumbnail no-border"></div>
                        <div class="col-md-3"><img src="/frontend/img/photo/square-2.jpg" alt="" class="img-thumbnail"></div>
                        <div class="col-md-3"><img src="/frontend/img/photo/square-3.jpg" alt="" class="img-thumbnail"></div>
                        <div class="col-md-3"><img src="/frontend/img/photo/square-4.jpg" alt="" class="img-thumbnail"></div>
                    </div>
                </div>
            </div>
            {{-- Gallery Section End --}}


            {{-- Catering Sectioon Start --}}
            <div class="catering-section">
                <div class="container section-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="catering">
                                <h1>Catering</h1>
                            </div>
                            <div class="catering-img">
                                <img src="/frontend/img/boombastic/catering.jpg" alt="">
                                <img src="/frontend/img/bag.svg" class="bag" alt="">
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
                                                <input type="text" name="" id="" class="form-control"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Enter Your Email *</label>
                                                <input type="text" name="" id="" class="form-control"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Nomor Telepon --}}
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Enter Your Phone</label>
                                                <input type="text" name="" id="" class="form-control"
                                                    placeholder="Phone">
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
                                <button type="submit"
                                    class="btn catering-btn mx-auto d-block"><span>Send</span></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            {{-- Catering End --}}

            {{-- Contact Section Start --}}
            <div class="contact-section pt-2">              
                <div class="jumbotron position-relative">
                    <div class="overlay"></div>
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <div class="contact-text pt-3">
                                    <h3>Contact</h3>
                                    <p>info@mysite.com</p>
                                    <p>123-456-7890</p>
                                    <p>500 Terry, Francois Street,<br>
                                    San Franscisco, CA 94158</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <p class="text-white">For Any Question, Leave your Details</p>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Enter Your Name</label>
                                                <input type="text" name="" id="" class="form-control bg-transparent"
                                                    placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Enter Your Phone</label>
                                                <input type="text" name="" id="" class="form-control bg-transparent"
                                                    placeholder="Phone">
                                            </div>
                                        </div>                            
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="">Enter Your Email *</label>
                                                <input type="text" name="" id="" class="form-control bg-transparent"
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                    class="btn catering-btn mx-auto d-block"><span>Send</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Contact End --}}


        </div>
    </main>

    @include('includes.user.footer')



    @include('includes.user.script')
</body>

</html>
