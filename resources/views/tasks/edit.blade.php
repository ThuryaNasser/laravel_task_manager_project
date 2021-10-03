@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Edit Task</h5>
                <div class="card-body">
                    <form action={{ route('update',$task->id)}} method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                          <label for="name" class="form-label">Task Name : </label>
                          <input type="text" class="form-control @error('task_name') is-invalid @enderror " name="task_name" id="name" aria-describedby="emailHelp" value="{{$task->name}}">

                          @error("task_name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        </div>
                        <div class="mb-3">
                          <label for="Priority" class="form-label">Priority : </label>
                          <input type="text" class="form-control" name="priority" value="{{$task->priority}}">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" name="done" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" name="done" for="done"  {{$task->done?'checked':''}}>Commpleted</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
