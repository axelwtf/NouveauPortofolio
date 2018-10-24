<section class="sectionAbout" class="" id="about">
    <div class="container">

        <div class="row">

            {{-- <div class="col-8"> --}}
                @foreach ($text as $txt)

                {!! $txt->aboutEdit !!}

                @endforeach
            {{-- </div> --}}

            <div class="col-4">
                <div id="imgAbout text-center">
                    {{-- <img class="img-fluid text-center" src="images/IMG_20180920_184331.jpg" alt=""> --}}
                </div>
            </div>

        </div>


    </div>

</section>

