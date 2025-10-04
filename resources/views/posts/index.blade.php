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
                        <x-slot name="body">
                            @forelse ($posts as $post)
                                <tr>
                                    <td data-label="ID" class="px-6 py-4 text-sm text-white">
                                        {{ $post->id }}
                                    </td>
                                    <td data-label="Title" class="px-6 py-4 text-sm text-white">
                                        {{ $post->title }}
                                    </td>
                                    <td data-label="Content" class="px-6 py-4 text-sm text-white">
                                        {{ $post->content }}
                                    </td>
                                    <td data-label="Slug" class="px-6 py-4 text-sm text-white">
                                        {{ $post->slug }}
                                    </td>
                                    <td data-label="Actions" class="px-6 py-4 text-sm text-white">
                                        <a href="{{ route('posts.edit', $post) }}">
                                            <x-primary-button>
                                                {{ __('Edit') }}
                                            </x-primary-button>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="{{ count($headers) }}" class="px-6 py-4 text-center text-sm text-gray-800">
                                        No posts found.
                                    </td>
                                </tr>
                            @endforelse
                        </x-slot>
                    </x-responsive-table>

                    {{-- Pagination links --}}
                    <div class="mt-4">
                        {{ $posts->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
