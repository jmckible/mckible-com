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
       <font color="#FFFFFF"  size="+1"><strong><?php get_archives('postbypost', 10); ?></strong></font>
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
          <div class="content-mid">
   <div id="blog" class="narrowcolumn" role="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
	<?php /*?><?php comments_template(); ?><?php */?>
	
	
  </div>
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