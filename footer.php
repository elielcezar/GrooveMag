<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dyad
 */

?>

<footer>
	<div class="container">


		
        <p><strong>GROOVE MAG</strong></p>
        <ul class="social">
            <li class="facebook"><a href="https://www.facebook.com/GrooveMag" target="_blank">Facebook</a></li>
            <li class="instagram"><a href="https://www.instagram.com/groovemag/" target="_blank">Insta</a></li>
            <li class="snap"><a href="" target="_blank">Snap</a></li>
            <li class="youtube"><a href="" target="_blank">youtube</a></li>
            <li class="soundcloud"><a href="https://soundcloud.com/" target="_blank">Soundcloud</a></li>
        </ul>
        <p>2016 - Todos os direitos reservados. <a href="<?php echo get_site_url(); ?>/contato">Contato</a></p>
		
	</div>
</footer>




<?php wp_footer(); ?>



<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">

jQuery(document).ready(function(){

    $('.c-hamburger').click(function(){
        $('#menu-menu-principal').toggleClass('active');
    });
    
    
    $('#menu-menu-principal').addClass('original').clone().insertAfter('header .container').addClass('cloned').css('position','fixed').css('top','0').css('margin-top','0').css('z-index','500').removeClass('original').hide();
    scrollIntervalID = setInterval(stickIt, 50);
    function stickIt() {
      var orgElementPos = $('.original').offset();
      orgElementTop = orgElementPos.top;
      if ($(window).scrollTop() >= (orgElementTop)) {        
        orgElement = $('.original');
        coordsOrgElement = orgElement.offset();
        leftOrgElement = coordsOrgElement.left;  
        widthOrgElement = orgElement.css('width');
        $('.cloned').css('left',leftOrgElement+'px').css('top',0).css('width',widthOrgElement).show();
        $('.original').css('visibility','hidden');
      } else {        
        $('.cloned').hide();
        $('.original').css('visibility','visible');
      }
    }

});

</script>

</body>
</html>
