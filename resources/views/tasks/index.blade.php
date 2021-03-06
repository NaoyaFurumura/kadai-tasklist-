@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if(count($tasks)>0)
        <table class="table table-hover">
            <thread>
                <tr>
                    <th>id</th>
                    <th>状態</th>
                    <th>タスク</th>
                </tr>
            </thread>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{!! link_to_route('tasks.show',$task->id,['task'=> $task->id]) !!}}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content}}</td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        
        
    @endif
    
    
   {!! link_to_route('tasks.create', '新規タスクを追加する', [], ['class' => 'btn btn-primary']) !!}
{{ $tasks->links() }}
@endsection