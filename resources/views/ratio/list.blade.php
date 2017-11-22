<table class="table table-striped">
    <thead>
    <td>Tên đội/ chủ</td>
    <td>Kết quả</td>
    <td>Tên đội/ khách</td>
    </thead>
    <tbody>
    @foreach ($events as $event)
        <tr data-link='{{ action('EventSportController@edit', $event->id) }}'>
            <td>{{ !empty($event->name) ? $event->name : 'đang cập nhật' }}</td>
            <td>
            {{ $event->team->name or null }} - {{ $event->competitor->name or null }}
            </td>
            <td>{{$event->competitor->name or null}}</td>
            <td>

                <a href="{{ url('admin/event/update/' . $event->id ) }}">
                    <button class="btn btn-info">Edit</button>
                </a> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('elements.pagination', ['paginator' => $events->appends(Request::all())])
