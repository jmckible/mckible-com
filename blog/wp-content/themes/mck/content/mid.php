<?php get_header(); ?>  
  
  <table border="0" cellSpacing="0" cellPadding="0" width="920">

						<tr>
					  <td vAlign="top"><table border="0" cellSpacing="0" cellPadding="0" width="248">
									<tr>
										<td>&nbsp;</td>
									</tr> 
									<tr>
									  <td >
<table cellspacing="0" cellpadding="0" border="0" >
<tr >
<td class="left-td"><a href="automobile-accidents.html">AUTOMOBILE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="motorcycle-accidents.html">MOTORCYCLE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="bicycle-accidents.html">BICYCLE ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="truck-accidents.html">TRUCK ACCIDENTS</a></td>
</tr>
<tr >
  <td class="left-td"><a href="passenger-injurise.html">PASSENGER INJURIES</a></td>
</tr>
<tr >
  <td class="left-td"><a href="hit-run.html">HIT & RUN</a></td>
</tr>
<tr >
  <td class="left-td"><a href="uninsured-driver-claims.html">Uninsured Driver Claims</a></td>
</tr>
<tr >
  <td class="left-td"><a href="drunk-driver-accidents.html">DRUNK DRIVER ACCIDENTS</a></td>
</tr>
</table></td>
									</tr> 
									
									<tr>
									<td><table width="100" border="0" align="center" cellpadding="0" cellspacing="0">
                                      <tr>
                                        <td align="center" valign="top" style="padding:12px 0;"><a href="http://www.nhbar.org/" target="_blank"><img src="images/NHBar.gif" alt="NHBar" width="131" height="40" border="1" /></a> </td>
                                      </tr>
                                      <tr>
                                        <td align="center" valign="top"><a href="http://www.nhaj.org/index.cfm" target="_blank"><img src="images/justice.png" alt="justice" border="1" /></a> </td>
                                      </tr>
                                    </table></td>
									</tr>
								
								</table></td> 
					  <td vAlign="top"><table border="0" cellSpacing="0" cellPadding="0" width="424">

									<tr>
										<td style="background:url(images/NH_Personal_Injury_13.jpg) top repeat-x #FFFFFF"  vAlign="top" width="424">
											<div style="margin:20px 10px 10px" id="MainZone" class="icobalt ilayout">
<div id="MainContent">
 



</div>



<div id="PSpotlight1" style="display:none;position:fixed;width:560px;height:315px;left:50%;bottom:0%;margin-left:-280px" icobalt="CobaltControls.Controls.Spotlight" _movie="Shared/spotlight/Spotlight560.swf" _width="560" _height="315" _flashvars="fileName=/flv/Scorp_PI_Compensation_Spot.flv"></div></div>
											<br>
										</td>
									</tr>
								</table></td> 
							<td vAlign="top"><table border="0" cellSpacing="0" cellPadding="0" width="248">

									 
									<tr>
										<td align="left" valign="top" style="padding:0 10px 0 10px;" class="white_text">
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
										
										
																	 </td>
							  </tr> 
								
									 
									
						  </table></td>
						</tr>
				  </table>

<?php get_footer(); ?>				