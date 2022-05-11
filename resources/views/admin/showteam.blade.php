<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<body>
    <div class="adminx-container">
        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="adminx-content d-flex justify-content-center" style="padding: 25px">

            <div class="table-responsive-md" pad>
                <table class="table table-actions table-striped table-hover mb-0 table-bordered">
                    <thead>
                        <tr>

                            <th scope="col">Customer Name</th>
                            <th scope="col">Instagram</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $team)
                            <tr>
                                <td>{{$team->name}}</td>
                                <td>{{$team->instagram}}</td>
                                <td><img src="teamimage/{{$team->image}}" alt="" width="75"> </td>
                                <td>
                                    <a  href="{{url('updateteam')}}"><button class="btn btn-sm btn-primary">Update</button></a>
                                    <a onclick="return confirm('Are you sure to delete?')" href="{{url('deleteteam',$team->id)}}"><button class="btn btn-sm btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    @include('admin.js')
</body>

</html>
