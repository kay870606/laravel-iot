@extends('layout')

@section('content')

    <h1 class="title">行車紀錄</h1>

    <div class="content">
        <p>
            <strong>總共次數: </strong><small>{{ $count }}</small>
        </p>
    </div>


    <div class="content">
        <p>
            <strong>前進次數: </strong><small>{{ $forward_count }}</small>
        </p>
    </div>

    <div class="content">
        <p>
            <strong>後退次數: </strong><small>{{ $back_count }}</small>
        </p>
    </div>

    <div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
            <tr>
                <th>編號</th>
                <th>操作</th>
                <th>時間</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($commands as $command)
                <tr>
                    <th>{{$command->id}}</th>
                    <td>
                        @if($command->operation===0)
                            前進
                        @else
                            後退
                        @endif
                    </td>
                    <td>{{$command->updated_at}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
