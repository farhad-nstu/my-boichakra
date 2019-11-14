@extends('admin.master')

@section('title')
    Add Publisher | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
		
			<section class="tg-dbsectionspace tg-haslayout">
				<div class="row">
					<form class="tg-formtheme tg-formdashboard" method="post" action="{{ route('store-book-publisher') }}" enctype="multipart/form-data">
						 {{ csrf_field() }}
						<fieldset>
							<div class="tg-postanad">
								
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
									
									<div class="tg-dashboardbox tg-contactdetail">
										<div class="tg-dashboardboxtitle">
											<h2>Publisher Details</h2>
										</div>
										<div class="tg-dashboardholder">
											
                                            
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="1">
                                            
											<div class="form-group">
												<input type="text" name="publisher_name" class="form-control" placeholder="Publisher Name">
											</div>

											

                                            
                                            <div class="form-group">
												<textarea type="text" name="publisher_details" class="form-control" placeholder="Publisher Details"></textarea>
											</div>

                                            <div class="form-group">
												<input type="date" name="adding_date" class="form-control" placeholder="adding_date">
											</div>
                                            <div class="form-group">
												<strong>Image</strong>
												<input  type="file" name="image" accept="image/*">
											</div>

											<button class="tg-btn" type="submit">Save</button>
                                            
										</div>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</section>
		
</main>

@endsection