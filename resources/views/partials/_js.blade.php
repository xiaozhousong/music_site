<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIO9e-AMa2gdUWvpHdjvSnTd_yHTPno_w&callback=initMap">
    </script>

<script src="{{ asset('js/parsley.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/map.js')}}" type="text/javascript"></script>

<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>

<script type="text/javascript">
	tinymce.init({
		selector: 'textarea'
	});
</script>

<script type="text/javascript">
    $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

