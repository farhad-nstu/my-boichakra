@extends('admin.master')

@section('title')
    Add Publisher | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')




    <main id="tg-main" class="tg-main tg-haslayout">
        
            <section class="tg-dbsectionspace tg-haslayout">
                <div class="row">
                    <form class="tg-formtheme tg-formdashboard" method="post" action="{{ route('update-book-languages', $editLanguages->id) }}">
                         {{ csrf_field() }}
                        <fieldset>
                            <div class="tg-postanad">
                                
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                                    
                                    <div class="tg-dashboardbox tg-contactdetail">
                                        <div class="tg-dashboardboxtitle">
                                            <h2>Update Language</h2>     
                                        </div>
                                        <div class="tg-dashboardholder">
                                            
                                            
<!--                                            Book Category ID-->
                                            <input type="hidden" name="category_id" value="{{ $editLanguages->category_id }}">
                                            
                                            <div class="form-group">
                                                <input type="text" name="book_language_name" class="form-control" value="{{ $editLanguages->book_language_name }}">
                                            </div>
                                            
                                            

                                            <button class="tg-btn" type="submit">Update</button>
                                            
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