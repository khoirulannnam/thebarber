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
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $appoint)
                            <tr>
                                <td>{{ $appoint->name }}</td>
                                <td>{{ $appoint->instagram }}</td>
                                <td>{{ $appoint->date }}</td>
                                <td>{{ $appoint->reservation }}:00 WIB</td>
                                <td>{{ $appoint->message }}</td>
                                <td>{{ $appoint->status }}</td>
                                <td>
                                    <a onclick="return confirm('Are you sure to approved?')"
                                        href="{{ url('approved', $appoint->id) }}"><button
                                            class="btn btn-sm btn-primary">Approved</button></a>
                                    <a onclick="return confirm('Are you sure to cancel?')"
                                        href="{{ url('cancel', $appoint->id) }}"><button
                                            class="btn btn-sm btn-danger">Cancel</button></a>
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
