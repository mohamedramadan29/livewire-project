<div>
    <div class="mb-3 form-search" style="width: 250px;">
        <input wire:model.live='search' type="text" class="form-control" placeholder="Search ... ">
    </div>
    <div class="table-responsive text-nowrap">
        @if(count($messages) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Name </th>
                    <th> Email  </th>
                    <th>Subject </th>
                    <th>Message  </th>
                    <th> Status  </th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($messages as $message )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $message->name }}</td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->subject }}</td>
                    <td>{{ $message->message }}</td>
                    <td>{{ $message->status }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="p-0 btn dropdown-toggle hide-arrow"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu" style="">
                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('ShowMessage',{id:{{ $message->id }}})" ><i
                                        class="bx bx-edit-alt me-1"></i> Show Message </a>
                                <a class="dropdown-item" href="#" wire:click.prevent="$dispatch('MessageDelete',{id:{{ $message->id }}})"><i
                                        class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        {{ $messages->links() }}
        @else
        <span class="text-danger"> No Data Found  </span>
        @endif

    </div>
</div>
