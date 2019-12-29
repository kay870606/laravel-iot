@extends('layout')

@section('content')

    <h1 class="title">里程數</h1>

    <div class="content">
        <p>
            <strong>前進次數:  </strong><small>{{ $forward_count }}</small>
        </p>
    </div>

    <div class="content">
        <p>
            <strong>後退次數:  </strong><small>{{ $back_count }}</small>
        </p>
    </div>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>ID</th>
                <th>操作</th>
                <th>時間</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($commands as $command)
                <tr>
                    <th>{{$command->id}}</th>
                    <td>{{$command->operation}}</td>
                    <td>{{$command->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
