<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<script src="/js/app.js" type="text/js"></script>
<script src="https://cdn.tiny.cloud/1/94znnv8jlox9mcy0w2l6y34drayykqj7gffd4wz5rvzc5iiq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'undo|redo image code bootstrap n1ed a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker importcss jsplusInclude jsplusBootstrapEditor jsplusFileUploaderLite fontawesome noneditable',
        toolbar: 'undo|redo image code fontawesome a11ycheck bootstrap addcomment showcomments casechange checklist formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        noneditable_noneditable_class: 'fa',
        contextmenu: "bootstrap",
        bootstrapConfig: {
                iconFont: 'fontawesome5',
                imagesPath: '/images/',
            },
        //   content_css: ["{{ asset('css/custom2.css') }}", "{{ asset('css/style.css') }}"],
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        extended_valid_elements: 'span[*]',
        importcss_append: true,
        branding: false,
        forced_root_block : ""
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script>
    $(document).ready(function(){
    $('.alert-success').fadeIn().delay(1000).fadeOut();
    });
</script>

<script>
$(document).ready(function(){
	$(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
</script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
<script type="text/javascript" src="{{ asset('js/tecshop.js') }}"></script>