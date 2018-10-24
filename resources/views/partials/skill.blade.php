<section class="skill">
    <div class="container">
        <div id="skill">
            <div class="container tailleImg">
                <div class="row">
                    @foreach ($images as $pic)
                    <div class="col-3">
                        <img src="{{'images/redimensionner/'.$pic->image}}" alt="pic">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="container tailleSousImg">
                <div class="row">
                    @foreach ($sousLogo as $pic2)
                    <div class="col-6">
                        <img src="{{'images/redimensionner/'.$pic2->image}}"  alt="pic">
                    </div>
                    @endforeach
                </div>
            </div>

    </div>
    </div>
</section>
