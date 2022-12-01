<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
  @extends('todo.default')

  @section('content')
  <div class="body">
    <div class="card">
      <h2>Todo List</h2>
      <form action="todo" method="post">
        @csrf
        <input type="text" class="create" name="name">
        <input type="submit" class="create__btn" name="btn_name" value="追加">
      </form>
      <table class="table">
        <tr>
          <th class="padding">作成日</th>
          <th class="padding">タスク名</th>
          <th class="padding">更新</th>
          <th class="padding">削除</th>
        </tr>
        @foreach ($todos as $todo)
        <tr>
          <td class="padding">{{ $todo->created_at }}</td>
          <form action="/todo/update" method="POST">
            @csrf
            <td><input type="text" name="name" value="{{ $todo->name }}">
            </td>
          </form>
          <td class="padding">
            <button type="submit">更新</button>
          </td>
          <form action="{{ route('destroy',$todo->id) }}" method="POST">
            @csrf
            <td class="padding">
              <button type="submit">削除</button>
            </td>
          </form>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endsection
</body>

</html>