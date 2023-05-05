<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Product List</h4></h4>
                        <a href="/admin/product-create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <section class="data-table">
                        <div class="container">
                            <div class="table">

                                <table>
                                    <thead>
                                    <tr>
                                        <td>Title</td>
                                        <td>Status</td>
                                        <td>image</td>
                                        <td width="30%">Action</td>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($product as $item)
                                        <tr>

                                            <td>{{ $item->title }}</td>
                                            <td>
                                                @if($item->is_action == 1)
                                                <span class="badge bg-secondary ">Active</span>
                                                @else
                                                <span class="badge bg-dark">Inactive</span>
                                                @endif

                                            </td>
                                            <td>{{ $item->title }}</td>
                                            <td>
                                                <a href="/admin/product-create?edit={{ $item->id }}" class="btn btn-dark btn-sm">Edit</a>
                                                <button wire:click="dataDelete({{ $item->id }})" class="btn btn-danger btn-sm">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                                <div class="table-info">
                                    <p>Showing 1 to 10 of 1000 results</p>
                                    <select name="" id="">
                                        <option selected value="">5</option>
                                        <option value="">10</option>
                                        <option value="">15</option>
                                    </select>
                                    <nav class="mt-4" aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </section>
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
