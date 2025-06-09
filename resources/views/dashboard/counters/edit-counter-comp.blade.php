<x-edit-model title="Edit Counter">
    <div class="row">
        <div class="mb-3 col">
            <label for="nameWithTitle" class="form-label">Name</label>
            <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" wire:model="name">
            @include('dashboard.error', ['property' => 'name'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="countWithTitle" class="form-label">Count</label>
            <input type="number" id="countWithTitle" class="form-control" placeholder="Enter Count" min="0"
                max="100" wire:model="count">
            @include('dashboard.error', ['property' => 'count'])
        </div>
    </div>
    <div class="row">
        <div class="mb-3 col">
            <label for="iconWithTitle" class="form-label">Icon</label>
            <input type="text" id="iconWithTitle" class="form-control" placeholder="Enter Icon" wire:model="icon">
            @include('dashboard.error', ['property' => 'icon'])
        </div>
    </div>
</x-edit-model>
