<table class="table table-striped">
    <thead>
    <td>ID</td>
    <td>Team Name</td>
    <td>Result</td>
    <td>Competitor Name</td>
    </thead>
    <tbody>
    @foreach ($ratios as $ratio)
        <tr class="@if($ratio->status == 1) success @else active @endif" >
            <td>{{$ratio->id}}
            </td>
            <td>{{$ratio->event_sport->team->name}}</td>
            <td>
            @if($ratio->event_result)
            {{ $ratio->event_result->name }} 
            @endif
            </td>
            <td>{{$ratio->event_sport->competitor->name}}</td>
            <td>

                <a href="{{ url('admin/ratio/update/' . $ratio->id ) }}">
                    <button class="btn btn-info">Edit</button>
                </a> 
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('elements.pagination', ['paginator' => $ratios->appends(Request::all())])
