<div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>View<small>Product</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                            <h1>Products</h1>
                                    <button class="btn btn-success btn-xs "><a style="color: #fff;" href="<?php echo URL; ?>ProductController/create">Add New Product</a></button>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>                                        
                                    <tbody>
                                    <?php foreach ($products as $product): ?>
                                            <td><?php echo $product['idProduct'];?></td>
                                            <td><?php echo $product['ProductName'];?></td>
                                            <td><?php echo $product['Description'];?></td>
                                            <td><?php echo $product['Price'];?></td>
                                            <td><?php echo $product['Stock'];?></td>
                                            <td><?php echo $product['CategoryName'];?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" onclick="dataProduct('<?php echo $product['idProduct'];?>')"><i class="fa fa-edit" ></i></button>
                                                <button type="button" class="btn btn-danger btn-xs" onclick="deleteProduct('<?php echo $product['idProduct'];?>')"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade bs-example-modal-lg"  tabindex="-1" role="dialog" aria-hidden="true" id="modal-edit">
                        <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Update product</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <input type="hidden" name="txtIdProduct" id="txtIdProduct">

                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Product Name:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtProductNameEdit" name="txtProductNameEdit" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Description:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <textarea name="txtDescriptionEdit" id="txtDescriptionEdit"><?php echo $product->Description; ?></textarea>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Price:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtPriceEdit" name="txtPriceEdit" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Stock:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtStockEdit" name="txtStockEdit" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="selCategory">Category:</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="selCategory" id="selCategory" required>
                                                <?php foreach ($categories as $category): ?>
                                                    <option value="<?php echo $category['idCategory']; ?>"><?php echo $category['CategoryName']; ?></option>
                                                <?php endforeach; ?>
												</select>
											</div>
										</div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" name="btnUpdate">Update</button>
                                        </div>
                                </form>
                            </div>
                            

                        </div>
                        </div>
                    </div>