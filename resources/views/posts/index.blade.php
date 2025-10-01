<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-900 dark:text-gray-900 leading-tight">
            {{ __('Posts') }}
        </h2>
      </x-slot>
      
     {{-- @foreach ($posts as $post )
       <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}
       </div>
     @endforeach --}}

</x-app-layout>
