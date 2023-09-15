@extends('dashboard.layouts.main')

@section('title')Categories @endsection

@section('container')
<div class="m-3">

    @if (session()->has('success'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
    </div>
    @endif

    <div class="card mx-3">
        <h5 class="card-header">@yield('title')</h5>
        <div class="col-md-4 mx-4">
            <a href="/dashboard/categories/create" class="btn btn-primary mb-3"><i class="bi bi-bookmark-plus"></i>
                Create New</a>
        </div>
        <div class="table-responsive text-nowrap px-4 pb-2">
            <table class="table table-striped table-bordered border-dark text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $loop->iteration
                                }}</strong>
                        </td>
                        <td>{{ $category->name }}</td>
                        <td><a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-sm btn-warning">
                                <i class=" bx bx-edit-alt me-1"></i> Edit
                            </a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal{{ $category->slug }}">
                                    <i class="bi bi-trash"></i> Delete
                                </button>

                                <div class="modal fade" id="deleteModal{{ $category->slug }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus data {{ $category->name }}?
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
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
