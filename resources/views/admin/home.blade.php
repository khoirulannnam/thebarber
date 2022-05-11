<!DOCTYPE html>
<html lang="en">
@include('admin.css')

<body>
    <div class="adminx-container">
        @include('admin.navbar')


        @include('admin.sidebar')

        <div class="adminx-content">

            @include('admin.body')

        </div>
    </div>
    @include('admin.js')
</body>

</html>
