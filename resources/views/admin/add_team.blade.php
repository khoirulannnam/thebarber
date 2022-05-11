<!DOCTYPE html>
<html lang="en">

<style type="text/css">
    label {
        display: inline-block;
        widows: 50px;
    }

</style>
@include('admin.css')

<body>


        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')


            <div class="cd-flex justify-content-center"  style="padding-top:100px; padding-left:750px">
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <form action="{{ url('upload_team') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div style="padding:15px">
                        <label for="">Add Team</label>
                        <input type="text" style="color:black" name="name" placeholder="Write Name" required="">
                    </div>
                    <div style="padding:15px">
                        <label for="">Instagram</label>
                        <input type="text" style="color:black" name="instagram" placeholder="Write Instagram" required="">
                    </div>
                    <div style="padding:15px">
                        <label for="">Photo</label>
                        <input type="file" style="color:black" name="file" required="">
                    </div>
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>

        @include('admin.js')
</body>

</html>
