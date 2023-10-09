@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Subjects</div>
                <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subject</a>
            </div>
            <div class="card-body">
                <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                        <input type="email" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Image</label>
                        <div class="col-lg-12">

                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
