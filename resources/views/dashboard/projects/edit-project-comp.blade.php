
<x-edit-model title="Edit Project">
    <div class="row">
        <div class="mb-3 col">
            <label for="nameWithTitle" class="form-label">Name</label>
            <input type="text" id="nameWithTitle" class="form-control" placeholder="Enter Name"
                wire:model="name">
            @include('dashboard.error', ['property' => 'name'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="progressWithTitle" class="form-label">Link</label>
            <input type="text" id="progressWithTitle" class="form-control"
                placeholder="Enter Link" wire:model="link">
            @include('dashboard.error', ['property' => 'link'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="progressWithTitle" class="form-label">Category</label>
            <select name="" id="" wire:model="category_id" class="form-control">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" wire:key="category_{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @include('dashboard.error', ['property' => 'category_id'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="progressWithTitle" class="form-label">Description</label>
            <textarea name="" id="" wire:model="description" class="form-control"></textarea>
            @include('dashboard.error', ['property' => 'description'])
        </div>
    </div>
    <div class="row g-2">
        <div class="mb-0 col">
            <label for="progressWithTitle" class="form-label">Image</label>
            <input type="file" id="progressWithTitle" class="form-control" placeholder="Enter Image"
                wire:model="new_image">
            @if ($new_image)
                <img src="{{ $new_image->temporaryUrl() }}" alt="" width="100">
            @endif
            @include('dashboard.error', ['property' => 'new_image'])
        </div>
    </div>
 </x-edit-model>
