 <!-- Light Footer -->
 <section class="footer">
   <h1 class="footer__title"> James Gardener </h2>

    <div class="footer__links"></div>
 </section>
  <!-- Page Wrapper End -->

  <!-- jQuery first, then Tether, then Bootstrap JS. -->


  <script src="<?php echo get_bloginfo('template_directory')?>/js/script.js"></script>
  <script type="text/javascript">
  		(function() {
  			[].slice.call(document.querySelectorAll('.menu')).forEach(function(menu) {
  				var menuItems = menu.querySelectorAll('.menu__link'),
  					setCurrent = function(ev) {


  						var item = ev.target.parentNode; // li

  						// return if already current
  						if (item.classList.contains('menu__item--current')) {
  							return false;
  						}
  						// remove current
  						var currentmenu = document.querySelector('.menu__item--current');
              currentmenu.classList.remove('menu__item--current');

  						// set current
  						item.classList.add('menu__item--current');
  					};

  				[].slice.call(menuItems).forEach(function(el) {
  					el.addEventListener('click', setCurrent);
  				});
  			});


  		})(window);
  		</script>

  <?php wp_footer();?>

</body>


</html>
