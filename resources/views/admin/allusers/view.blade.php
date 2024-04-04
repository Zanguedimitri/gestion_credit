@extends('admin.dashboard')

@section('content')

<div class="mr-10 flex justify-end">
    <div class="bg-white shadow-md rounded-lg p-4">
      <h2 class="text-2xl font-semibold mb-4">User Management</h2>
      <div class="overflow-x-auto">
        <table class="min-w-full table-auto border">
          <thead>
            <tr class="bg-gray-200">
              <th class="py-2 px-4">Serial Number</th>
              <th class="py-2 px-4">Name</th>
              <th class="py-2 px-4">Email</th>
              <th class="py-2 px-4">User Type</th>
              <th class="py-2 px-4">Make Admin</th>
              <th class="py-2 px-4">Action</th>
            </tr>
          </thead>
          <tbody>
        @foreach ($users as $user)
            <tr>
              <td class="py-2 px-4">{{$user->id}}</td>
              <td class="py-2 px-4">{{$user->name}}</td>
              <td class="py-2 px-4">{{$user->email}}</td>
              <td class="py-2 px-4">{{$user->role}}</td>
              <td class="py-2 px-4">

                <label class="switch">
                    <input type="checkbox" {{ $user->role === 'admin' ? 'checked' : '' }}>
                    <span class="slider"></span>
                </label>

              </td>
              <td class="py-2 px-4">
                <button class="bg-blue-500 text-white py-1 px-3 rounded-md hover:bg-blue-600 transition duration-200">View Details</button>

                <form action="{{route('admin.delete.user'),$user->$id}}">
                    @method("delete")
                    <button class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 transition duration-200 ml-2">Delete</button>
                </form>
              </td>
            </tr>
            <!-- Add more rows as needed -->
        @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
