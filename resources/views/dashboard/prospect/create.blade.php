{{-- @extends('dashboard.layouts.main')

@section('title')Edit Jobs Prospect @endsection

@section('container')
<div class="m-3">
    <div class="col-lg-8 m-3">
        <div class="card shadow">

            <form method="post" action="/dashboard/prospect" enctype="multipart/form-data">

                <div class="card-body">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title') }}" placeholder="Title">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" disable placeholder="Slug">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
                        <label for="upload" class="btn btn-primary mt-2 btn-sm" tabindex="0">
                            <span class="d-none d-sm-block">Upload Image</span>
                            <i class="bx bx-upload d-block"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden
                                accept="image/png, image/jpeg">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </label>
                        <button type="button" class="btn btn-outline-secondary mt-2 account-image-reset btn-sm">
                            <i class="bx bx-reset d-block"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body') }}">
                        <trix-editor input="body" aria-placeholder="Body"></trix-editor>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="/dashboard/prospect" class="btn btn-outline-secondary me-2">
                            <i class="bi bi-x-circle"></i> Close
                        </a>
                        <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/prospects/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })
</script>
@endsection --}}

<form method="post" action="/dashboard/prospect" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTambahLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus value="{{ old('title') }}" placeholder="Title">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug') }}" disable placeholder="Slug">
                        @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                            @if (old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar">
                        <label for="upload" class="btn btn-primary mt-2 btn-sm" tabindex="0">
                            <span class="d-none d-sm-block">Upload Image</span>
                            <i class="bx bx-upload d-block"></i>
                            <input type="file" id="upload" name="image" class="account-file-input" hidden
                                accept="image/png, image/jpeg">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </label>
                        <button type="button" class="btn btn-outline-secondary mt-2 account-image-reset btn-sm">
                            <i class="bx bx-reset d-block"></i>
                            <span class="d-none d-sm-block">Reset</span>
                        </button>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body') }}">
                        <trix-editor input="body" aria-placeholder="Body"></trix-editor>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>