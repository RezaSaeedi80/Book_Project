{{-- @dd($attributes['card']) --}}

<div class="w-fit">
    <div class="flex w-[300px] justify-center">
        <div class="rounded-lg shadow-lg w-full bg-white max-w-sm">
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $attributes['card']['name'] }}</h5>
                <p class="text-gray-700 text-base mb-4">
                    {{ $attributes['card']['price'] }}
                </p>
                <div class="flex flex-col gap-3">
                    <a href="{{ route('book.show', $attributes['card']['id'])  }}" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Show
                    </a>
                    <a href="{{ route('book.edit', $attributes['card']['id'])  }}" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit
                    </a>
                    <a href="{{ route('book.show', $attributes['card']['id'])  }}" class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Delete
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
