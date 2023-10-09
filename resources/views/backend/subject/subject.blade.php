@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Subjects</div>
                <a href="{{ route('subjects.create') }}" class="btn btn-primary">Add Subject</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Image</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subjects as $key => $subject)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->image }}</td>
                                <td>@mdo</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
