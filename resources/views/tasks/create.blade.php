@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">Create New Task</h5>
                <div class="card-body">
                    <form action={{ route('store')}} method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Task Name : </label>
                          <input type="text" class="form-control @error('task_name') is-invalid @enderror " name="task_name" id="name" aria-describedby="emailHelp">
                        </div>

                        @error("task_name")
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                          <label for="Priority" class="form-label">Priority : </label>
                          <input type="text" class="form-control" name="priority">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" name="done" id="done">
                          <label class="form-check-label"  for="done">Commpleted</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
