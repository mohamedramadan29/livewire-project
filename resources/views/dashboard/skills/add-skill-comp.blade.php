<x-create-model title="Add New Skill">
    <div class="row">
        <div class="mb-3 col">
            <label for="nameWithTitle" class="form-label">Name</label>
            <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name" wire:model="name">
            @include('dashboard.error', ['property' => 'name'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="progressWithTitle" class="form-label">Progress</label>
            <input type="number" id="progressWithTitle" class="form-control" placeholder="Enter Progress"
                min="0" max="100" wire:model="progress">
            @include('dashboard.error', ['property' => 'progress'])
        </div>
    </div>
</x-create-model>
