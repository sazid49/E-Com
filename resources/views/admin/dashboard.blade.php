<x-admin-layout>
    <div class="container">
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li class="">
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <i class="bx bx-chevron-right"></i>
                    </li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class="bx bxs-cloud-download"></i>
                <span class="text">Download PDF</span>
            </a>
        </div>
        <ul class="box-info">
            <li>
                <i class="bx bxs-calendar-check"></i>
                <span class="text">
                                <h3>1020</h3>
                                <p>New Order</p>
                            </span>
            </li>
            <li>
                <i class="bx bxs-group"></i>
                <span class="text">
                                <h3>2834</h3>
                                <p>Visitors</p>
                            </span>
            </li>
            <li>
                <i class="bx bxs-dollar-circle"></i>
                <span class="text">
                                <h3>$0</h3>
                                <p>Total Sales</p>
                            </span>
            </li>
        </ul>
    </div>
    <!-- product page Content -->
    <section class="product-page">
        <div class="container">
            <div class="row g-5">
                <div class="title-page">
                    <h2>Create Product</h2>
                </div>



                <div class="col-md-8">
                    <form action="">
                        <div class="row box ">
                            <div class="col-md-6 col-12 ">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Name <span>*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Name <span>*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row box ">
                            <h4>Pricing</h4>
                            <div class="col-md-6 col-12">

                                <div class="editor-box">

                                    <div class="input-box">
                                        <label for="name">Price<span>*</span></label>
                                        <input type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Compare at price<span>*</span></label>
                                        <input type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Compare at price<span>*</span></label>
                                        <input type="number">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row box ">
                            <h4>Inventory</h4>
                            <div class="col-md-6 col-12">

                                <div class="editor-box">

                                    <div class="input-box">
                                        <label for="name">SKU (Stock Keeping Unit) <span>*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Barcode (ISBN, UPC, GTIN, etc.)<span>*</span></label>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Quantity<span>*</span></label>
                                        <input type="number">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="input-box">
                                        <label for="name">Security stock<span>*</span></label>
                                        <input type="number">
                                        <p class="mt-3 mb-0 ">The safety stock is the limit stock for your products which alerts you if the product stock will soon be out of stock.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row box ">
                            <h4>Shipping</h4>
                            <div class="col-md-6 col-12">

                                <div class="editor-box">


                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            This product can be returned
                                        </label>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="editor-box">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            This product will be shipped
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class=" flex g-5">
                            <button class="btn btn-1 ">Create</button>
                            <button class="btn btn-2 ">Create & create another</button>
                            <button class="btn btn-2 ">Cancel</button>
                        </div>
                    </form>
                    <div class="row box mt-5 ">
                        <h4>Pricing</h4>
                        <div class="col-md-6 col-12">

                            <div class="editor-box">

                                <div class="input-box">
                                    <label for="name">Price<span>*</span></label>
                                    <input type="number">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="editor-box">
                                <div class="input-box">
                                    <label for="name">Compare at price<span>*</span></label>
                                    <input type="number">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="editor-box">
                                <div class="input-box">
                                    <label for="name">Compare at price<span>*</span></label>
                                    <input type="number">
                                </div>
                            </div>
                        </div>

                    </div>


                </div>


                <div class="col-md-4">
                    <div class="box row ">
                        <h4>Status</h4>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Visible</label>
                            <p>This product will be hidden from all sales channels.
                            </p>
                        </div>
                        <div class="editor-box">
                            <div class="input-box">
                                <input type="date">
                            </div>
                        </div>
                    </div>
                    <div class="box row ">
                        <h4>Associations</h4>
                        <div class="editor-box">
                            <div class="input-box">
                                <label for="name">Brand<span>*</span></label>
                                <select name="" id="">
                                    <option selected value="">Select an option</option>
                                    <option value="">One</option>
                                    <option value="">One</option>
                                </select>

                            </div>
                        </div>
                        <div class="editor-box">
                            <div class="input-box">
                                <label for="name">Categories<span>*</span></label>
                                <select name="" id="">
                                    <option selected value="">Select an option</option>
                                    <option value="">One</option>
                                    <option value="">One</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- data table -->

    <section class="data-table">
        <div class="container">
            <div class="table">
                <div id="" class="top-table ">
                    <div class="position-relative">
                        <button class="btn btn-1 "><i class="fa-solid me-2 fa-filter"></i>Sort By
                            <div class="search-menu position-absolute">
                                <ul>
                                    <li>Active</li>
                                    <li>Inactive</li>

                                </ul>
                            </div>
                    </div>

                    </button>
                    <input class="search-table" type="search" placeholder="Search Here" >
                    <button class="btn btn-1 ">Search</button>
                </div>
                <div id="top-table" class="top-table pt-0 d-none">
                    <button class="btn btn-added"><span><i class="fa-solid fa-plus"></i></span>Data</button>
                    <button class="btn btn-added"><span><i class="fa-solid fa-plus"></i></span>Data</button>
                    <button class="btn btn-added"><span><i class="fa-solid fa-plus"></i></span>Data</button>
                    <button class="btn btn-added"><span><i class="fa-solid fa-plus"></i></span>Data</button>
                </div>
                <table>
                    <thead>
                    <tr>
                        <td class="ps-4"><input id="checkbox1" type="checkbox" name="" id=""></td>
                        <td>Number</td>
                        <td>Customer</td>
                        <td>Status</td>
                        <td>Currency</td>
                        <td>Total price</td>
                        <td>Shipping cost</td>
                        <td> Order Date</td>
                        <td></td>
                    </tr>

                    </thead>
                    <tbody>
                    <tr>
                        <td class="ps-4"><input type="checkbox" name="" id=""></td>
                        <td>gfhfghfghfg</td>
                        <td>Michele Rice IV</td>
                        <td><button class="btn info">cancelled</button></td>
                        <td>Serbian Dinar</td>
                        <td>867.33</td>
                        <td>273.60</td>
                        <td>Jul 24, 2022</td>
                        <td><button class="btn fw-medium ">Edit</button></td>
                    </tr>
                    <tr>
                        <td class="ps-4"><input type="checkbox" name="" id=""></td>
                        <td>gfhfghfghfg</td>
                        <td>Michele Rice IV</td>
                        <td><button class="btn info">cancelled</button></td>
                        <td>Serbian Dinar</td>
                        <td>867.33</td>
                        <td>273.60</td>
                        <td>Jul 24, 2022</td>
                        <td><button class="btn fw-medium ">Edit</button></td>
                    </tr>
                    <tr>
                        <td class="ps-4"><input type="checkbox" name="" id=""></td>
                        <td>gfhfghfghfg</td>
                        <td>Michele Rice IV</td>
                        <td><button class="btn info">cancelled</button></td>
                        <td>Serbian Dinar</td>
                        <td>867.33</td>
                        <td>273.60</td>
                        <td>Jul 24, 2022</td>
                        <td><button class="btn fw-medium ">Edit</button></td>
                    </tr>
                    <tr>
                        <td class="ps-4"><input type="checkbox" name="" id=""></td>
                        <td>gfhfghfghfg</td>
                        <td>Michele Rice IV</td>
                        <td><button class="btn info">cancelled</button></td>
                        <td>Serbian Dinar</td>
                        <td>867.33</td>
                        <td>273.60</td>
                        <td>Jul 24, 2022</td>
                        <td><button class="btn fw-medium ">Edit</button></td>
                    </tr>
                    <tr>
                        <td class="ps-4"><input type="checkbox" name="" id=""></td>
                        <td>gfhfghfghfg</td>
                        <td>Michele Rice IV</td>
                        <td><button class="btn info">cancelled</button></td>
                        <td>Serbian Dinar</td>
                        <td>867.33</td>
                        <td>273.60</td>
                        <td>Jul 24, 2022</td>
                        <td><button class="btn fw-medium ">Edit</button></td>
                    </tr>
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

    <section>
        <div class="container">
            <div class="title-page">
                <h2>Create Order</h2>
            </div>
            <div class="row g-4 ">
                <div class="col-md-6 col-12">
                    <div class="items-1">
                        <span>1</span>
                        <p> ORDER DETAILS</p>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="items-1">
                        <span>1</span>
                        <p> ORDER DETAILS</p>
                    </div>
                </div>
            </div>
            <div class="row box mt-5 ">

                <div class="col-md-6 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Number <span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="editor-box ">
                        <div class="input-box">
                            <label for="name">Categories<span>*</span></label>
                            <div class="d-flex">
                                <select name="" id="">
                                    <option selected value="">Select an option</option>
                                    <option value="">One</option>
                                    <option value="">One</option>
                                </select>
                                <span id="add" class="add">+</span>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="col-md-6 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Categories<span>*</span></label>
                            <select name="" id="">
                                <option selected value="">Select an option</option>
                                <option value="">One</option>
                                <option value="">One</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Categories<span>*</span></label>
                            <select name="" id="">
                                <option selected value="">Select an option</option>
                                <option value="">One</option>
                                <option value="">One</option>
                            </select>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Categories<span>*</span></label>
                            <select name="" id="">
                                <option selected value="">Select an option</option>
                                <option value="">One</option>
                                <option value="">One</option>
                            </select>

                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Number <span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Number <span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Number <span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Number <span>*</span></label>
                            <input type="text">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div id="editor">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
            </div>
        </div>
    </section>
      <section class="modal modal-1 hidden">
        <div class="flex">
            <h4>Create customer</h4>
            <button class="btn-close">⨉</button>
        </div>
        <div>
            <div class="editor-box">
                <div class="input-box">
                    <label for="name">Number <span>*</span></label>
                    <input type="text">
                </div>
            </div>
            <div class="editor-box">
                <div class="input-box">
                    <label for="name">Number <span>*</span></label>
                    <input type="text">
                </div>
            </div>
            <div class="editor-box">
                <div class="input-box">
                    <label for="name">Number <span>*</span></label>
                    <input type="text">
                </div>
            </div>
        </div>
        <button class="btn btn-sus">Submit</button>
    </section>



    <!-- <button class="btn btn-open">Open Modal</button> -->


</x-admin-layout>
