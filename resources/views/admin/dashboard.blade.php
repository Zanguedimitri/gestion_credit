<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="{{asset('styles/style.css')}}" rel="stylesheet">
    <link href=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.min.css " rel="stylesheet">
</head>
<body>
    <div class="flex flex-col h-screen bg-gray-100">

        @include('admin.section.header')

        <!-- Main Content -->
        <div class="flex-1">
            <div class="flex h-full w-full justify-around">
                <!-- Sidebar -->
                @include('admin.section.sidebar')

                <!-- Page content -->
                <div class="flex-1 pt-20 ">
                    <!-- Page content goes here -->
                        @yield('content')
                </div>

            </div>
        </div>

        @include('admin.section.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/sweetalert2@11.10.7/dist/sweetalert2.all.min.js "></script>


</body>
</html>


