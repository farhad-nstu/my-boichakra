<div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="tg-title">
					<strong>Writer Details</strong>
				</div>
				
				<div class="row">
					<form class="tg-formtheme tg-formdashboard">
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
									
									<div class="tg-dashboardbox tg-contactdetail">
									    <div class="tg-dashboardboxtitle">
											<h2>Writer Details</h2>
										</div>
										<div class="tg-dashboardholder">
											<div class="form-group">
												<strong>Status</strong>
												<div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="status" value="Active" checked>
														<label for="tg-sameuser">Active</label>
													</span>
													<span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="status" value="Deactive">
														<label for="tg-someoneelse">Deactive</label>
													</span>
												</div>
											</div>
                                            
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
											<div class="form-group">
												<input type="text" name="writer_name" class="form-control" placeholder="Writer Name">
											</div>
                                            
                                            <div class="form-group">
												<textarea type="text" name="writer_details" class="form-control" placeholder="Writer Details"></textarea>
											</div>
                                            
                                            <div class="form-group">
												<strong>Writer Image</strong>
												<input  type="file" name="writer_image" accept="image/*">
											</div>

											<button class="tg-btn" type="submit">Save</button>
                                            
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
		</div>
	</div>