<div>

    <form wire:submit.prevent="store">
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
{{-- <div class="form-group">
    <div class="form-row">
        <div class="col">
            <input type="text" name="" id="" class="form-control" placeholder="Name">
        </div>
        <div class="col">
            <input type="text" name="" id="" class="form-control" placeholder="Phone">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-small btn-primary">Submit</button> --}}