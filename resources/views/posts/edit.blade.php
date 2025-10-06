<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form method="POST" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    @method('PUT')

                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title', $post->title) }}" class="border rounded w-full">
                    </div>

                    <div class="mt-4">
                        <label>Content</label>
                        <textarea name="content" class="border rounded w-full">{{ old('content', $post->content) }}</textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
                            Update Post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
