@extends('layouts.admin')

@section('Admin shop', 'Page Title')

@section('sidebar')
    @parent
@endsection

@section('content')
<div id="page-wrapper">
    <div class="top10">
        <div class="row">
            <div class="col-md-6">
                <a href="#/admin/event/create"><button class="btn btn-success">New event</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('includes.messages')
                <div class="team_list">
                @include('event.list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            } else {
                getPosts(page);
            }
        }
    });
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function (e) {
            getPosts($(this).attr('href').split('page=')[1]);
            e.preventDefault();
        });
        $(document).on('click', '.team_list .table tr', function () {
            window.location = $(this).data('link');
        });
    });
    function getPosts(page) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('.team_list').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Posts could not be loaded.');
        });
    }
</script>
@endsection