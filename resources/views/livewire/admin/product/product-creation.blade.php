<section class="product-page">
    <div class="container">
        <div class="row g-5">
            <div class="title-page">
                <h2>Create Product</h2>
            </div>
            <div class="col-md-8">
                <div class="row box ">
                    <div class="col-md-12">
                        <div class="editor-box">
                            <div class="input-box">
                                <label for="name">Title <span>*</span></label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="editor-box">
                            <div class="input-box">
                                <label for="name">Description <span>*</span></label>
                                <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
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
                                <label for="name">Quantity<span>*</span></label>
                                <input type="number">
                            </div>
                        </div>
                    </div>

                </div>

                 <div class="row box ">
                    <h4>Product Attributes</h4>
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
                                <label for="name">Quantity<span>*</span></label>
                                <input type="number">
                            </div>
                        </div>
                    </div>

                </div>


                <div class=" flex g-5">
                    <button class="btn btn-1 ">Create</button>
                    <button class="btn btn-2 ">Create & create another</button>
                    <button class="btn btn-2 ">Cancel</button>
                </div>




            </div>


            <div class="col-md-4">
                <div class="box row ">
                    <h4>Media Uploads</h4>
                    <div class="editor-box">
                        <div class="input-box slim">
                            <input type="file">
                        </div>
                    </div>
                </div>
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
                                @foreach($brand as $i)
                                    <option value="{{ $i->id }}">{{ $i->title ?? '' }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="editor-box">
                        <div class="input-box">
                            <label for="name">Categories<span>*</span></label>
                            <select name="" id="">
                                <option selected value="">Select an option</option>
                                @foreach($category as $i)
                                    <option value="{{ $i->id }}">{{ $i->title ?? '' }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
