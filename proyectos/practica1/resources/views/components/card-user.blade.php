@props(['nombre'=>'','descripcion'=>''])

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <p>{{ $nombre }}</p>
        <div class="alert alert-primary">
            {{$descripcion}}
        </div>
        {{ $slot }}
    </div>
</div>