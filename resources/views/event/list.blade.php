
<table class="table table-striped">
    <thead>
    <td>Logo</td>
    <td>Team</td>
    <td>Competitor</td>
    <td></td>
    </thead>
    <tbody>
    @foreach ($events as $event)
        <tr>
            <td>
            @if($event->team->file->filename)   
            <img src="{{ route('images', $event->team->file->filename) }}" class="img-circle img-responsive" alt="" width="100" height="100">
            @endif
            </td>
            <td>{{$event->teamID}}</td>
            <td>
            @if($event->competitor->file->filename)   
            <img src="{{ route('images', $event->competitor->file->filename) }}" class="img-circle img-responsive" alt="Cinque Terre" width="100" height="100">
            @endif
            </td>
            <td>{{$event->competitorID}}</td>
            <td>
                <a href="/admin/event/update/{{$event->id}}">
                    <button class="btn btn-info">Edit</button>
                </a> 
            </td>
            <td>
                <a href="/admin/event/destroy/{{$event->id}}">
                    <button class="btn btn-danger">Del</button>
                </a> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@include('elements.pagination', ['paginator' => $events->appends(Request::all())])
