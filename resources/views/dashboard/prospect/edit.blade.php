@extends('dashboard.layouts.main')

@section('title')Edit Jobs Prospect @endsection

@section('container')
<div class="m-3">
    <div class="col-lg-8 m-3">
        <div class="card shadow">

            <form method="post" action="/dashboard/prospect/{{ $prospect->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus placeholder="Title"
                            value="{{ old('title', $prospect->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $prospect->slug) }}" placeholder="Slug">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                            @if (old('category_id', $prospect->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        @if ($prospect->image)
                        <img src="{{ asset('storage/' . $prospect->image) }}" class="d-block rounded img-fluid"
                            id="uploadedAvatar" alt="user-avatar" />
                        @else
                        <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                            id="uploadedAvatar" />
                        @endif
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
                        <input id="body" type="hidden" name="body" required value="{{ old('body', $prospect->body) }}">
                        <trix-editor input="body"></trix-editor>
                    </div>

                    <div class="d-flex justify-content-end">
                        <a href="/dashboard/prospect/" class="btn btn-outline-secondary me-2">
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
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })

        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
</script>
@endsection


{{-- <form method="post" action="/dashboard/prospect/{{ $prospect->slug }}" enctype="multipart/form-data">
    <div class="modal fade" id="editModal{{ $prospect->id }}" tabindex="-1" role="dialog"
        aria-labelledby="editModalLabel{{ $prospect->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $prospect->id }}">Edit Prospect</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @method('put')
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title')
                      is-invalid
                  @enderror" id="title" name="title" required autofocus value="{{ old('title', $prospect->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug')
                  is-invalid
              @enderror" id="slug" name="slug" required value="{{ old('slug', $prospect->slug) }}">
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
                            @if (old('category_id', $prospect->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            @if ($prospect->image)
                            <img src="{{ asset('storage/' . $prospect->image) }}" class="d-block rounded img-fluid"
                                id="editedAvatar" alt="user-avatar" />
                            @else
                            <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                                id="editedAvatar" />
                            @endif

                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-start justify-content-sm-center">
                            <label for="upload" class="btn btn-primary mt-2" tabindex="0">
                                <span class="d-none d-sm-block">Upload Image</span>
                                <i class="bx bx-upload d-block"></i>
                                <input type="file" id="upload" name="image" class="edit-avatar-file-input" hidden
                                    accept="image/png, image/jpeg" />
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </label>
                            <button type="button" class="btn btn-outline-secondary edit-avatar-image-reset mt-2">
                                <i class="bx bx-reset d-block"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body', $prospect->body) }}">
                        <trix-editor input="body"></trix-editor>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="bi bi-x-circle"></i>
                        Close</button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</form> --}}

{{-- <form method="post" action="/dashboard/prospect/{{ $prospect->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal fade" id="editModal{{ $prospect->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalScrollableTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" required autofocus placeholder="Title"
                            value="{{ old('title', $prospect->title) }}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input type="hidden" class="form-control @error('slug') is-invalid @enderror" id="slug"
                            name="slug" required value="{{ old('slug', $prospect->slug) }}" placeholder="Slug">
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" name="category_id">
                            @foreach ($categories as $category)
                            @if (old('category_id', $prospect->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <img src="/assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded img-fluid"
                                id="uploadedAvatar" />
                        </div>
                        <div class="col-md-6 d-flex flex-column justify-content-start justify-content-sm-center">
                            <label for="upload" class="btn btn-primary mt-2" tabindex="0">
                                <span class="d-none d-sm-block">Upload Image</span>
                                <i class="bx bx-upload d-block"></i>
                                <input type="file" id="upload" name="image" class="account-file-input" hidden
                                    accept="image/png, image/jpeg" />
                                @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </label>
                            <button type="button" class="btn btn-outline-secondary mt-2 account-image-reset">
                                <i class="bx bx-reset d-block"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <input id="body" type="hidden" name="body" required value="{{ old('body', $prospect->body) }}">
                        <trix-editor input="body">{!! $prospect->body !!}</trix-editor>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle"></i> Close
                    </button>
                    <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Save</button>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
</script> --}}