@extends('layout.admin')
@section('content')
<div class="app-content">
    <div class="side-app">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Edit Eulogy</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Manage Content</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.eulogy.index') }}">Eulogies</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </div>
        </div>
        <!-- PAGE-HEADER END -->

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- ROW-1 OPEN -->
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <form action="{{ route('admin.eulogy.update', $eulogy->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Eulogy</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="page_number">Page Number</label>
                                        <input type="number" class="form-control" id="page_number" name="page_number"
                                            value="{{ old('page_number', $eulogy->page_number) }}"
                                            placeholder="Enter page number">
                                        <small class="text-muted">Leave blank to add to the end</small>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Eulogy Image</label>
                                        <input type="file" class="form-control" id="image" name="image" onchange="previewImage(this)">
                                        <small class="text-muted">Leave blank to keep current image</small>
                                        <div class="mt-3">
                                            <p>Current Image:</p>
                                            <img src="{{ asset('storage/' . $eulogy->image_path) }}" alt="Current Eulogy" class="img-fluid" style="max-height: 300px;">
                                        </div>
                                        <div class="mt-3" id="imagePreviewContainer" style="display:none;">
                                            <p>New Image Preview:</p>
                                            <img id="imagePreview" src="#" alt="Preview" class="img-fluid" style="max-height: 300px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success mt-1">Update</button>
                                <a href="{{ route('admin.eulogy.index') }}" class="btn btn-danger mt-1">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
    </div>
</div>

<script>
    function previewImage(input) {
        const previewContainer = document.getElementById('imagePreviewContainer');
        const previewImage = document.getElementById('imagePreview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
