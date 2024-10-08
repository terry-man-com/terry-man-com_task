<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <h1>タスク編集</h1>
        <div class="edit-wrapper">
            <form action="{{ route('tasks.update', $task) }}" method="post">
                @csrf
                @method('PATCH')
                <p>
                    <label for="title">タイトル</label><br>
                    <input type="text" name="title" id="id" value="{{ $task->title }}">
                </p>
                <p>
                    <label for="body">本文</label><br>
                    <textarea name="body" id="body">{{ $task->body }}</textarea>
                </p>
                <div class="button-area">
                    <input type="submit" value="更新">
                    <button onclick="location.href='{{ route('tasks.show', $task) }}'">詳細に戻る</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>