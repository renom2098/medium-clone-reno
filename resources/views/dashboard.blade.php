{{-- Coba1 --}}
<x-app-layout>

    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    
                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">
                        <li class="me-2">
                            <a href="#"  class="inline-block px-4 py-3 text-white bg-blue-600 rounded-lg active">All</a>
                        </li>
                        @foreach ($categories as $category)
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-3 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="mt-8 text-gray-900">
                @forelse ($posts as $post)           
                    <x-post-item :post="$post"></x-post-item>
                @empty
                    <div class="text-center text-gray-400 py-16">No Posts Found!</div>
                @endforelse
            </div>
            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>

</x-app-layout>
