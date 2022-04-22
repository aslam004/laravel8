<div>

    <form wire:submit.prevent="update">
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            
            <div class="input-group">
                    <div class="col">
                        <input wire:model="name"  type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                        @error('name')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="col">
                        <input wire:model="phone" type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                        @error('phone')
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                        @enderror
                    </div>
            </div>    
        </div>
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
