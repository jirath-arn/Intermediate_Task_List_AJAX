@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header -->
    <div class="d-flex bd-highlight mb-4">
        <div class="p-2 w-100 bd-highlight">
            <h2>Tasks</h2>
        </div>
        <div class="p-2 flex-shrink-0 bd-highlight">
            <button class="btn btn-success" id="btn-add">Add new task</button>
        </div>
    </div>

    <div>
        <table class="table table-inverse">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody id="tasks-list" name="tasks-list">
                @foreach ($user->tasks as $data)
                <tr id="task{{$data->id}}">
                    <td>{{$data->id}}</td>
                    <td>{{$data->description}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="modal fade" id="formModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="formModalLabel">Create Task</h4>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" name="myForm" class="form-horizontal" novalidate="">

                            <div class="form-group">
                                <label for="description">Description</label>
                                    <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="">
                            </div>
                        </form>
                    </div>

                    <!-- Create Button -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-create" value="add">Create</button>
                        <input type="hidden" id="task_id" name="task_id" value="0">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection