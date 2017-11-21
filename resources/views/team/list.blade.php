
<table class="table table-striped">
    <thead>
    <td>Logo</td>
    <td>Name</td>
    <td>LeagueID</td>
    <td>Images</td>
    <td></td>
    </thead>
    <tbody>
    @foreach ($teams as $team)

        <tr data-link='{{ action('TeamController@edit', $team->id) }}'>
            <td>
            @if($team->file_id)   
            <img src="{{ route('images', $team->file->filename) }}" class="img-circle img-responsive" alt="Cinque Terre" width="100" height="100">
            @endif
            </td>
            <td>{{$team->name}}</td>
            <td>{{$team->leagueID}}</td>
            <td><a href="/admin/team/destroy/{{$team->id}}"><button class="btn btn-danger">Del</button></a> </td>
        </tr>
    @endforeach
    </tbody>
</table>
@include('elements.pagination', ['paginator' => $teams->appends(Request::all())])
