<footer class="grid_12">
   <p class="copyright">© <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="<?php bloginfo('url'); ?>/disclaimer-privacy">Disclaimer & Privacy</a></p>
   <a class="follow" href="http://www.linkedin.com/company/adsatis" target="_blank"><img src="<?php bloginfo( 'template_url' ); ?>/images/linkedin.jpg" width="65" height="20" alt="Follow Adsatis" /></a>
</footer>
</div>

<script>
   $(function() {
        $( "#accordion" ).accordion({
            active: false,
            heightStyle: content,
            collapsible: true,
            navigation: true
        });    
           
        if(location.hash) $(location.hash).click();
       $('#link').click(function(){ $('#accordion').accordion({active: 2 }); });
    });
</script>

<?php wp_footer(); ?>
</body>
</html>