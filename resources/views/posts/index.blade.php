<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>
    </x-slot>
    
    <h1>一人旅ブログ</h1>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='destination'>
                    <a href="/posts/{{ $post->id }}">{{ $post->destination }}</a></h2>
                <p class='comment'>{{ $post->comment }}</p>
            </div>
        @endforeach
        <a href='/posts/create'>create</a>
    </div>
</x-app-layout> 