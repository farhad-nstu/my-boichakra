@extends('admin.master')

@section('title')
    Add Book | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
		
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard" method="post" action="{{ route('insert-book') }}">
						<fieldset>
							<div class="tg-postanad">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
									<div class="tg-dashboardbox">
										<div class="tg-dashboardboxtitle">
											<h2>Add Book Details</h2>
										</div>
										<div class="tg-dashboardholder">
                                            
                                            
<!--
											<div class="form-group text-center">
												<a href="#" class="tg-btn" data-toggle="modal" data-target=".tg-categorymodal">Select Category Here</a>
											</div>
-->
                                            
                                            
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
                                            <div class="form-group">
												<strong>Book Name</strong>
												<input type="text" name="adtitle" class="form-control" placeholder="Enter Book Name">
											</div>
                                            <div>
                                                <strong>Description</strong>
                                            </div>
                                            <div class="form-group">
                                                
												<textarea id="tg-tinymceeditor" class="tg-tinymceeditor"></textarea>
											</div>
                                            
                                             <div class="form-group">
												<strong>Book Image</strong>
												<input  type="file" name="book_images[]" accept="image/*" multiple>
											</div>
                                            
                                         
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>More Detail</h2>
										</div>
										<div class="tg-dashboardholder">
											
											<div class="form-group">
												<input type="text" name="book_genre_id" class="form-control" placeholder="Select Genre">
											</div>
                                            <div class="form-group">
												<input type="text" name="book_tag_id" class="form-control" placeholder="Select Tag">
											</div>
											<div class="form-group">
												<div class="tg-select">
													<select>
														<option>Select Language</option>
														<option>Select Language</option>
														<option>Select Language</option>
													</select>
												</div>
											</div>
											
											<div class="form-group">
												<div class="tg-select">
													<select>
														<option>Select Writer</option>
														<option>Select Writer</option>
														<option>Select Writer</option>
													</select>
												</div>
											</div>
                                            <div class="form-group">
												<div class="tg-select">
													<select>
														<option>Select Category</option>
														<option>Select Category</option>
														<option>Select Category</option>
													</select>
												</div>
											</div>
                                            <div class="form-group">
												<div class="tg-select">
													<select>
														<option>Select Publisher</option>
														<option>Select Publisher</option>
														<option>Select Publisher</option>
													</select>
												</div>
											</div>
											  <div class="form-group">
												<strong>Status</strong>
												<div class="tg-selectgroup">
													<span class="tg-radio">
														<input id="tg-sameuser" type="radio" name="status" value="Active" checked>
														<label for="tg-sameuser">Active</label>
													</span>
													<span class="tg-radio">
														<input id="tg-someoneelse" type="radio" name="status" value="Deactive">
														<label for="tg-someoneelse">Save as Draft</label>
													</span>
												</div>
											</div>
											<div class="tg-checkbox">
												<input id="tg-agreetermsandrules" type="checkbox" name="agreetermsandrules" value="on">
												<label for="tg-agreetermsandrules">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>
											</div>
                                            
											<button class="tg-btn" type="button">Post Book</button>
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</section>
		
</main>


<!--			Modal Box Start-->
	@include('admin.category.book.include.modal-add-book.add-writer')

<!--			Modal Add Writer-->
<!--

<div class="modal fade tg-thememodal tg-categorymodal" tabindex="-1" role="dialog">
		<div class="modal-dialog tg-thememodaldialog" role="document">
			<button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="modal-content tg-thememodalcontent">
				<div class="tg-title">
					<strong>Add Writer</strong>
				</div>
				<div id="tg-dbcategoriesslider" class="tg-dbcategoriesslider tg-categories owl-carousel">
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-08.png" alt="image description"></figure>
							<h3>Mobiles</h3>
						</div>
					</div>
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-09.png" alt="image description"></figure>
							<h3>Electronics</h3>
						</div>
					</div>
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-10.png" alt="image description"></figure>
							<h3>Vehicles</h3>
						</div>
					</div>
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-11.png" alt="image description"></figure>
							<h3>Bikes</h3>
						</div>
					</div>
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-12.png" alt="image description"></figure>
							<h3>Animals</h3>
						</div>
					</div>
					<div class="tg-category">
						<div class="tg-categoryholder">
							<figure><img src="images/icons/img-13.png" alt="image description"></figure>
							<h3>Furniture</h3>
						</div>
					</div>
				</div>
				<ul class="tg-subcategories">
					<li>
						<div class="tg-title">
							<strong>Electronics</strong>
						</div>
						<div class=" tg-verticalscrollbar tg-dashboardscrollbar">
							<ul>
								<li class="tg-hassubcategories">Dishwashers</li>
								<li class="tg-hassubcategories">Freezers</li>
								<li class="tg-hassubcategories">Fridge Freezers</li>
								<li class="tg-hassubcategories">Fans</li>
								<li class="tg-hassubcategories">Air Conditioners</li>
								<li class="tg-hassubcategories">Water Dispenser</li>
								<li class="tg-hassubcategories">Microwave Ovens</li>
								<li class="tg-hassubcategories">Refrigerators</li>
								<li class="tg-hassubcategories">Hair Dryers</li>
								<li class="tg-hassubcategories">Washing Machine</li>
								<li class="tg-hassubcategories">dolor in reprehenderit</li>
								<li class="tg-hassubcategories">in voluptate velit esse</li>
								<li class="tg-hassubcategories">Dishwashers</li>
								<li class="tg-hassubcategories">Freezers</li>
								<li class="tg-hassubcategories">Fridge Freezers</li>
								<li class="tg-hassubcategories">Fans</li>
								<li class="tg-hassubcategories">Air Conditioners</li>
								<li class="tg-hassubcategories">Water Dispenser</li>
								<li class="tg-hassubcategories">Microwave Ovens</li>
								<li class="tg-hassubcategories">Refrigerators</li>
								<li class="tg-hassubcategories">Hair Dryers</li>
								<li class="tg-hassubcategories">Washing Machine</li>
								<li class="tg-hassubcategories">dolor in reprehenderit</li>
								<li class="tg-hassubcategories">in voluptate velit esse</li>
							</ul>
						</div>
					</li>
					<li>
						<div class="tg-title">
							<strong>Air Conditioners</strong>
						</div>
						<div class=" tg-verticalscrollbar tg-dashboardscrollbar">
							<ul>
								<li>Voltas</li>
								<li>Samsung</li>
								<li>Daikin</li>
								<li>LG</li>
								<li>Whirlpool</li>
								<li>Videocon</li>
								<li>Blue Star</li>
								<li>Hitachi</li>
								<li>Haier</li>
								<li>General</li>
								<li>dolor in reprehenderit</li>
								<li>in voluptate velit esse</li>
								<li>Voltas</li>
								<li>Samsung</li>
								<li>Daikin</li>
								<li>LG</li>
								<li>Whirlpool</li>
								<li>Videocon</li>
								<li>Blue Star</li>
								<li>Hitachi</li>
								<li>Haier</li>
								<li>General</li>
								<li>dolor in reprehenderit</li>
								<li>in voluptate velit esse</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
-->


@endsection