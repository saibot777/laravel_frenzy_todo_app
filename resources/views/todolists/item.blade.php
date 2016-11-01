<?php $count = $todoList->tasks->count() ?>
<li class="list-group-item" id="todo-list-{{ $todoList->id }}">
    <h4 class="list-group-item-heading">
        {{ $todoList->title }}<span class="badge">{{ $count }} {{ $count > 1 ? 'tasks' : 'task' }}</span>
    </h4>
    <p class="list-group-item-text">{{ $todoList->description }}</p>
    <div class="buttons">
        <a href="{{ route("todolists.show", $todoList->id) }}" class="btn btn-info show-task-modal btn-xs" data-title="{{ $todoList->title }}" title="Manage Tasks">
            <i class="glyphicon glyphicon-ok"></i>
        </a>
        <a href="{{ route('todolists.edit', $todoList->id) }}" class="btn btn-default show-todolist-modal btn-xs edit" title="Edit {{ $todoList->title }}">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('todolists.destroy', $todoList->id) }}" class="btn btn-danger btn-xs show-confirm-modal" data-title="{{ $todoList->title }}" title="Delete">
            <i class="glyphicon glyphicon-remove"></i>
        </a>
    </div>
</li>
