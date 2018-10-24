<section id="project" class="mesProject" style=" margin-left:6rem; margin-top:30vh;">


    <section class="container">

        {{-- <section id="portfolio">
            @foreach ($tasks as $key => $value)
            <div class="project">
                <img class=" text-center " src="{{ Storage::url($value->image)}}" height="100%" width="100%">
                <p>{{ $value->titre }}</p>
                <h3 class="grid__title">{{ $value->description }}</h3>
                <div class="grid__overlay">
                    <button class="viewbutton">view more</button>
                </div>
            </div>
            @endforeach
        </section> --}}


        <div id="portfolio">
            @foreach ($tasks as $key => $value)

            <div class="project">
                <img class=" text-center " src="{{ Storage::url($value->image)}}" height="100%" width="100%">
                <p>{{ $value->titre }}</p>
                <h3 class="grid__title">{{ $value->description }}</h3>
                <div class="grid__overlay">
                    <button class="viewbutton">view more</button>
                </div>
            </div>

            @endforeach
        </div>

    </section>

    <div class="overlay">
        <div class="overlay__inner">
            <button class="close">close X</button>
            <img>
        </div>
    </div>

</section>
