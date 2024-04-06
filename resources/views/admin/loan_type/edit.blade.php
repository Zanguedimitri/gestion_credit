@extends('admin.dashboard')

@section('content')

<div class="flex justify-center">
    <div class="bg-white shadow-md rounded-lg p-4 w-1/2">
        <h2 class="text-2xl font-semibold mb-4">Loan Management</h2>
        <form action="{{route('admin.update.loan_type',$loan->id)}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="loanType" class="block text-gray-700 font-medium">Loan Type</label>
                <input type="text" id="loanType" name="loanType" value="{{$loan->name}}" placeholder="Loan type" class="bg-gray-100 p-2 mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 w-full">Submit</button>
        </form>
    </div>
</div>
@endsection
