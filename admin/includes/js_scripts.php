<script src="<?php echo ROOT_PATH; ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/counter/waypoints-min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/counter/counterup.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/masonry/masonry.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/masonry/filter.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src='<?php echo ROOT_PATH; ?>/assets/vendors/scroll/scrollbar.min.js'></script>
<script src="<?php echo ROOT_PATH; ?>/assets/js/functions.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/vendors/chart/chart.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>/assets/js/admin.js"></script>
<script src='<?php echo ROOT_PATH; ?>/assets/vendors/calendar/moment.min.js'></script>
<script src='<?php echo ROOT_PATH; ?>/assets/vendors/calendar/fullcalendar.js'></script>
<script src='<?php echo ROOT_PATH; ?>/assets/vendors/switcher/switcher.js'></script>
<script type="text/javascript">	
(function ($) {
	function newMenuItem() {
		var newElem = $('tr.list-item').first().clone();
		newElem.find('input').val('');
		newElem.appendTo('table#item-add');
	}
	console.log(1);
	if ($("table#item-add").is('*')) {
		$('.add-item').on('click', function (e) {
			e.preventDefault();
			newMenuItem();
		});
		$(document).on("click", "#item-add .delete", function (e) {
			e.preventDefault();
			$(this).parent().parent().parent().parent().remove();
		});
	}
})(jQuery);
</script>