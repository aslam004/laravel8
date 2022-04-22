<div>
    {{-- Do your work, then step back. --}}
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @if ($statusUpdate)
        <livewire:contact-update></livewire:contact-update>
    @else
        <livewire:contact-create></livewire:contact-create>
    @endif
    
    <hr>
    <h1>COBAIN</h1>
    <table class="table table-dark table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">phone</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $no=0;?>
            @foreach ($contact as $contact)
            <?php $no++;?>
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->phone }}</td>
                <td>
                    <button wire:click="getContact({{ $contact->id }})" class="text-white btn btn-sm btn-info">edit</button>
                    <button class="text-white btn btn-sm btn-danger">delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
