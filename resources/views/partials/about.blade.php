<section class="sectionAbout" class="" id="about">
    <div class="container">

        <div class="row">

            @foreach ($text as $txt)
            <div class="col-8">

                {!! $txt->aboutEdit !!}

            </div>

            <div class="col-4">
                <div  text-center">
                    <img id="imgAbout" class="img-fluid text-center" src="{{ Storage::url($txt->aboutImage) }}" alt="">
                </div>
            </div>
            @endforeach

        </div>


    </div>

</section>
