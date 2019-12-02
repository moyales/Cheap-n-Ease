		<!-- JS Global Compulsory -->
		<script src="http://students.stevens.edu/unify/assets/vendor/jquery/jquery.min.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/popper.js/popper.min.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/bootstrap/bootstrap.min.js"></script>


		<!-- JS Implementing Plugins -->
		<script src="http://students.stevens.edu/unify/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>

		<!-- jQuery UI Core -->
		<script src="http://students.stevens.edu/unify/assets/vendor/jquery-ui/jquery-ui.core.min.js"></script>


		<!-- jQuery UI Helpers -->
		<script src="http://students.stevens.edu/unify/assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
		<script src="http://students.stevens.edu/unify/assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

	<!-- jQuery UI Widgets -->
	<script src="http://students.stevens.edu/unify/assets/vendor/jquery-ui/ui/widgets/autocomplete.js"></script>

	<!-- JS Unify -->
	<script src="http://students.stevens.edu/unify/assets/js/hs.core.js"></script>

	<script src="http://students.stevens.edu/unify/assets/js/components/hs.header.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/helpers/hs.hamburgers.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/components/hs.header-side.js"></script>

	<script src="http://students.stevens.edu/unify/assets/js/components/hs.autocomplete-local-search.js"></script>
	<script src="http://students.stevens.edu/unify/assets/vendor/cookiejs/jquery.cookie.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/helpers/hs.shortcode-filter.js"></script>

	<script src="http://students.stevens.edu/unify/assets/js/components/hs.go-to.js"></script>

	<!-- Show / Copy Code -->
	<script src="http://students.stevens.edu/unify/assets/vendor/clipboard/dist/clipboard.min.js"></script>
	<script src="http://students.stevens.edu/unify/assets/vendor/prism/prism.core.min.js"></script>

	<script src="http://students.stevens.edu/unify/assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="http://students.stevens.edu/unify/assets/vendor/custombox/custombox.min.js"></script>

	<script src="http://students.stevens.edu/unify/assets/js/components/hs.scrollbar.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/components/hs.modal-window.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/helpers/hs.modal-markup.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/components/hs.markup-copy.js"></script>
	<script src="http://students.stevens.edu/unify/assets/js/components/hs.tabs.js"></script>

	<script>
		$(document).on('ready', function () {
		$.HSCore.helpers.HSModalMarkup.init('.js-modal-markup');
	
		$.HSCore.components.HSMarkupCopy.init('.js-copy');
		});
	</script>


	<!-- JS Custom -->
	<script src="http://students.stevens.edu/unify/assets/js/custom.js"></script>

	<!-- JS Plugins Init. -->
	<script>
		$(document).on('ready', function () {
		// initialization of go to
		$.HSCore.components.HSGoTo.init('.js-go-to');
		});

		$(window).on('load', function () {
		// initialization of header
		$.HSCore.components.HSHeader.init($('#js-header'));
		$.HSCore.helpers.HSHamburgers.init('.hamburger');
		$.HSCore.components.HSHeaderSide.init($('#sideNav'));

		// initialization of autocomplet
		$.HSCore.components.HSLocalSearchAutocomplete.init('#u-sidebar-navigation__search-autocomplete');

		// initialization of HSMegaMenu component
		$('.js-mega-menu').HSMegaMenu({
			event: 'hover',
			pageContainer: $('.container'),
			breakpoint: 991
		});
		});	
	
	//<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>	

	<script type="text/javascript" charset="utf-8">
		$('input').click(function(){
			$(this).select();	
		});
	</script>

</body>
</html>