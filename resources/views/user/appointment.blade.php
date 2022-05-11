<div class="page-section " id="appointment">
    <div class="container">
        <h1 class="text-center wow fadeInUp display-4">Make an Appointment</h1>

        <form class="main-form" action="{{url('appointment')}}" method="POST">

            @csrf

            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" class="form-control" name="name" placeholder="Full name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" class="form-control" name="instagram" placeholder="Instagram">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="team" id="team" class="custom-select">

                        @foreach ($team as $teams)
                            <option value="{{$teams->name}}">{{$teams->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <select name="reservation" id="reservation" class="custom-select">
                        <option value="10">10:00 WIB</option>
                        <option value="11">11:00 WIB</option>
                        <option value="13">13:00 WIB</option>
                        <option value="14">14:00 WIB</option>
                        <option value="15">15:00 WIB</option>
                        <option value="16">16:00 WIB</option>
                        <option value="17">17:00 WIB</option>
                        <option value="19">19:00 WIB</option>
                        <option value="20">20:00 WIB</option>
                      </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-outline-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div> <!-- .page-section -->
