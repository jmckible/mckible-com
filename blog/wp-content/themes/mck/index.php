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
          <div id="blog">
            <div class="entry">
              <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
              <div class="post" id="post-<?php the_ID(); ?>">
                <div class="date">
                  <?php the_time('M d Y'); ?>
                </div>
                <!--end of date -->
                <div class="post_title">
                  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                    <?php the_title(); ?>
                    </a></h2>
                  <div class="posted">Posted by
                    <?php the_author_posts_link(); ?>
                  </div>
                  <!--end of posted -->
                </div>
                <!--end of post_title -->
                <br clear="all" />
                <div class="tags">
                  <?php the_tags('Tags: ', ', ', '<br />'); ?>
                </div>
                <!--end of tags -->
                <?php the_content('Read more &raquo;'); ?>
                <div class="meta"> Filed under :
                  <?php the_category(', ') ?>
                  |
                  <?php edit_post_link('Edit', '', ' | '); ?>
                  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                </div>
                <!--end of meta -->
              </div>
              <!--end of post -->
              <?php endwhile; ?>
              <div class="navigation">
                <div class="alignleft">
                  <?php next_posts_link('&laquo; Older Entries') ?>
                </div>
                <div class="alignright">
                  <?php previous_posts_link('Newer Entries &raquo;') ?>
                </div>
              </div>
              <?php else : ?>
              <?php endif; ?>
            </div>
            <!--end of entry -->
          </div>
        </div>


</div>



<div id="PSpotlight1" style="display:none;position:fixed;width:560px;height:315px;left:50%;bottom:0%;margin-left:-280px" icobalt="CobaltControls.Controls.Spotlight" _movie="Shared/spotlight/Spotlight560.swf" _width="560" _height="315" _flashvars="fileName=/flv/Scorp_PI_Compensation_Spot.flv"></div></div>
											<br>
									  </td>
									</tr>
								</table>
								
								</td> 
							
						</tr>
				  </table>

<?php get_footer(); ?>				