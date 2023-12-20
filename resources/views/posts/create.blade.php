<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('blog') }}
        </h2>
    </x-slot>
    
        <h1>一人旅ブログ</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="destination">
                <h2>目的地</h2>
                <input type="text" name="post[destination]" placeholder="目的地"/>
            </div>
            <div class="comment">
                <h2>コメント</h2>
                <textarea name="post[comment]" placeholder="コメント"></textarea>
            </div>
            <div class="image">
                <h2>写真</h2>
                <input type="file" name="image">
            </div>
            <div class="genre">
                <h2>ジャンル</h2>
                <select name="post[genre_id]">
            <option>-ジャンルを選択-</option>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
                 </select>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
   </x-app-layout> 