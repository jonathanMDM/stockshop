    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>View<small>Users</small></h2>
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
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Document</th>
                                            <th>Type Document</th>
                                            <th>Names</th>
                                            <th>Last Names</th>
                                            <th>Phone Numbers</th>
                                            <th>Email</th>
                                            <th>Rol</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>                                        
                                    <tbody>
                                    <?php foreach($user as $value):?>
                                            <td><?php echo $value['idUser'];?></td>
                                            <td><?php echo $value['Document'];?></td>
                                            <td><?php echo $value['Description'];?></td>
                                            <td><?php echo $value['Names'];?></td>
                                            <td><?php echo $value['Lastname'];?></td>
                                            <td><?php echo $value['Phone'];?></td>
                                            <td><?php echo $value['Email'];?></td>
                                            <td><?php echo $value['RolDescription'];?></td>
                                            <td><?php echo $value['Username'];?></td>
                                            <td>
                                                <?php if($value['Stat'] == 1):?>
                                                    <label class="badge badge-pill badge-success">Aveilable</label>
                                                <?php else:?>
                                                    <label class="badge badge-pill badge-danger">UnAveilable</label>
                                                <?php endif?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" onclick="dataUser('<?php echo $value['idUser'];?>')"><i class="fa fa-edit" ></i></button>
                                                <button type="button" class="btn btn-warning btn-xs" onclick="changeStatus('<?php echo $value['idUser'];?>')"><i class="fa fa-refresh"></i></button>
                                                <button type="button" class="btn btn-danger btn-xs" onclick="deleteUser('<?php echo $value['idUser'];?>')"><i class="fa fa-trash"></i></button>
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
                            <h4 class="modal-title" id="myModalLabel">Update user</h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <input type="hidden" name="txtIdUser" id="txtIdUser">
                                    <div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Type Document</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="selDocType" id="selDocType">
													<option>Choose option</option>
													<?php foreach($typeDocument as $value): ?>
													<option required="required" value="<?php echo $value['idTypeDocument'];?>"><?php echo $value['doc']?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Document<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtDocument" name="txtDocument" required="required" class="form-control ">
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtNames" name="txtNames" required="required" class="form-control ">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Last Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtLastnames" name="txtLastnames" required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Email <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="email" id="txtEmail" name="txtEmail" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Phone <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="tel" id="txtPhone" name="txtPhone" required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Address <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtAddress" name="txtAddress" required="required" class="form-control">
											</div>
										</div>
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Username <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtUser" name="txtUser" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Password <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="password" id="txtPassword" name="txtPassword" required="required" class="form-control">
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