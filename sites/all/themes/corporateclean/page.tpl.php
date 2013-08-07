<!-- #header -->
<div id="header">
	<!-- #header-inside -->
    <div id="header-inside" class="container_12 clearfix">
    	<!-- #header-inside-left -->
        <div id="header-inside-left" class="grid_8">
            
            <?php if ($logo): ?>
            <a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
     
            <?php if ($site_name || $site_slogan): ?>
            <div class="clearfix">
            <?php if ($site_name): ?>
            <span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
            <?php endif; ?>
            <?php if ($site_slogan): ?>
            <span id="slogan"><?php print $site_slogan; ?></span>
            <?php endif; ?>
            </div>
            <?php endif; ?>
            
        </div><!-- EOF: #header-inside-left -->
        
        <!-- #header-inside-right -->    
        <div id="header-inside-right" class="grid_4">

			<?php print render($page['search_area']); ?>

        </div><!-- EOF: #header-inside-right -->
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-1.jpg"/>
                </div>
                <h2>Хяналт бүртгэлийн онлайн систем</h2>
               <h3>Дэлхийн эдийн засгийн хямрал биднээс илүү бага зардлаар илүү үр бүтээмжтэй ажиллахыг шаардаж байна. </h3>
                <!--EOF:slider-item content-->
                
                </div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-3.jpg"/>
                </div>
                <h2>Сул зогсолт хянах (IDLE)</h2>
               <h3>Таны ажилтнууд өдөр бүр дор хаяж 80 минут ажил цалгардуулдаг болохыг та мэдэх үү ? Компьютер дээр ажиллаагүй сул зогссон цагийг мөн хянана. Програм бүр дээрх сул зогсолтыг хянах боломжтой. Өргөн хэрэглээний програмууд дээр ажилласан цэвэр цагийг тооцоолно.</h3>
               
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
	<div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-2.jpg"/>
                </div>
                <h2>Програм ашиглалт хянах</h2>
               <h3>Ажилд ирэх, ажил тарах, цайнд гарах, хуралд суух, гадуур ажлаар гарах г.м бүх цагийг статусаар бүртгэх боломжтой. MS Excel дээр 1 цаг, Firefox дээр 2 цаг гэх мэтчилэн програмууд дээр хэдэн цаг ажилласан, тоглосон, интернет үзсэнг хянах боломжтой. </h3>
               
                <!--EOF:slider-item content-->
                
				</div>
            </div>
     </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
				<div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-4.jpg"/>
                </div>
                <h2>Интернет ашиглалт хянах</h2>
               <h3>Өглөө, орой цаг бүртгэхээс илүү нарийн хяналт байж болох уу ? Их хэмжээний download , upload хийн сүлжээг ачаалалд оруулж буй эсэхийг хянах, ...</h3>
               
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
		   <!--EOF:slider-item-->
		   
		   <!--slider-item-->
		        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
				<div style="float:right; padding:0 30px 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-5.jpg"/>
                </div>
                <h2>Статус хяналт</h2>
               <h3>Ажилд ирэх, ажил тарах, цайнд гарах, хуралд суух, гадуур ажлаар гарах гэх мэт бүх цагийг статусаар бүртгэх боломжтой. </h3>
               
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
		
				   <!--EOF:slider-item-->
		   
		   <!--slider-item-->
		        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
				<div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-6.jpg"/>
                </div>
                <h2>Хяналт бүртгэлийн онлайн систем</h2>
               <h3>Дэлхий дахинд мэдээллийн технологи хурдацтай шинэчлэгдэж байгаатай зэрэгцэн манай улсад сүүлийн үеийн мэдээллийн технологийн дэвшил нэвтэрсээр байна. Үүний жишээ нь үүлэн тооцооллын технологи, түүнд суурилсан бүтээгдэхүүнүүд юм. </h3>
               
                <!--EOF:slider-item content-->
                
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/a.jpg"/>
                <!--EOF:slider-item content-->
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
    
    </div>
    <!-- EOF: #slideshow -->
    
    <!-- #slider-controls-wrapper -->
    <div id="slider-controls-wrapper">
        <div id="slider-controls" class="container_12">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  


</div><!-- EOF: #banner -->


<!-- #content -->
<div id="content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
    
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="grid_4">
        	<?php print render($page['sidebar_first']); ?>
        </div><!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_4">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_8">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
            <?php print render($page['content']); ?>
            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
        <div id="sidebar-second" class="grid_4">
        	<?php print render($page['sidebar_second']); ?>
        </div><!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->
    
    <!-- #credits -->   
    <div id="credits" class="container_12 clearfix">
        <div class="grid_12"><br>
		<h4>Хяналтын систем</h4><dl>
		<dt><a href="">Системийн тухай</a></dt>
		<dt><a href="http://controlsystem:8082/node/2">Боломжууд</a></dt>
		<dt><a href="">Үнэ</a></dt></dl>
		
        <p>Зохиогчийн эрх хуулиар хамгаалагдсан. © 2013 Старсофт ХХК.</p>
        </div>
    </div>
    <!-- EOF: #credits -->

</div><!-- EOF: #footer -->