@extends('dashboard.layouts.main')

@section('title')News @endsection

@section('container')

<div class="m-3">

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow m-3">
        <h5 class="card-header">@yield('title')</h5>
        <div class="col-md-3 mx-4">
            <a href="/dashboard/news/create" class="btn btn-primary mb-3"><i class="bi bi-bookmark-plus"></i> Create
                New</a>
        </div>
        <div class="table-responsive text-nowrap px-4 pb-4">
            <table class="table table-striped table-bordered border-dark text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Waktu</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news1 as $news)
                    <tr>
                        <td><strong>{{ $loop->iteration }}</strong>
                        </td>
                        <td>{{ $news->title }}</td>
                        <td>{{ $news->category->name }}</td>
                        <td>{{ $news->created_at->diffForHumans() }}</td>
                        <td>
                            <div class="d-flex align-items-center justify-content-center">
                                <a href="/dashboard/news/{{ $news->slug }}" class="btn btn-success btn-sm mx-2">
                                    <i class="bi bi-eye-fill"> Show</i>
                                </a>
                                <a href="/dashboard/news/{{ $news->slug }}/edit"
                                    class="btn btn-warning btn-sm mx-2 text-white">
                                    <i class="bi bi-pen"></i> Edit
                                </a>

                                <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $news->slug }}">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>

                                    <div class="modal fade" id="deleteModal{{ $news->slug }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delet</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data {{ $news->title }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </td>
                        {{-- <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                    data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">

                                    <a href="/dashboard/news/{{ $news->slug }}/edit" class="dropdown-item">
                                        <i class="bx bx-edit-alt me-1"> Edit</i>
                                    </a>
                                    <form action="/dashboard/news/{{ $news->slug }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item border-0"
                                            onclick="return confirm('Are you sure?')"><i class="bx bx-trash-alt me-1">
                                                Delete</i></button>
                                    </form>
                                </div>
                            </div>
                        </td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
