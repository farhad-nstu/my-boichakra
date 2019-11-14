@extends('admin.master')

@section('title')
    Add Publisher | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

  <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-2"></div>
                            <div class="col-md-8 ">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h3 class="panel-title">View Publisher</h3></div>
                                    <div class="panel-body">
                                        
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Publisher Name</label>
                                                <p>{{ $single->publisher_name }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Publisher Details</label>
                                                <p>{{ $single->publisher_details }}</p>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Status</label>
                                                <p>{{ $single->status }}</p>
                                            </div>
                                            <div>
                                            	<label for="exampleInputPassword1">Adding Date</label>
                                            	<p>{{ $single->adding_date }}</p>
                                            </div>
                                            

                                            <div class="form-group">
                                                <img style="height:60px; width:60px;" src="{{ URL::to($single->image) }}" />
                                                <label for="exampleInputPassword1">Image</label>
                                                
                                            </div>
                                            
                                            
                                           
                                        
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                        </div>
@endsection
