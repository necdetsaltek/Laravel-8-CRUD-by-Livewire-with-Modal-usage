
<div>
    @if(session()->has('message'))
        <div class="alert alert-success d-none ">
          <strong>{{ session('message') }}</strong>  
        </div>

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Hi Bro!</strong> <strong>{{ session('message') }}</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @include('livewire.create')

    @include('livewire.update')
    <br />
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	@foreach($sampledata as $data)
        	<tr>	
        		<td>{{ $data->first_name }}</td>
        		<td>{{ $data->last_name }}</td>
        		<td>{{ $data->gender }}</td>
        		<td>
                    <button data-toggle="modal" data-target="#updateModal" class="btn btn-primary btn-sm" wire:click="edit({{ $data->id }})">
                        <i class="bi bi-pencil-square"></i> Edit
                    </button>
                    <button wire:click="delete({{ $data->id }})" class="btn btn-danger btn-sm"> 
                        <i class="bi bi-trash"></i> Delete
                    </button>
                        
                </td>
        	</tr>
        	@endforeach
        </tbody>

    </table>
</div>

