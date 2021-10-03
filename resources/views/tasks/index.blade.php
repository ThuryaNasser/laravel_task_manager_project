@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
              <h5 class="card-header list-group-item active list-group-item-primary">All Tasks
                <a href={{ route('create')}} class="btn btn-success">+</a>
              </h5>
              {{-- <a href={{ route('create')}} class="btn btn-sucsses">+</a> --}}

                    <div class="list-group">

                    @foreach ($tasks as $task)
                        <a href={{ route('task',$task->id)}} class="list-group-item list-group-item-action">
                            {{ $task->name}}  <!-- for call variable in blade -->
                        </a>
                      @endforeach

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
