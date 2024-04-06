@extends('admin.dashboard')

@section('content')
<div class="bg-gray-100">
    <div class="p-6 mx-auto max-w-xl">
        <div class="bg-white shadow-md rounded-lg p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src=" {{ $user->image}}" alt="User Profile" class="w-16 h-16 rounded-full">
                    <div>
                        <h2 class="text-2xl font-semibold"> {{ $user->name}}</h2>
                        <p class="text-gray-500"> {{ $user->role}}</p>
                    </div>
                </div>
                <div>
                    <b>Change Status</b>
                    <form action="{{route('admin.toggle.status',$user->id)}}" method="post">
                        @csrf
                        <label class="switch">
                            <input name='status' type="checkbox" onchange="this.form.submit()" {{ $user->statuts === 'active' ? 'checked' : '' }}>
                            <span class="slider"></span>
                        </label>
                    </form>
                </div>
            </div>
            <hr class="my-4 border-t border-gray-300">
            <div>
                <h3 class="text-3xl font-semibold mb-2"> <u>User Details</u></h3>

                <h2 class="text-xl font-semibold mb-2">Email :  {{ $user->email}}</h2>
                <h2 class="text-xl font-semibold mb-2">phone :  {{ $user->phone}}</h2>
                <h2 class="text-xl font-semibold mb-2">status:  {{ $user->statuts}}</h2>

            </div>
        </div>
    </div>
</div>
@endsection()
