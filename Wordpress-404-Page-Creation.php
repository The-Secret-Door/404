<div class="row-inner">
<div class="pos-middle pos-center align_center column_parent col-lg-12 single-internal-gutter">
<div class="uncol">
<div class="uncoltable">
<div class="uncell">
<div class="uncont">
<h1>404 Page Not found</h1>
<p>Sorry! We cannot find the page you were looking for. It may be that you have typed in a page that no longer exists or have made a mistake when typing the URL.,</p>
<p>Here are some links that you might find useful:</p>
<?php wp_nav_menu(array('main_nav' => 'main nav menu','menu_class'=> 'error-menu','menu'=> 'Main Menu')); ?>
<hr class="separator-break separator-accent separator-double-padding">
</div>
</div>
</div>
</div>
</div>
</div>


Note: <?php wp_nav_menu(array('main_nav' => 'main nav menu','menu_class'=> 'error-menu','menu'=> 'Main Menu')); ?>

Last code need to change from here:  "Main Menu"  Dashboard>Appearanc>Menu>Name
