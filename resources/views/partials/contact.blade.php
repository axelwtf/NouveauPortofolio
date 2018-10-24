{{--
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<section id="contact">
    <div class="container">
        <div class="well well-sm">
            <h3><strong>Contact Us</strong></h3>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="row">
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1299443.3364246602!2d3.342427426466277!3d50.49741808483219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d64edf39797%3A0x47ebf2b439e60ff2!2sBelgique!5e0!3m2!1sfr!2sbe!4v1536226054716"
                    width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-md-5">
                <h4><strong>Get in Touch</strong></h4>

                <form action="/contact_create" method="post">

                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="" placeholder="Name" required>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail" required>
                    </div>

                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="3" placeholder="Message" required></textarea>
                    </div>

                    <button class="btn btn-default" type="submit" name="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                    </button>

                </form>

            </div>
        </div>
    </div>
</section>

<style>
    /*Font-awesome integration*/
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
/*Google font integration*/
@import url('https://fonts.googleapis.com/css?family=Roboto');
</style>
--}}


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<section id="contact">
    <div class="container">
        <div class="well well-sm">
            <h3><strong>Contact Us</strong></h3>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif


        <div class="row">
            <div class="col-md-7">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1299443.3364246602!2d3.342427426466277!3d50.49741808483219!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17d64edf39797%3A0x47ebf2b439e60ff2!2sBelgique!5e0!3m2!1sfr!2sbe!4v1536226054716"
                    width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
                <h4><strong>Get in Touch</strong></h4>
                <form action="/contact_create" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button class="btn btn-default" type="submit" name="button">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<style>
    /*Font-awesome integration*/
    @import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    /*Google font integration*/
    @import url('https://fonts.googleapis.com/css?family=Roboto');

</style>
