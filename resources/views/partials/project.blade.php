
<section id="project">

    <div id="carouselId" class="carousel slide" data-ride="carousel">
        {{-- <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol> --}}
        <div class="carousel-inner" role="listbox">

            @foreach ($tasks as $key => $value)


            <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : ''}}">
                <div class="row">

                    <div class="col-8 p-0">
                        <img class="d-block w-100" id="img" src="{{ Storage::url($value->image) }}" alt="First slide">
                    </div>

                    <div class="col-4 color text-center pt-5">
                        <h1 class="mb-5">{{ $value->titre }}</h1>
                        <p>{{ $value->description }}</p>
                    </div>


                </div>
            </div>

            @endforeach

        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div>

</section>
