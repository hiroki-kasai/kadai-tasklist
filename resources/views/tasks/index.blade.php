@extends('layouts.app')

@section('content')

 <h1>Tasklist</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>task</th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {{-- タスク作成ページへのリンク --}}
    {!! link_to_route('tasks.create', 'タスクの登録', [], ['class' => 'btn btn-primary']) !!}

@endsection