<?php
/**
*Footer template.
*
*@package Aquila
*
*/


?>

<footer id="side-footer" class="bg-light p-4">
    <div class="container color-gray">
        <div class="row">
            <section class="col-lg-4 col-md-6 col-sm-12">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </section>
            <section class="col-lg-4 col-md-6 col-sm-12">
            <?php
if(is_active_sidebar('sidebar-2')){
    ?>
 <aside>
    <?php dynamic_sidebar('sidebar-2');
    ?>
 </aside>
<?php }
?>
            </section>
            <section class="col-lg-4 col-md-6 col-sm-12">
              <ul>
                <li><a href="https://facebook.com" title="facebook">
                   <svg><use></use></svg>

                </a></li>
                <li><a href="https://twitter.com" title="twitter"></a></li>
                <li><a href="https://linkedin.com" title="linkedin"></a></li>
              </ul>
            </section>
</div>
</div>




</footer>
</div>
</div>
<?php 
if(is_single()){
    
}
get_template_part('template-pats/content','svgs');
wp_footer();?>
</body>
</html>