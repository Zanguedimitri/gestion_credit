<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    <div class="flex flex-col h-screen bg-gray-100">

        @include('user.section.header')

        <!-- Main Content -->
        <div class="flex-1">
            <div class="flex h-full">
                <!-- Sidebar -->
                @include('user.section.sidebar')

                <!-- Page content -->
                <div class="flex-1 p-10">
                    <!-- Page content goes here -->

                    <div class="p-4 sm:ml-64">
                        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
                            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">

                                @yield('content')

                            </div>
                        </div>
                     </div>
                </div>

            </div>
        </div>

        @include('user.section.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>



</body>
</html>


