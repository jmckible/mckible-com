  <div class="right-col-indent_01" style="padding-bottom:10px; padding-left:5px; padding-top:10px;">
  <div align="center" class="txt-center head-3">Blog Info</div><br />
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
    <font color="#0e57bb" class="text-7">Recently Written</font>
    <ul class="text-6" style="border-bottom:1px dashed #666666">
      <?php get_archives('postbypost', 10); ?><br />
    </ul>
	<br />
    <font color="#0e57bb" class="text-7">Categories</font>
    <ul class="text-6" style="border-bottom:1px dashed #666666">
      <?php wp_list_cats('sort_column=name'); ?><br />
    </ul>
		<br />
   <font color="#0e57bb" class="text-7">Archives</font>
    <ul class="text-6" style="border-bottom:1px dashed #666666"><br />
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
	
    <?php endif; ?>
      </div>
   

   
	
 