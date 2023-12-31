{{-- <x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('search.posts' )}}" method="get">
        @csrf

        <label>
            Title検索
            <input type="text" name="searchkey" value="{{ request('searchkey') }}">
        </label>
        <div class="btn"><button type="submit">検索</button></div>
    </form>

    <h2>検索結果</h2>
    @if(request()->has('searchkey'))
        @if(isset($searchResults) && $searchResults->count() > 0)
            <ul>
                @foreach ($searchResults as $result)
                    <li>
                        <a href="{{ route('text.posts', $result->id) }}">{{ $result->title }}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>該当する結果はありません。</p>
        @endif
    @endif
</x-layout> --}}

<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a> <!-- 戻るリンク -->
    <h1>検索画面</h1> <!-- ページのタイトル -->

    <!-- 検索フォーム -->
    <form action="{{ route('search.posts' )}}" method="get">
        @csrf
        <label>
            Title検索 <!-- Titleを検索するためのフォームラベル -->
            <input type="text" name="searchkey" value="{{ request('searchkey') }}"> <!-- 検索キーワード入力欄 -->
        </label>
        <div class="btn"><button type="submit">検索</button></div> <!-- 検索ボタン -->
    </form>

    <h2>検索結果</h2> <!-- 検索結果の見出し -->

    <!-- 検索キーワードが入力されている場合のみ表示 -->
    @if(request()->has('searchkey'))
        <!-- 検索結果がある場合 -->
        @if(isset($searchResults) && $searchResults->count() > 0)
            <ul>
                <!-- 検索結果をリストとして表示 -->
                @foreach ($searchResults as $result)
                    <li>
                        <a href="{{ route('text.posts', $result->id) }}">{{ $result->title }}</a> <!-- 検索結果のTitleへのリンク -->
                    </li>
                @endforeach
            </ul>
        <!-- 検索結果がない場合 -->
        @else
            <p>該当する結果はありません。</p> <!-- メッセージ表示 -->
        @endif
    @endif
</x-layout>



