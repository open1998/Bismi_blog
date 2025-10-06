<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-900 dark:text-gray-900 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @php
                        $headers = ['ID', 'Title', 'Content', 'Slug', 'Actions'];
                    @endphp

                    <x-responsive-table :headers="$headers">
                        <!-- Table Header -->
                        <x-slot name="header">
                            <tr>
                                @foreach ($headers as $header)
                                    <th class="px-6 py-3 text-sm font-medium uppercase tracking-wider
                                               {{ $header === 'Actions' ? 'text-center' : '' }}">
                                        {{ $header }}
                                    </th>
                                @endforeach
                            </tr>
                        </x-slot>

                        <!-- Table Body -->
                        <x-slot name="body">
                            @forelse ($posts as $post)
                                <tr class="bg-gray-800">
                                    <td class="px-6 py-4 text-sm text-white">{{ $post->id }}</td>
                                    <td class="px-6 py-4 text-sm text-white">{{ $post->title }}</td>
                                    <td class="px-6 py-4 text-sm text-white">{{ $post->content }}</td>
                                    <td class="px-6 py-4 text-sm text-white">{{ $post->slug }}</td>
                                    <td class="px-6 py-4 text-sm text-white text-center">
                                        <div class="flex items-center justify-center gap-3">
                                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}">
                                                <x-primary-button>{{ __('Edit') }}</x-primary-button>
                                            </a>

                                            <form action="{{ route('posts.destroy', ['post' => $post->id]) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Are you sure you want to delete this post?');">
                                                @csrf
                                                @method('DELETE')
                                                <x-primary-button
                                                    class="!bg-red-600 hover:!bg-red-700 focus:!bg-red-700 active:!bg-red-800 text-white">
                                                    {{ __('Delete') }}
                                                </x-primary-button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ count($headers) }}"
                                        class="px-6 py-4 text-center text-sm text-gray-800">
                                        No posts found.
                                    </td>
                                </tr>
                            @endforelse
                        </x-slot>
                    </x-responsive-table>

                    <!-- Pagination -->
                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
