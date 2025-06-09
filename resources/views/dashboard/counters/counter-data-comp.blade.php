<div>
    <div class="mb-3 form-search" style="width: 250px;">
        <input wire:model.live='search' type="text" class="form-control" placeholder="Search ... ">
    </div>
    <div class="table-responsive text-nowrap">
        @if (count($counters) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Count </th>
                        <th>Icon </th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($counters as $counter)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $counter->name }}</td>
                            <td>{{ $counter->count }}</td>
                            <td>{{ $counter->icon }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('CounterUpdate',{id:{{ $counter->id }}})"><i
                                                class="bx bx-edit-alt me-1"></i> Edit</a>
                                        <a class="dropdown-item" href="#"
                                            wire:click.prevent="$dispatch('CounterDelete',{id:{{ $counter->id }}})"><i
                                                class="bx bx-trash me-1"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $counters->links() }}
        @else
            <span class="text-danger"> No Data Found </span>
        @endif

    </div>
</div>
