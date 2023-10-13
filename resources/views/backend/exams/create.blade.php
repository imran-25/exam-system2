@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <a href="{{ route('subjects.index') }}" class="btn btn-primary">Exam List</a>

            </div>
            <div class="card-body">
                <form action="{{ route('exams.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Subject</label>
                        <select class="form-control" name="subject_id">
                            @forelse ($subjects as $subject)
                                <option value="{{ $subject->id }}">{{ $subject->name ?? '' }}</option>
                            @empty
                                <option>No Subject in Available</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Level</label>
                        <select class="form-control" name="level_id">
                           @isset($levels)
                               @foreach ($levels as $level)
                                <option value="{{ $level->id }}">{{ $level->name ?? ''}}</option>
                               @endforeach
                           @endisset
                        </select>
                    </div>

                    <div class="mb-3">

                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Exam Name">

                    </div>
                    

                    

                    <div class="mt-3">
                        <input type="number" name="duration" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Exam Duration">
                    </div>

                    <div class="mt-3">
                        <input type="number" name="total_questions" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Total Questions">
                    </div>
                    <button type="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
