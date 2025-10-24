<div>
    <!-- Be present above all else. - Naval Ravikant -->
    <div {{ $attributes->merge(['class'=>"alert $tipoAlerta"]) }}>
        {{ $slot }}
    </div>
</div>