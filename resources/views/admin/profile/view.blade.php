@extends('admin.dashboard')

@section('content')
<div class="flex justify-center mt-20 px-10 ">
    <form class="max-w-2xl bg-white w-full p-4" enctype="multipart/form-data" method="post" action="{{route('admin.update.profile')}}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              <h2 class="font-semibold leading-7 text-gray-900 text-4xl"> My Profile</h2>

              <div class="mt-5 flex items-center gap-x-3">
                @if (Auth::user()->image !== null)
                    <img class="w-12 h-12 rounded-full object-cover" src="{{Auth::user()->image}}" alt="user photo">
                @else
                    <svg class="h-12 w-12 text-gray-900" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                    </svg>
                @endif
                <div class="p-5">
                    <p class="mt-1 leading-6 text-gray-900 text-xl">User : {{Auth::user()->name}}</p>
                    <p class="mt-1 leading-6 text-gray-900 text-xl">Profile : {{Auth::user()->role}}</p>
                </div>
              </div>

              <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                  <label for="username" class="block text-sm font-medium leading-6 text-gray-900">name</label>
                  <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-900 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                      <input type="text" name="name" id="name" value="{{Auth::user()->name}}" autocomplete="name" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="janesmith">
                    </div>
                  </div>
                </div>

                <div class="col-span-full">
                  <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                  <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                    <input type="text" name="phone" value="{{Auth::user()->phone}}" id="phone" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="697004863">
                  </div>
                </div>

                <div class="mt-5 col-span-full text-sm leading-6 text-gray-900">
                    <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Profile image</label>
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                        <input type="file" id="image" name="image">
                    </div>
                </div>

                <div class="col-span-full">
                    <input type="submit" class=" m-2 rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" value="Change">
                </div>
              </div>
            </div>
    </form>
</div>
@endsection
