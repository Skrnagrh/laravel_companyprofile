@extends('dashboard.layouts.main')

@section('title')Applicant @endsection

@section('container')

{{-- <div id="layoutSidenav" class="m-3">
    <div id="layoutSidenav_content">
        <div class="table-responsive col-lg-12 mr-3">

            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap  align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="">Job Application</h1>
            </div>
            <div class="card">
                <a href="/dashboard/apply/cetak" target="_blank" class="btn btn-success mb-3"><i
                        class="bi bi-bookmark-plus"></i> Cetak</a>
                <table class="table table-bordered border-dark">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gander</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Education</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apply1 as $apply)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $apply->title }}</td>
                            <td>{{ $apply->name }}</td>
                            <td>{{ $apply->gander }}</td>
                            <td>{{ $apply->email }}</td>
                            <td>{{ $apply->phone }}</td>
                            <td>{{ $apply->education }}</td>
                            <td>
                                @if ($apply->image)
                                <img src="{{ asset('storage/' . $apply->image) }}" class="img-fluid"
                                    alt="{{ $apply->name }}" style=" max-width: 20%; max-height: 20%;">
                                @endif
                            </td>
                            <td>
                                <a href="/dashboard/apply/{{ $apply->id }}" class="btn btn-success btn-small">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="/dashboard/apply/{{ $apply->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-center">
                    {{ $apply1->links() }}
                </div>
            </div>
        </div>
        @include('dashboard.partials.footer')
    </div>
</div> --}}

<div id="layoutSidenav" class="m-3">
    <div id="layoutSidenav_content">

        <div class="card mx-3">
            <h5 class="card-header">@yield('title')</h5>
            <div class="table-responsive text-nowrap px-4 pb-5">
                <table class="table table-striped table-bordered border-dark">
                    <thead class=" text-center">
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Education</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apply1 as $apply)
                        <tr>
                            <td><strong>{{ $loop->iteration }}</strong></td>
                            <td>{{ $apply->title }}</td>
                            <td>{{ $apply->name }}</td>
                            <td>{{ $apply->email }}</td>
                            <td>{{ $apply->phone }}</td>
                            <td>{{ $apply->education }}</td>
                            <td>
                                <!-- Tombol untuk memicu modal -->
                                <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#myModal{{ $apply->id }}">
                                    <i class="bi bi-eye"></i> Show
                                </a>

                                @include('dashboard.apply.show')

                                {{-- <a href="/dashboard/apply/{{ $apply->id }}" class="btn btn-success btn-sm">
                                    <i class="bi bi-eye"></i> Show
                                </a> --}}
                                <form action="/dashboard/apply/{{ $apply->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal{{ $apply->id  }}">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>

                                    <div class="modal fade" id="deleteModal{{ $apply->id  }}" tabindex="-1"
                                        aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda yakin ingin menghapus data {{ $apply->name }}?
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

                                {{-- <div class="col-lg-4 col-md-3">

                                    <div class="modal fade" id="modalScrollable" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content modal-xl">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                    <p>
                                                        Cras mattis consectetur purus sit amet fermentum. Cras justo
                                                        odio, dapibus ac facilisis
                                                        in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                                        vestibulum at eros.
                                                    </p>
                                                    <p>
                                                        Praesent commodo cursus magna, vel scelerisque nisl consectetur
                                                        et. Vivamus sagittis
                                                        lacus vel augue laoreet rutrum faucibus dolor auctor.
                                                    </p>
                                                    <p>
                                                        Aenean lacinia bibendum nulla sed consectetur. Praesent commodo
                                                        cursus magna, vel
                                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec
                                                        ullamcorper nulla non metus
                                                        auctor fringilla.
                                                    </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="demo-inline-spacing">

                                        <!-- Button ModalScrollable -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#modalScrollable">
                                            Option 2
                                        </button>
                                    </div>
                                </div> --}}
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
