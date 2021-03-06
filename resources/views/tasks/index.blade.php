@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>タスク一覧</h1>
    
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-6 col-sm-offset-2 col-sm-6 col-xs-12">
    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>    
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                        <td>{{ $task->content }}</td>
                        <td>{{ $task->status }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>    
    @endif
    {!! link_to_route('tasks.create', '新規タスクの投稿', null, ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    </div>

@endsection