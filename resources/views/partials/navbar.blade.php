<div id="navbar" class="">
    <a class="logo" href=""></a>
    <nav class="text-center float-lefts">
        <ul class="icone1">
            <li>
                <a class="home" href="#bgSection"><i class="fas fa-home"></i> </a>
            </li>
            <li>
                <a class="about" href="#about"><i class="fas fa-user"></i></a>
            </li>
            <li>
                <a class="mywork" href="#project"><i class="fas fa-eye"></i></a>
            </li>
            <li>
                <a class="contact" href="#contact"><i class="fas fa-envelope"></i></a>
            </li>
            @can('admin')
            <li>
                <a class="contact" href="/adminHome"><i class="fas fa-cog"></i></a>
            </li>
            @endcan
        </ul>


        {{-- <a class="skill" href=""><i class="fas fa-cog"></i></a> --}}


    </nav>
    <ul>
        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://fr.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fas fa-rss"></i></a></li>
    </ul>
</div>
