@props(['tipe' => 'info'])
<div class="alert alert-{{ $tipe }}" style="padding: 10px; margin-bottom: 10px; border: 1px solid-black;">
    <strong>Perhatian:</strong> {{ $slot }}
</div>