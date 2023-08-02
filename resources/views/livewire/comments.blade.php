<div class="container">
    <div class="col-md-6 offset-md-3">
        <div>
            <h1 class="mt-4 text-center">Comments Using Livewire</h1>
            <form class="form-group" wire:submit.prevent="addComment">
                <label for="">Comment</label>
                <input type="text" class="form-control" wire:model.lazy="newcomment">
                @error('newcomment')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>
                <button type="submit" class="btn btn-primary mt-2">submit</button>
            </form>
        </div>
        <div class="row">
            <input wire:model="search" type="search" class="form-control mt-3 w-50 offset-md-6" placeholder="Search comments..">

            @foreach ($comments as $item)
                <div class="card mt-3">
                    <div style="display:flex; justify-content:space-between;">
                        <p>
                            {{ $item->comment }}
                        </p>
                        <p>
                            <i wire:click="removeMessage({{ $item->id}})" class="fa fa-times" style="color: red;"></i>
                        </p>
                    </div>
                    
                    <div style="display:flex;">
                        <p>
                            {{ $item->User->name }}
                        </p>
                        <small style="color: gray;">
                            {{ $item->created_at->diffForHumans() }}
                        </small>
                    </div>

                </div>
            @endforeach

        </div>
        {{ $comments->links() }}

    </div>
</div>
