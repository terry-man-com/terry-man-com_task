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
        <h1>タスク一覧</h1>
            <div class="task-wrapper">
                <ul>
                    @foreach ($tasks as $task)
                    <li class="task-items">    
                        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <div class="create-wrapper">
                <h1>新規タスク登録</h1>
                <form action="{{ route('tasks.store') }}" method="post">
                    @csrf
                    <p>
                        <label for="title">タイトル</label><br>
                        <input type="text" name="title" id="title">
                    </p>
                    <p>
                        <label for="body">本文</label><br>
                        <textarea name="body" id="body"></textarea>
                    </p>
                        <input type="submit" value="Create Task">
                    </form>
            </div>
    </div>
</body>
</html> 