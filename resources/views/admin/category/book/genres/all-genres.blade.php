@extends('admin.category.book.genres.master')

@section('title')
    Add Publisher | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

   
    <button class="btn btn-success" style="margin-left: 900px; margin-top: 10px;"><a href="{{ route('add-book-genres') }}" style="color: white;">Add Genres</a></button>


    <main id="tg-main" class="tg-main tg-haslayout">
      <!--************************************
          Section Start
      *************************************-->
      <section class="tg-dbsectionspace tg-haslayout">
        <div class="row">
          <form class="tg-formtheme tg-formdashboard">
            <fieldset>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="tg-dashboardbox">
                  <div class="tg-dashboardboxtitle">
                    <h2>My Ads</h2>
                  </div>
                  <div class="tg-dashboardholder">
                    <nav class="tg-navtabledata">
                      <ul>
                        <li class="tg-active"><a href="*">All Ads (50)</a></li>
                        <li><a href="*">Featured (12)</a></li>
                        <li><a href="javascript:void(0);" data-category="active">Active (42)</a></li>
                        <li><a href="javascript:void(0);" data-category="inactive">Inactive (03)</a></li>
                        <li><a href="javascript:void(0);" data-category="sold">Sold (02)</a></li>
                        <li><a href="javascript:void(0);" data-category="expired">Expired (01)</a></li>
                        <li><a href="javascript:void(0);" data-category="deleted">Deleted (03)</a></li>
                      </ul>
                    </nav>
                    <div class="tg-otherfilters">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-4 pull-left">
                          <div class="form-group tg-sortby">
                            <span>Sort by:</span>
                            <div class="tg-select">
                              <select>
                                <option>Most Recent</option>
                                <option>Most Recent</option>
                                <option>Most Recent</option>
                              </select>
                            </div>
                          </div>
                        </div>
                       
                          <div class="row pull-right" style="margin-right: 20px;">
                            <div class="form-group">
                              <input type="text" name="serach" id="serach" class="form-control" placeholder="serach here" />
                            </div> 
                          </div>

                        </div>
                    </div>

                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">ID <span id="id_icon"></span></th>
                        <th class="sorting" data-sorting_type="asc" data-column_name="book_genre_name" style="cursor: pointer">Title <span id="post_title_icon"></span></th>
                        <th>Ad Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @include('admin.category.book.genres.pagination_data')
                    </tbody>
                  </table>
                  
                  <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                  <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
                  <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="asc" />

        </body>
                        
              </nav>
            </div>
          </div>
        </div>
      </fieldset>
  </div>
</section>
      <!--************************************
          Section End
      *************************************-->
    </main>
 
        
@endsection 



