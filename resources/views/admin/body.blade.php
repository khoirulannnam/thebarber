<div class="row d-flex justify-content-center" style="padding: 50px">

    <div class="col-md-6 col-lg-3 d-flex ">
        <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
            <div class="d-flex flex-row align-items-center h-100">
                <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="calendar"></i>
                </div>
                <div class="card-body">
                    <a href="{{ url('showappointment') }}">
                        <div class="card-info-title">Appointments</div>
                        <h3 class="card-title mb-0">

                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-3 d-flex">
        <div class="card border-0 bg-primary text-white text-center mb-grid w-100">
            <div class="d-flex flex-row align-items-center h-100">
                <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="edit"></i>
                </div>
                <div class="card-body">
                    <a href="{{ url('add_team_view') }}">
                        <div class="card-info-title">Add Team</div>
                        <h3 class="card-title mb-0">
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-6 col-lg-3 d-flex">
        <div class="card border-0 bg-success text-white text-center mb-grid w-100">
            <div class="d-flex flex-row align-items-center h-100">
                <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                    <i data-feather="users"></i>
                </div>
                <div class="card-body">
                    <a href="{{ url('showteam') }}">
                        <div class="card-info-title">Teams</div>
                        <h3 class="card-title mb-0">
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
