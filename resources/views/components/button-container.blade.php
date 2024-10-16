{{-- resources/views/components/button-container.blade.php --}}
<div class="btn-container">
    <a class="btn btn-primary me-2" href="{{ $createUrl }}">
        <i class="fas fa-plus-circle"></i> {{ $createText }}
    </a>
    <a class="btn btn-danger" href="{{ $pdfUrl }}">
        <i class="fas fa-file-pdf"></i> {{ $pdfText }}
    </a>
</div>
