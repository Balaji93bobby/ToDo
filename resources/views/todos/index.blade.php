@extends('layouts.app')

@section('content')
    <!-- Create Task Form... -->

    <!-- Current Tasks -->
    @if (count($todos) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current todos
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Todo</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($todos as $todo)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $todo->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $todo->description }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $todo->completed }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $todo->users }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection