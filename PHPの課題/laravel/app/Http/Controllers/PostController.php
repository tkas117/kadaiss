<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->get();

        return view('index')->with(['posts' => $posts]);
    }

    public function text($id) {
        $post = Post::findOrfail($id);

        return view('posts.text')->with(['post' => $post]);
    }

    public function create() {
        return view('posts.create');
    }

    public function store(PostRequest $request){
        $post = new Post();
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('index.posts');
    }

        public function edit($id) {
        $post = Post::findOrfail($id);

        return view('posts.edit')->with(['post' => $post]);
    }

    public function update(PostRequest $request, $id){
        $post = Post::findOrfail($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->save();

        return redirect()->route('text.posts',$post->id);
    }

    public function destroy($id) {
        $post = Post::findOrfail($id);
        $post->delete();

        return redirect()->route('index.posts');
    }

    public function search(Request $request){
        $searchkey = $request->input('searchkey');

        $searchResults = Post::where('title', 'LIKE', '%' . $searchkey . '%')->get();

        return view('posts.search', compact('searchResults'));
    }

// ①$searchkey = $request->input('searchkey');
// ユーザーが入力した検索キーワードを取得して、$searchkey 変数に代入します。

// ②$searchResults = Post::where('title', 'LIKE', '%' . $searchkey . '%')->get();
// ・Post モデル（投稿モデル）の中から、タイトルが検索キーワードに部分一致する投稿を検索します。
// ・LIKE クエリ演算子を使用して、タイトルが検索キーワードを部分一致で含むかどうかを検索条件として設定します。
// ・get() メソッドを使用して、該当する全ての投稿を取得します。

//③ return view('posts.search', compact('searchResults'));
// ・search.blade.php ビューに検索結果を渡して表示するためのビューを指定します。
// ・compact('searchResults') は、searchResults 変数をビューに渡すための簡便な方法です。

}

