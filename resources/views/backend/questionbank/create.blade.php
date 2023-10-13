@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Questions</div>
                <a href="{{ route('questionbanks.index') }}" class="btn btn-primary">Question Bank</a>
            </div>
            <div class="card-body">
                <form action="{{ route('questionbanks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 d-flex flex-column">
                        <label class="form-label">Subject</label>
                        <select class="form-select p-2 border" name="subject_id">
                            @forelse ($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @empty
                                No Subjects Is Availabe
                            @endforelse
                        </select>

                        <label class="form-labe mt-3">Level</label>
                        <select class="form-select p-2 border" name="level_id">
                            @forelse($levels as $level)
                                <option value="{{$level->id}}">{{$level->name}}</option>
                            @empty
                                No Levels Is Availabe
                            @endforelse
                        </select>

                        <label class="form-label mt-2">Title</label>
                        <input type="text" class="form-control" name="title" value="" >
                    </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="option1" value="" class="form-control" id="option1" placeholder="Option 1">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="option2" value="" class="form-control" id="option2" placeholder="Option 2">
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-lg-6">
                                <input type="text" name="option3" value="" class="form-control" id="option3" placeholder="Option 3">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="option4" value="" class="form-control" id="option4" placeholder="Option 4">
                            </div>
                        </div>
                        
                        <input type="number" class="form-control mt-2" name="correct_answer" value="" placeholder="Correct Answer">

                    
                    
                    <button type="submit" class="btn btn-success mt-3">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
