<x-layout>
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
</x-layout>


