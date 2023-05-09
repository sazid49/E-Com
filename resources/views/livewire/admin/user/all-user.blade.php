
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h4>Categirs List</h4></h4>
                        <a href="/admin/category-create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <section class="data-table">
                        <div class="container">
                            <div class="table">

                                <table>
                                    <thead>
                                    <tr>
                                        <td>ID</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td width="30%">Action</td>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                           <td>{{ $user->id }}</td>
                                           <td>{{ $user->name }}</td>
                                           <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="/admin/category-create?edit={{ $user->id }}" class="btn btn-dark btn-sm">Edit</a>
                                                <button wire:click="dataDelete({{ $user->id }})" class="btn btn-danger btn-sm">Delete</button>
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

