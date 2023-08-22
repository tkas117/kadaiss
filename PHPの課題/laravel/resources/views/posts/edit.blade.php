<x-layout>
    <a href="{{ route('text.posts', $post->id)}}" class="re">戻る</a>
    <h1>更新画面</h1>
    <form action="{{ route('update.posts', $post->id) }}" method="post">
        @csrf
        @method('PATCH')

        <label>
            Title
            <input type="text" name="title" value="{{ old('title',
            $post->title) }}">
        </label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <label>
            Detail
            <textarea name="detail"  rows="10">{{ old('detail',$post->detail) }}</textarea>
        </label>
        @error('detail')
            <div class="error">{{ $message }}</div>
        @enderror
        <div class="btn"><button>更新</button></div>
    </form>
</x-layout>
