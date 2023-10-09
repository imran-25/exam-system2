@extends('backend.master')

@section('content')
    <div class="container my-5">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-end">
                <div class="card-title">Questions</div>
                <a href="{{ route('questionbanks.create') }}" class="btn btn-primary">Add Question</a>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Option1</th>
                            <th scope="col">Optio2</th>
                            <th scope="col">Option3</th>
                            <th scope="col">Option4</th>
                            <th scope="col">Level</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $question->title }}</td>
                                <td>{{ $question->option1 ?? ''}}</td>
                                <td>{{ $question->option2 ?? ''}}</td>
                                <td>{{ $question->option3 ?? ''}}</td>
                                <td>{{ $question->option4 ?? ''}}</td>
                                <td class="d-flex">
                                    <a href="{{ route('questions.edit', $question->id) }}"
                                        class="btn btn-primary btn-sm mx-1 font-size-lg "><i
                                            class="bi bi-pencil-square"></i></a>

                                    <form action="{{ route('questions.destroy', $question->id) }}" method="POST">

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
