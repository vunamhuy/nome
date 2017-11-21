<div class="top10">
@if(session()->has('messageSuccess'))
    @if(session()->has('countSuccess'))
    <div class="alert alert-success">
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('countSuccess')}} {{ session()->get('messageSuccess') }}
    </div>
    @else
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('messageSuccess') }}
    </div>
    @endif
@endif
@if(session()->has('messageWarning'))
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('messageWarning') }}
    </div>
@endif
@if(session()->has('messageError'))
    @if(session()->has('countFailed'))
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('countFailed')}} {{ session()->get('messageError') }}
    </div>
    @else
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session()->get('messageError') }}
    </div>
    @endif
@endif
</div>