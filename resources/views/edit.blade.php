@extends('layouts.layout')

@section('main')
    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
        <form action="{{ route('book.update', $book->id) }} " method="post">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-4">
                <div class="mb-6">
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Name"
                        name="name">
                </div>
                <div class="mb-6">
                    <input type="text"
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Price"
                        name="price">
                </div>
                <input type="hidden" name="isbn" , value="{{ uniqid() }}">
                <button type="submit" class="w-full px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Create</button>
        </form>
    </div>
@endsection
