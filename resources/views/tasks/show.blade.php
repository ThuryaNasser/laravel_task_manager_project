@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <h5 class="card-header">Task Details</h5>
                <div class="card-body">
                  <h5 class="card-title">{{ $task->name}}</h5>
                  <p class="card-text">ID : {{ $task->id}}</p>
                  <p class="card-text">Priority : {{$task->priority}}</p>
                  <p class="card-text">Completed : {{$task->done ? 'True' : 'False'}}</p>
                </div>
                  <div class="modal-footer ">
                    <form action={{ route('delete',$task->id)}} method="POST">
                        @method(('DELETE'))
                        @csrf
                        <button type="submit"  class="btn btn-danger" >Delete 🗑️ </button>
                     </form>
                     <form action={{ route('edit',$task->id)}} method="GET">
                        @csrf
                        <button type="submit"  class="btn btn-primary" > Edit </button>
                     </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection
