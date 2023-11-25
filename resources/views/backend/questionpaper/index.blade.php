@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">questionpapers</div>
                <a href="{{ route('questionpapers.create') }}" class="btn btn-primary">Add questionpaper</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Option1</th>
                            <th scope="col">Option2</th>
                            <th scope="col">Option3</th>
                            <th scope="col">Option4</th>
                            <th scope="col">Correct Answer</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questionpapers as $key => $questionpaper)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $questionpaper->title }}</td>
                                <td>{{ $questionpaper->option1 ?? ''}}</td>
                                <td>{{ $questionpaper->option2 ?? ''}}</td>
                                <td>{{ $questionpaper->option3 ?? ''}}</td>
                                <td>{{ $questionpaper->option4 ?? ''}}</td>
                                <td>{{ $questionpaper->correct_answer ?? ''}}</td>
                                <td>{{ $questionpaper->subject_id ?? ''}}</td>
                                <td>{{ $questionpaper->level_id ?? ''}}</td>
                                <td class="d-flex">
                                    <a href="{{ route('questionpapers.edit', $questionpaper->id) }}"
                                        class="btn btn-primary btn-sm mx-1 font-size-lg "><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('questionpapers.destroy', $questionpaper->id) }}" method="POST">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm font-size-lg  "><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
