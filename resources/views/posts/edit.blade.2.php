<! -- body内だけを表示しています。　-->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <from action="/posts/{{ $post->id }}" ,method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <input type='text' name='post[title]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="保存">
        </from>
    </dv>
</body>