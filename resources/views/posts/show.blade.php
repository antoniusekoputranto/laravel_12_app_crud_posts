@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-info text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="bi bi-journal-text me-2"></i> {{ $post->title }}
                    </h4>
                    <span class="badge bg-light text-dark">Detail Post</span>
                </div>
                <div class="card-body">
                    <p class="card-text fs-5 text-muted">{{ $post->content }}</p>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left-circle me-1"></i> Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
