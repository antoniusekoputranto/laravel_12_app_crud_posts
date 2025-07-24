@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-gradient bg-primary text-white text-center">
                    <h4 class="mb-0"><i class="bi bi-file-earmark-plus me-2"></i> Tambah Post</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf

                        <div class="form-floating mb-4">
                            <input type="text" name="title" id="title"
                                class="form-control @error('title') is-invalid @enderror"
                                placeholder="Judul" value="{{ old('title') }}" required>
                            <label for="title">Judul</label>
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <textarea name="content" id="content"
                                class="form-control @error('content') is-invalid @enderror"
                                placeholder="Konten" style="height: 150px;" required>{{ old('content') }}</textarea>
                            <label for="content">Konten</label>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left-circle me-1"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-save me-1"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
