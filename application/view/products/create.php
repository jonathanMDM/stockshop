<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>register <small>product</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo URL; ?>productController/store" method="post" enctype="multipart/form-data">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="txtProductName">Product Name:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="txtProductName" name="txtProductName" required="required" class="form-control ">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="txtDescription">Description:<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <textarea id="txtDescription" name="txtDescription" required="required" class="form-control "></textarea>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="txtPrice">Price: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="txtPrice" name="txtPrice" step="0.01" required="required" class="form-control">
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="txtStock">Stock: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="txtStock" name="txtStock" required="required" class="form-control">
											</div>
										</div>

										
										
										<div class="form-group row">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="selCategory">Category:</label>
											<div class="col-md-6 col-sm-6 ">
												<select class="form-control" name="selCategory" id="selCategory" required>
													<?php foreach($categories as $category): ?>
                                                        <option value="<?php echo $category['idCategory']; ?>"><?php echo $category['CategoryName']; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="txtProductImg">Photo: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" class="form-control" id="validationCustomUsername" placeholder="Photo" aria-describedby="inputGroupPrepend" name="txtProductImg">
											</div>
										</div>
										
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
                                                <button type="submit" class="btn btn-success" name="btnSave">Save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					