<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>
    </x-slot>
    
        <h1 class="destination">
            {{ $post->destination }}
        </h1>
        <div class="comment">
            <div class="comment__post">
                <h3>コメント：{{ $post->comment }}</h3>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。" class="w-56"/>
                <p>ジャンル：{{ $post->genre->name }}</p>
            </div>
        </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
</x-app-layout> 