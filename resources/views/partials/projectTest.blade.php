{{--
<section class="mx-auto" style="width:90%;">
    <section id="portfolio" class="">
    @foreach ($tasks as $key => $value)

    <div id="element{{ $key+1 }}" class="mx-auto">
        <div class="project ">
            <img class="img-fluid" src="{{ Storage::url($value->image) }}" />
            <p>{{ $value->description }}</p>
            <h3 class="grid__title">{{ $value->titre }}</h3>
        </div>
    </div>

    @endforeach
</section>
</section>  --}}

<section id="project" class="" style=" margin-left:6rem;">

    <section id="portfolio">
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

            <div class="overlay">
              <div class="overlay__inner">
                <button class="close">close X</button>
                <img>
              </div>
            </div>
          </section>
</section>

