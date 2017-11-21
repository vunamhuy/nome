
<!-- jQuery Easing -->
<script src="/js/jquery.easing.1.3.js"></script>
<!-- Waypoints -->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Magnific Popup -->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- Salvattore -->
<script src="/js/salvattore.min.js"></script>
<!-- Main JS -->
<script src="/js/main.js"></script>


<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
    // $('textarea').ckeditor();
    $('#editor').ckeditor(); // if class is prefered.
</script>
<script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ url('/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('/bower_components/metisMenu/dist/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('/bower_components/startbootstrap-sb-admin-2/dist/js/sb-admin-2.js') }}"></script>
<script  type="text/javascript" src="/js/autocomplete.js"></script>
<script type="text/javascript">
    // Remove the ugly Facebook appended hash
    // <https://github.com/jaredhanson/passport-facebook/issues/12>
    (function removeFacebookAppendedHash() {
      if (!window.location.hash || window.location.hash !== '#_=_')
        return;
      if (window.history && window.history.replaceState)
        return window.history.replaceState('', document.title, window.location.pathname + window.location.search);
      // Prevent scrolling by storing the page's current scroll offset
      var scroll = {
        top: document.body.scrollTop,
        left: document.body.scrollLeft
      };
      window.location.hash = "";
      // Restore the scroll offset, should be flicker free
      document.body.scrollTop = scroll.top;
      document.body.scrollLeft = scroll.left;
    }());

    // $('nav ul li').click(function() {
    //     $(this).addClass('active');
    //     if ( $(this).next().hasClass('active') === false )
    //     {
    //         $(this).next().addClass('active');
    //     } else {
    //         $(this).next().removeClass('active');
    //     }
    // });
    $(window).on('hashchange', function(e){
      history.replaceState ("", document.title, e.originalEvent.oldURL);
    });
</script>