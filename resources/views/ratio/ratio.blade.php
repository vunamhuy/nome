<table class="table table-striped">
    <thead>
    <td>Tên đội/ chủ</td>
    <td>Kết quả</td>
    <td>Tên đội/ khách</td>
    </thead>
    <tbody>
    @foreach ($ratios as $ratio)
        <tr class="@if($ratio->status == 1) success @else active @endif" >
            <td>{{$ratio->event_sport->team->name}}</td>
            <td>
            @if($ratio->event_result)
            {{ $ratio->event_result->name }} 
            @endif
            </td>
            <td>{{$ratio->event_sport->competitor->name}}</td>
            <td>

                <a onclick="@if($ratio->status != 1) return false @endif" href="{{ url('admin/ratio/update/' . $ratio->id ) }}">
                    <button class="btn btn-info">Edit</button>
                </a> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('elements.pagination', ['paginator' => $ratios->appends(Request::all())])
