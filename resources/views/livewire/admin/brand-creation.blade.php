<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <a href="/admin/brand-list" class="btn btn-dark btn-sm">Go Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        <div class="col-12 ">
                            <div class="input-box">
                                <label for="name">Brand Name <span>*</span></label>
                                <input type="text" wire:model="title" placeholder="Category Name">
                            </div>
                        </div>

                        <div class=" flex g-5 mt-3">
                            <button class="btn btn-1 " wire:click="submit">Create</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
    window.addEventListener('exampleModal',event=>{
        $('#exampleModal').modal('show');
    });
</script>
