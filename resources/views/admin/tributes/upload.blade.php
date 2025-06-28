@extends('layout.admin')
@section('content')
<div class="app-content">
    <div class="side-app">


        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Upload Tribute</h1>
                <!-- <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol> -->
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row justify-content-center">


            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <form action="{{ route('admin.tributes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload Tributes</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="page_number">Page Number</label>
                                        <input type="number" class="form-control" id="page_number" name="page_number" placeholder="Enter page number">
                                        <small class="text-muted">Leave blank to add to the end</small>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="image">Tribute Image</label>
                                        <input type="file" class="form-control" id="image" name="image" required onchange="previewImage(this)">
                                        <div class="mt-3" id="imagePreviewContainer" style="display:none;">
                                            <img id="imagePreview" src="#" alt="Preview" class="img-fluid" style="max-height: 300px;">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <div class="custom-controls-stacked mt-4">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="is_cover" value="1">
                                                <span class="custom-control-label">Set as cover page</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-success mt-1">Save</button>
                                <button type="reset" class="btn btn-danger mt-1" onclick="resetPreview()">Cancel</button>
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

    function resetPreview() {
        document.getElementById('imagePreviewContainer').style.display = 'none';
        document.getElementById('imagePreview').src = '#';
    }
</script>
@endsection
