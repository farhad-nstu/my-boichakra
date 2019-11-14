@php ($i=1)
@foreach($tag as $row)
      <tr>
             <td>{{$i++}}</td>
             <td>{{ $row->book_tag_name }}</td>

             <td data-title="Status">
                                  
                @if($row->status == 1)
                    <span class="tg-adstatus tg-adstatusactive">active</span>
                @endif
                
                @if($row->status == 0)
                    <span class="tg-adstatus tg-adstatusdeleted">Deactive</span>
                @endif
                
            </td>

            <td data-title="Action">
              <div class="tg-btnsactions">
                <a class="tg-btnaction tg-btnactionview" href="{{ route('update-book-tag-status', $row->id) }}"><i class="fa fa-eye"></i></a>
                <a class="tg-btnaction tg-btnactionedit" href="{{ route('edit-book-tags', $row->id) }}"><i class="fa fa-pencil"></i></a>
                <a class="tg-btnaction tg-btnactiondelete" href="{{ route('delete-book-tags', $row->id) }}"><i class="fa fa-trash"></i></a>
              </div>
            </td>

       

      </tr>
      @endforeach

      <td colspan="4" align="center">
        {!! $tag->links() !!}
      </td>
      
      
      