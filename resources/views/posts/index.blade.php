<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>
    </x-slot>
    
    <h1>一人旅ブログ</h1>
    <div>
      <form action="{{ route('posts.index') }}" method="GET">
        <input type="text" name="keyword" value="{{ $keyword }}">
        <input type="submit" value="検索">
      </form>
    </div>
    <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='destination'>
                    <a href="/posts/{{ $post->id }}">{{ $post->destination }}</a></h2>
                <p class='comment'>{{ $post->comment }}</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            </div>
        @endforeach
        <a href='/posts/create'>create</a>
    </div>
    <script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>
</x-app-layout> 