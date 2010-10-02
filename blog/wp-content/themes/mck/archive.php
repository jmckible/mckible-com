<?php get_header(); ?>  
  
  <table border="0" cellSpacing="0" cellPadding="0" width="920">

						<tr>
					  <td vAlign="top"><table border="0" cellSpacing="0" cellPadding="0" width="248">
									<tr>
										<td><div  style="padding-bottom:10px; padding-left:5px; padding-top:10px;">
  <div align="center" class="txt-center head-3"><font color="#FFFFFF" ><strong>Blog Info</strong></font></div><br />
        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
    <font color="#FFFFFF"  class="text-7"><u>Recently Written</u></font>
    <ul style="color:#FFFFFF">
       <font color="#FFFFFF"  ><strong><?php get_archives('postbypost', 10); ?></strong></font>
    </ul> 
	 
    <font color="#FFFFFF" class="text-7"><u>Categories</u></font>
    <ul style="color:#FFFFFF">
      <font color="#FFFFFF"  > <strong><?php wp_list_cats('sort_column=name'); ?></strong></font>
    </ul>
		
	
    <?php endif; ?>
      </div></td>
									</tr> 
									<tr>
									  <td >
<table cellspacing="0" cellpadding="0" border="0" >
<tr >
<td class="left-td"><a href="../automobile-accidents.html">AUTOMOBILE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../motorcycle-accidents.html">MOTORCYCLE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../bicycle-accidents.html">BICYCLE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../truck-accidents.html">TRUCK ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../passenger-injurise.html">PASSENGER INJURIES</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../hit-run.html">HIT & RUN</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../uninsured-driver-claims.html">Uninsured Driver Claims</a></td>
</tr>
<tr >
  <td class="left-td"><a href="../drunk-driver-accidents.html">DRUNK DRIVER ACCIDENTS</a></td>
</tr>
</table></td>
									</tr> 
									
									<tr>
									<td><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td align="center" valign="top" style="padding:12px 0;"><a href="http://www.nhbar.org/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/NHBar.gif" alt="NHBar" width="131" height="40" border="1" /></a> </td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="top"><a href="http://www.nhaj.org/index.cfm" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/justice.png" alt="justice" border="1" /></a> </td>
                                      </tr>
                                    </table></td>
									</tr>
								
								</table></td> 
					  <td vAlign="top"><table border="0" cellSpacing="0" cellPadding="0" width="100%">

									<tr>
										<td style="background:url(images/NH_Personal_Injury_13.jpg) top repeat-x #FFFFFF"  vAlign="top" width="669">
											<div style="margin:20px 10px 10px" id="MainZone" class="icobalt ilayout">
<div id="MainContent">
 
<div id="left">
          <div class="widecolumn" id="blog"  role="main">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2 class="pagetitle">Author Archive</h2>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h2 class="pagetitle">Blog Archives</h2>
 	  <?php } ?>


		<?php while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?>>
		
		<div class="date">

<?php the_time('M d Y'); ?>

</div>

<div class="post_title">

<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>

<div class="posted">Posted by <?php the_author_posts_link(); ?> </div><!--end of posted -->

</div><!--end of post_title -->

				
				

				

<br clear="all" />



<div class="tags"><?php the_tags('Tags: ', ', ', '<br />'); ?></div><!--end of tags -->



<?php the_content('Read more &raquo;'); ?>



<div class="meta">

Filed under : <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>

</div><!--end of meta -->


			</div>

		<?php endwhile; ?>

		
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
		} else {
			echo("<h2 class='center'>No posts found.</h2>");
		}
		get_search_form();

	endif;
?>

	</div>
        </div>


</div>



<div id="PSpotlight1" style="display:none;position:fixed;width:560px;height:315px;left:50%;bottom:0%;margin-left:-280px" icobalt="CobaltControls.Controls.Spotlight" _movie="Shared/spotlight/Spotlight560.swf" _width="560" _height="315" _flashvars="fileName=/flv/Scorp_PI_Compensation_Spot.flv"></div></div>
											<br>
									  </td>
									</tr>
								</table></td> 
							
						</tr>
				  </table>

<?php get_footer(); ?>				