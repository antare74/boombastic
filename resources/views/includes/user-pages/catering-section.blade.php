{{-- Catering Sectioon Start --}}
<div class="catering-section" id="catering">
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
                                    <textarea class="form-control" id="" rows="3" placeholder="Message"></textarea>
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