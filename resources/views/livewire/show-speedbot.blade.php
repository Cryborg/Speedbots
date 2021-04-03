<div>
    <div class="card">
        <div class="card-header">
            {{ $ship->name }}
        </div>
        <div class="card-body">
            <div>{{ $ship->class }}</div>
            <div>{{ $ship->health }}</div>
        </div>
        <div class="card-footer">
            <div>
                {{ $ship->in_orbit_of }}
            </div>
        </div>
    </div>
</div>
