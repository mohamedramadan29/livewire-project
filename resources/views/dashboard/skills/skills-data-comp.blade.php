<div>
    <div class="mb-3 form-search" style="width: 250px;">
        <input wire:model.live='search' type="text" class="form-control" placeholder="Search ... ">
    </div>
    <div class="table-responsive text-nowrap">
        @if(count($skills) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name </th>
                    <th>Progress </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($skills as $skill )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $skill->name }}</td>
                    <td>{{ $skill->progress }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('SkillUpdate',{id:{{ $skill->id }}})" ><i
                                        class="bx bx-edit-alt me-1"></i> Edit</a>
                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('SkillDelete',{id:{{ $skill->id }}})"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $skills->links() }}
        @else
        <span class="text-danger"> No Data Found  </span>
        @endif

    </div>
</div>
