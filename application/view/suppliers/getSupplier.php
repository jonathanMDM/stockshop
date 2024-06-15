<div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>View<small>Suppliers</small></h2>
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
                                    <button class="btn btn-success btn-xs "><a style="color: #fff;" href="<?php echo URL; ?>SupplierController/create">Add New Supplier</a></button>
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Supplier Name</th>
                                        <th>Contac Name</th>
                                        <th>Contac Phone</th>
                                        <th>Contac Email</th>
                                        <th>Address</th>
                                        <th>Options</th>
                                    </tr>
                                    </thead>                                        
                                    <tbody>
                                    <?php foreach ($suppliers as $supplier): ?>
                                            <td><?php echo $supplier['idSupplier'];?></td>
                                            <td><?php echo $supplier['SupplierName'];?></td>
                                            <td><?php echo $supplier['ContactName'];?></td>
                                            <td><?php echo $supplier['ContactPhone'];?></td>
                                            <td><?php echo $supplier['ContactEmail'];?></td>
                                            <td><?php echo $supplier['Address'];?></td>
                                            
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" onclick="dataSupplier('<?php echo $supplier['idSupplier'];?>')"><i class="fa fa-edit" ></i></button>
                                                <button type="button" class="btn btn-danger btn-xs" onclick="deleteSupplier('<?php echo $supplier['idSupplier'];?>')"><i class="fa fa-trash"></i></button>
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

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" id="modal-edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Update Suppliers</h4>
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo URL; ?>suppliersController/updateSupplier">
                    <input type="hidden" name="txtidSupplier" id="txtidSupplier">

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Supplier Name:<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtSupplierName" name="txtSupplierName" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Contact Name:<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="txtContactName" name="txtContactName" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone:<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="txtContactPhone" name="txtContactPhone" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email:<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="email" id="txtContactEmail" name="txtContactEmail" required="required" class="form-control ">
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Address:<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="Address" name="Address" required="required" class="form-control ">
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
