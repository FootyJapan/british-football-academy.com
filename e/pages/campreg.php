<?php
/***************************************************************************
File Name       : campreg.php
Domain          : http://www.british-football-academy.com
----------------------------------------------------------------------------
Author          : Ian Warner
Copyright       : (C) 2001 Triangle Solutions Ltd
Email           : iwarner@triangle-solutions.com
URL             : http://www.triangle-solutions.com/
Description     : Process the form and email to the desired email address
Date Created    : Monday 20 September 2004 11:53:24
\\||************************************************************************/
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta name="generator" content="HTML Tidy for Mac OS X (vers 2 April 2007), see www.w3.org" />
		<meta http-equiv="content-type" content="text/html; charset=us-ascii" />
		<link rel="stylesheet" href="../../stylesheet.css" type="text/css" />
		<style type="text/css">
/*<![CDATA[*/
        div.c9 {text-align: right}
        td.c8 {background-color: #FFFFFF}
        tr.c7 {background-color: #FFFFFF}
        table.c6 {background-color: #FFFFFF}
        div.c5 {text-align: center}
        table.c4 {background-color: #000066}
        span.c3 {font-size:10.0pt;font-family:Osaka;mso-fareast-language:JA}
        td.c2 {background-color: #FF0000}
        p.c1 {font-weight: bold}
        /*]]>*/
        </style>
		<script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-18843756-3']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>
		<title>Football Academy for kids in Tokyo and Yokohama</title>
		<meta name="description" content="British Football Academy (B.F.A.) has been established with the specific intention of bringing a British style of football education to youngsters in Japan.">
		<meta name="keywords" content="British Football Academy, B.F.A., soccer coaching, F.A., football association, tokyo metropolis league, TML, metropolis league, tokyo metropolis, tml tokyo, Soccer, football, Association Football, BFC, futsal, British Football Club, Tokyo, Japan, hobbies, ex-pat, Footy, gaijin, IFFL, premier league, World Cup, sports, pastimes, futbol, English, JAWOC, UEFA, JFA, FIFA">
	</head>
    <body>
		<div align="center">
			<table border="0" width="700" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td>
						<table border="2" bordercolor="#000066" width="700" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td colspan="2"><a href="http://www.british-football-academy.com/index.html"><img src="../../images/mats/BFATweblogo.jpg" alt="home" width="700" height="100" border="0" /></a></td>
							</tr>
							<tr>
								<td colspan="2">
									<table class="c4" width="700" cellspacing="0" cellpadding="0" align="center">
										<tr>
											<td rowspan="3"><img src="../../images/mats/UJball2.gif" width="33" height="55" border="0" /></td>
											<td>
												<p class="center white c1"><a href="about.html">ABOUT US</a> | <a href="bulldogs.html">CLASSES</a> | <a href="schedule.html">SCHEDULES &amp; FEES</a> | <a href="coaches.html">COACHES</a> | <a href="venuetis.html">VENUES</a></p>
											</td>
											<td class="c2" rowspan="3"><img src="../../images/mats/spacer.gif" width="3" height="3" border="0" /></td>
											<td>
												<p class="red"><img src="../../images/mats/flag_uk.gif" width="50" height="26" border="0" align="middle" />&#160;&#160;<b class="flag">ENGLISH</b></p>
											</td>
										</tr>
										<tr>
											<td class="c2"><img src="../../images/mats/spacer.gif" width="3" height="3" border="0" /></td>
											<td class="c2"><img src="../../images/mats/spacer.gif" width="3" height="3" border="0" /></td>
										</tr>
										<tr>
											<td>
												<p class="center"><b class="red">SIGN-UP</b> <b class="white">| <a href="thefa.html">THE F.A.</a> | <a href="policies.html">POLICIES</a> | <a href="supporters.html">OUR SUPPORTERS</a> | <a href="mailto:education.ops@footyjapan.com" class="menu">CONTACT US</a></b></p>
											</td>
											<td>
												<p><img src="../../images/mats/flag_jp.gif" width="51" height="26" border="0" align="middle" />&#160;&#160; <a href="../../j/pages/camp.html"><b class="flag"><span lang="JA" class='c3'>&#26085;&#26412;&#35486;</span></b></a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr class="c7">
								<td colspan="2">
									<table class="c6" border="0" width="660" cellspacing="0" cellpadding="5" align="center" bordercolor="#FF0000">
										<tr>
											<td colspan="3">
												<p class="men"><img src="../../images/mats/spacer.gif" width="10" height="12" align="bottom" /><a href="registration.html" class="content">Registration</a> | <b class="red">Camp Registration</b></p>
											</td>
										</tr>
										<tr>
											<td><img src="../../images/mats/spacer.gif" width="2" height="10" align="left" /></td>
											<td class="boxborder">
												<h1>BFA  SOCCER CAMPS 2012</h1>
												<?php
                                                    IF (!isset($_GET['form']))
                                                            {
                                            ?>
												<p>
                                                Please fill out all the following information then click the &#39;send&#39; button.<br />
												</p>
												<form action="campreg.php?form=true" method="post">
													<table class="c6" border="0" width="590" cellpadding="0">
														<tr>
															<td>
																<h4>
                                                                Students&#39;s name:
                                                            </h4>
															</td>
															<td><input name="sname" size="20" /></td>
														</tr>
														<tr>
															<td>
																<h4>
                                                                Email address:
                                                            </h4>
															</td>
															<td>
																<h4><input name="email" size="20" /></h4>
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<h4><b class="navy">How did you hear about the camp:</b> BFA member or repeat camper <input type="radio" name="source" value="BFA member or repeat camper" />  Supermarket poster <input type="radio" name="source" value="Supermarket poster" /> magazine ad <input type="radio" name="source" value="magazine ad" />  Friend referral <input type="radio" name="source" value="Friend referral" checked="checked" />    Other <input type="radio" name="source" value="Other" /></h4>
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<p><b>Course Selection:</b><br /> Please choose the camp and course you would like and whether for single day(s) (state date(s)) or the Full Course (all 3, 4 or 5 days).<br />
																			<span class="red">If you wish your child to attend more than one camp please resend the form for different camps.</span></p>
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<h4><strike><b class="navy">Camp 1: Tokyo (<a class="content" href="http://maps.google.com/maps/ms?msid=206831214258637604914.0004bd255232dba7ff370&msa=0" target="_blank">Miyashita Koen) </b><b>June 26 (Tue) - 28 (Thu) - 3 day</b></strike> <br />
																	<strike><b class="navy">Camp 2: Tokyo (</b><b><a class="content" href="http://maps.google.com/maps/ms?msa=0&msid=201476385182824903864.0004a61c6172d4a3cd9de&ie=UTF8&z=18">British School Tokyo</a></b><b class="navy">)</b><b class="red"> </b><b>July 3 (Tue) - 5 (Thu) - 3 day</b></strike><b class="navy">  </b><br />
																	<strike><b class="navy">Camp 3: Tokyo (</b><b><a class="content" href="http://maps.google.com/maps/ms?msa=0&msid=201476385182824903864.0004a61c6172d4a3cd9de&ie=UTF8&z=18">British School Tokyo</a></b><b class="navy">)</b><b class="red"> </b><b>July 10 (Tue) - 12 (Thu) - 3 day</b></strike><b class="navy">  </b><br />
																	<strike><b class="navy">Camp 4: Tokyo (</b><b><a class="content" href="http://maps.google.com/maps/ms?msa=0&msid=201476385182824903864.0004a61c6172d4a3cd9de&ie=UTF8&z=18">British School Tokyo</a></b><b class="navy">)</b><b class="red"> </b><b>July 17 (Tue) - 19 (Thu) - 3 day</b></strike><b class="navy">  </b><br />
																	<strike><b class="navy">Camp 5: Tokyo (</b><a class="content" href="http://maps.google.com/maps/ms?msid=206831214258637604914.0004bd255232dba7ff370&msa=0" target="_blank"><b>Miyashita Koen</b></a><b class="navy">) </b><b>July 24 (Tue) - 27 (Fri) - 4 day</b></strike><b class="navy">   </b><br />
																	<strike><b class="navy">Camp 6: Chiba (</b><b><a class="content" href="http://mis.ed.jp/english/contact.html">Makuhari international School</a></b><b class="navy">) </b><b>July 30 (Mon) - Aug 3 (Fri) - 5 day</b></strike><b class="navy">  </b><input type="radio" name="camp" value="Camp 6 Chiba July 30" /><br />
																	<strike><b class="navy">Camp 7: Tokyo (<a class="content" href="venuetis.html" target="_blank">Tokyo Interntional School</a>) </b><b>Aug 6 (Mon) - Aug 10 (Fri) - 5 day</b></strike><b class="navy">  </b><input type="radio" name="camp" value="Camp 7 Tokyo Aug 6" /><br />
																	<br />
																	<b class="navy">Camp 8: Yokohama<a class="content" href="venueyokohama.html">YC&amp;AC</a> </b><b>Aug 13 (Mon) - 17 (Fri) - 5 day</b><b class="navy">  </b><input type="radio" name="camp" value="Camp 8 YCAC Aug 13" /><br />
																	<b class="navy">Camp 9: Tokyo </b><b class="navy">(</b><b><a class="content" href="http://maps.google.com/maps/ms?msa=0&msid=201476385182824903864.0004a61c6172d4a3cd9de&ie=UTF8&z=18">British School Tokyo</a></b><b class="navy">) </b><b>Aug 20 (Mon) - Aug 23 (Thur) - 4 day</b><b class="navy">  </b><input type="radio" name="camp" value="Camp 9 Tokyo Aug 20" /><br />
																	<br />
																</h4>
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<h4><b class="navy">Group 1: Bulldogs (4, 5 &amp; 6y/o):</b> single days only <input type="radio" name="course" value="1day Buldogs" /> Full Course <input type="radio" name="course" value="Full Camp Buldogs" /><br />
																	<b class="navy">Group 2: Lions (7 &amp; 8y/o):</b> single days only <input type="radio" name="course" value="1day Lions" /> Full Course <input type="radio" name="course" value="Full Camp Lions" /><br />
																	<b class="navy">Group 3: Academy (9 &amp; 10y/o):</b> single days only <input type="radio" name="course" value="1day Academy" /> Full Course <input type="radio" name="course" value="Full Camp Academy" checked="checked" /><br />
																	<b class="navy">Group 4: Academy Stars (11~14y/o):</b> single days only <input type="radio" name="course" value="1day Academy Stars" /> Full Course <input type="radio" name="course" value="Full Camp Academy Stars" /><br />
																	<br />
																	 If single days only please put date(s) : <input name="codate" size="32" /></h4>
															</td>
														</tr>
														<tr>
															<td valign="top">
																<h4>
                                                                BFA Member:
                                                            </h4>
															</td>
															<td>
																<h4>
                                                                Yes<input type="radio" name="bfat" value="yes" checked="checked" /><br />
																	                                                                No<input type="radio" name="bfat" value="no" /> - Please input your contact information below.<br />
																	                                                                <br />
																	Parent/Guardian&#39;s name:<input name="name" size="20" /><br />
																	                                                                <br />
																	 Phone:<input name="phone" size="20" /><br />
																	                                                                <br />
																	Address:

                                                                <textarea cols="18" rows="5" name="address">
</textarea><br />
																	                                                                Age: <input name="age" size="2" /></h4>
															</td>
														</tr>
														<tr>
															<td colspan="2">
																<div class="c5">
																	<input type="submit" value="Send" /><input type="reset" value="Reset" /></div>
															</td>
														</tr>
													</table>
												</form>
												<?php
                                                            }
                                                    ELSEIF (isset($_GET['form']) && $_GET['form'] == 'true')
                                                            {
                                                            IF (isset($_POST['codate1']))
                                                                    {
                                                                    $codate = $_POST['codate1'];
                                                                    }
                                                            ELSEIF (isset($_POST['codate']))
                                                                    {
                                                                    $codate = $_POST['codate'];
                                                                    }

                                                    // MAIL THIS FORM TO SID

                                                            $email    = 'camp@footyjapan.com';
                                                            //$email    = 'sid@footyjapan.com';
                                                            $title    = 'BFA 2012 Camp Registration Request.';

                                                            $message  = "Below is a summary of the message:\n\n";
                                                            $message .= "STUDENT NAME: ".$_POST['sname']."\n";
                                                            $message .= "EMAIL: ".$_POST['email']."\n";
                                                            $message .= "FINDING US: ".$_POST['source']."\n";
                                                            $message .= "CAMP SELECTION: ".$_POST['camp']."\n";
                                                            $message .= "COURSE SELECTION: ".$_POST['course']."/".$_POST['codate']."\n";
                                                            $message .= "BFA MEMBER: ".$_POST['bfat']."\n";
                                                            $message .= "NAME: ".$_POST['name']."\n";
                                                            $message .= "PHONE: ".$_POST['phone']."\n";
                                                            $message .= "ADDRESS: ".$_POST['address']."\n";
                                                            $message .= "AGE: ".$_POST['age']."\n";

                                                            $headers  = "From: ".$_POST['name']." <".$_POST['email'].">\n";
                                                            $headers .= "Reply-To: ".$_POST['name']." <".$_POST['email'].">\n";
                                                            $headers .= "X-Sender: <".$_POST['email'].">\n";
                                                            $headers .= "X-Mailer: PHP\n";
                                                            $headers .= "Return-Path: <".$_POST['email'].">\n";
                                                            $headers .= "Content-Type: text/plain; charset=iso-8859-1";

                                                            mail($email, $title, $message, $headers);

                                                            echo '<p><b class="red">Thank you, this form has been mailed to us and we will respond shortly<BR>If you have not heard back within a few days, please email info@footyjapan.com or call 03-3770-0288</b></p>';
                                                            }
                                            ?></td>
											<td><img src="../../images/mats/spacer.gif" width="2" height="10" align="left" /></td>
										</tr>
										<tr>
											<td colspan="3"><img src="../../images/mats/spacer.gif" width="10" height="30" align="right" /></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td class="navybor c8" width="350"><a href="http://www.turkishairlines.com/" target="_blank"><img src="../../images/links/TAL.jpg" alt="Turkish Airlines" width="350" height="100"></a></td>
								<td bgcolor="#ff3300" width="350" height="97"><a href="jaguars.html"><img src="../../images/links/Jaguars_ad.jpg" width="350" alt="BFA Jaguars" height="100"></a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<BR>
			<BR>
			<script type="text/javascript"><!--
google_ad_client = "ca-pub-0974683991743235";
/* BFA Page bottom */
google_ad_slot = "2950485070";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
			<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
		</div>
	</body>
</html>
