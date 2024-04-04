@extends('admin.dashboard')

@section('content')
<div class="flex justify-center mt-20 px-10 ">
    <form class="max-w-2xl bg-white w-full p-4" enctype="multipart/form-data" method="post" action="{{route('user.update.password')}}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="font-semibold leading-7 text-gray-900 text-4xl"> Update password</h2>
              <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-4">
                  <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Current password</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-900 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="password" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                    </div>
                  </div>
                </div>

                <div class="col-span-full">
                  <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">New password</label>
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="password" name="phone" id="phone" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                  </div>
                </div>

                <div class="col-span-full">
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Confirmer password</label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="password" name="password" id="phone" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                    </div>
                  </div>


                <div class="col-span-full">
                    <input type="submit" class=" m-2 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" value="Confirmer ">
                </div>
              </div>
            </div>
    </form>
</div>
@endsection
