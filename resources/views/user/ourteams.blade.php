<div class="page-section bg-light" id="ourteams">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

            @foreach ($team as $team)
                <div class="card text-center wow fadeInUp bg-light border-0" style="width: 18rem;">
                    <div class="card-body">
                        <a href="http://instagram.com/{{ $team->instagram }}"><img src="teamimage/{{ $team->image }}"
                                class="rounded mx-auto d-block" alt="" width="100"></a>

                        <p class="text-center"><strong>{{ $team->name }}</strong></p>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
