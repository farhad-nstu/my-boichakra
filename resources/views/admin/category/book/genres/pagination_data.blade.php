@foreach($data as $row)
      <tr>
             <td>{{ $row->id}}</td>
             <td>{{ $row->book_genre_name }}</td>

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
                  <a class="tg-btnaction tg-btnactionview" href="{{ route('update-book-genre-status', $row->id) }}"><i class="fa fa-eye"></i></a>
                  <a class="tg-btnaction tg-btnactionedit" href="{{ route('edit-book-genres', $row->id) }}"><i class="fa fa-pencil"></i></a>
                  <a class="tg-btnaction tg-btnactiondelete" href="{{ route('delete-book-genres', $row->id) }}"><i class="fa fa-trash"></i></a>
                </div>
            </td>

       

      </tr>
      @endforeach

      <td colspan="4" align="center">
        {!! $data->links() !!}
      </td>
      
      
      