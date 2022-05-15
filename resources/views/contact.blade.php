<section id="contact">
    <!-- =============== container =============== -->
    <div class="container">
        <div class="row">
            <div class="title">
                <h2>Contact</h2>
                <p>Fell free to contact us for better experience or any kind of information.
                    As early as possible we will contact you.</p>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

                <form action="{{route('contact_page')}}" method="post">
                    @csrf
                    <div class="ajax-hidden">
                        <div class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                            <label for="c_name" class="sr-only">Name</label>
                            <input type="text" placeholder="Name" name="name" class="form-control" id="name" required="">
                        </div>

                        <div data-wow-delay=".1s" class="col-xs-12 col-sm-6 col-md-6 form-group wow fadeInUp animated">
                            <label for="c_email" class="sr-only">Email</label>
                            <input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
                        </div>

                        <div data-wow-delay=".2s" class="col-xs-12 col-sm-12 col-md-12 form-group wow fadeInUp animated">
                            <textarea placeholder="Message" rows="7" name="message" id="message" class="form-control" required=""></textarea>
                        </div>

                        <button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit">Send Message</button>
                    </div>
                    <div class="ajax-response"></div>
                </form>

            </div>
        </div>
    </div><!-- =============== container end =============== -->
</section>
