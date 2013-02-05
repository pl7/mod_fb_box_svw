<?php defined( '_JEXEC' ) or die( 'Restricted access' ); ?>
<?php if($show_fb_box == 1) :?>
<section id="fb_box_plugin" class="sidebar">
<div class="fb-box-plugin">
    <header>
        <h3>Der SVW Facebook Stream</h3>
    </header>    
    <div class="fb-box">
        <fb:like-box href="http://www.facebook.com/svwiesbaden" width="<?php echo $pluginWidth; ?>" show_faces="true" border_color="#fff" stream="true" header="false"></fb:like-box>
    </div>
</div>
</section>
<?php endif;?>