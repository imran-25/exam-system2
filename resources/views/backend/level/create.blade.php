@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Levels</div>
                <a href="{{ route('levels.index') }}" class="btn btn-primary">Level</a>
            </div>
            <div class="card-body">
                <form action="{{ route('levels.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">

                        <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">

                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
