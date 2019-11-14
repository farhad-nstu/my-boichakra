@extends('admin.master')

@section('title')
    Add Publisher | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

   
    


    

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
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4 pull-right">
                          <div class="form-group tg-inputwithicon">
                            <i class="icon-magnifier"></i>
                            <input type="search" name="search" class="form-control" placeholder="Search Here">
                          </div>
                        </div>
                      </div>
                    </div>
                    <table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads">
                      <thead>
                        <tr>
                          
                          <th>Photo</th>
                          <th>Title</th>
                          
                          <th>Details</th>
                          <th>Ad Status</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          
                          

                        @foreach($allBook as $pbl)
                 
                        <tr>
                          <td><img src="{{ $pbl->image }}" style="height: 60px;width: 60px;"></td>
                          <td data-title="publisher_name">
                            
                            <span>{{ $pbl->publisher_name }}</span>
                          </td>
                          
                          <td data-title="details">{{ $pbl->publisher_details }}</td>
                          <td data-title="Ad Status"><span class="tg-adstatus tg-adstatusactive">{{ $pbl->status }}</span></td>
                          <td data-title="adding_date">{{ $pbl->adding_date }}</td>
                          
                          
                          <td data-title="Action">
                            <div class="tg-btnsactions">
                              <a class="tg-btnaction tg-btnactionview" href="{{ route('view-book-publisher',[ $pbl->id ]) }}"><i class="fa fa-eye"></i></a>
                              <a class="tg-btnaction tg-btnactionedit" href="{{ route('edit-book-publisher',[ $pbl->id ]) }}"><i class="fa fa-pencil"></i></a>
                              <a class="tg-btnaction tg-btnactiondelete" href="{{ route('delete-book-publisher',[ $pbl->id ]) }}"><i class="fa fa-trash"></i></a>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                      </table>
                      <nav class="tg-pagination">
                      <ul>
                        <li class="tg-prevpage"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="tg-active"><a href="#">5</a></li>
                        <li>...</li>
                        <li><a href="#">10</a></li>
                        <li class="tg-nextpage"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                      </ul>
                    </nav>  
                   
                  </div>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </section>
      <!--************************************
          Section End
      *************************************-->
    </main>

<br/>

    
    <!--************************************
        Main End
    *************************************-->
                




@endsection                