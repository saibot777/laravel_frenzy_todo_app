@extends('layouts.main')

@section('title', 'FRENZY Todo App')


@section('content')
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="pull-left">
                        <h1 class="header-title">Frenzy Todo List</h1>
                    </div>
                    <div class="pull-right">
                        <a href="{{ route('todolists.create') }}" class="btn btn-success show-todolist-modal" title="Create a new list">Create a new list</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--MAIN-CONTENT-->
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <?php $count = $todoLists->count() ?>
                <div class="alert alert-warning {{ $count ? 'hidden' : '' }}" id="no-record-alert">
                    No records found.
                </div>
                <div class="alert alert-success" id="update-alert" style="display: none;"></div>
                <div class="panel panel-default {{ ! $count ? 'hidden' : '' }}">
                    <ul class="list-group" id="todo-list">
                        @foreach($todoLists as $todoList)
                            @include('todolists.item', compact('todoList'))
                        @endforeach
                    </ul>
                    <div class="panel-footer">
                        <small><span id="todo-list-counter">{{ $count }}</span> <span>{{ $count > 1 ? 'records' : 'record' }}</span> items</small>
                    </div>
                </div>
            </div>
            
            @include('todolists.todolistmodal')

            @include('todolists.taskmodal')

            @include('todolists.confirmmodal')

            
        </div>
    </div>
@endsection