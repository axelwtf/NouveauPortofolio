<section class="sectionAbout" class="" id="about">
    <div class="container">

        <div class="row">

            @foreach ($text as $txt)

            <div id="imgAbt1" class="col-sm-4">
                    <div  text-center">
                        <img id="imgAbout" class="img-fluid text-center" src="{{ Storage::url($txt->aboutImage) }}" alt="">
                    </div>
                </div>

            <div class="col-sm-8">

                {!! $txt->aboutEdit !!}

            </div>

            <div id="imgAbt2" class="col-sm-4">
                <div  text-center">
                    <img id="imgAbout" class="img-fluid text-center" src="{{ Storage::url($txt->aboutImage) }}" alt="">
                </div>
            </div>
            @endforeach

        </div>


    </div>

</section>
