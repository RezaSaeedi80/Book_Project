@extends('layouts.layout')


@section('main')
    <div class="flex flex-col gap-5">
        @if ($books)
            @foreach ($books as $book)
                <x-card :card="$book">
                </x-card>
            @endforeach
            {{ $books->links() }}
        @else
            Book not exist
        @endif
    </div>
@endsection
