@extends('admin.dashboard')

@section('content')
<div class="flex justify-end">
    <div class="bg-gray-100">
        <div class="flex p-6 mx-auto  ">
            <div class="bg-white shadow-md rounded-lg p-4 w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Loan Management</h2>
                <form action="{{route('admin.add.loan_type')}}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="loanType" class="block text-gray-700 font-medium">Loan Type</label>
                        <input type="text" id="loanType" name="loanType" placeholder="Loan type" class="bg-gray-100 p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
                    </div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">Submit</button>
                </form>
            </div>
            <div class="w-1/2 ml-4 bg-white shadow-md rounded-lg p-4">
                <h2 class="text-2xl font-semibold mb-4">Loan Type Records</h2>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Serial Number</th>
                            <th class="px-4 py-2">Loan Type</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($loans as $loan)
                            <tr>
                                <td class="px-4 py-2">{{$loan->id}}</td>
                                <td class="px-4 py-2">{{$loan->name}}</td>
                                <td class="px-4 py-2">

                                    <a href="{{route('admin.edit.loan_type',$loan->id)}}" class="bg-blue-500 text-white py-1 px-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Update</a>

                                    <form action="{{route('admin.delete.loan_type',$loan->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-red-200 focus:ring-opacity-50">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        <!-- Add more records as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
