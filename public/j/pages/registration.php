<?php
/* * *************************************************************************
  File Name       : registration.html
  Domain          : http://www.british-football-academy.com/
  ----------------------------------------------------------------------------
  Author          : Ian Warner
  Copyright       : (C) 2001 Triangle Solutions Ltd
  Email           : iwarner@triangle-solutions.com
  URL             : http://www.triangle-solutions.com/
  Description     : Process the form and email to the desired email address
  Date Created    : Tuesday 08 March 2005 22:13:19
  \\||*********************************************************************** */
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="content-type" content="text/html; charset=us-ascii" />
		<link rel="stylesheet" href="../../stylesheet.css" type="text/css" />
		<style type="text/css">
            div.c9 {text-align: right}
            table.c8 {background-color: white}
            td.c7 {background-color: #FFFFFF}
            table.c6 {background-color: #FFFFFF}
            div.c5 {text-align: center}
            table.c4 {background-color: #000066}
            span.c3 {font-size:10.0pt;font-family:Osaka;mso-fareast-language:JA}
            td.c2 {background-color: #FF0000}
            p.c1 {font-weight: bold}
        </style>
		<script type="text/javascript">
            //<![CDATA[
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18843756-3']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
            //]]>
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
						<table class="c8" width="700" cellspacing="0" cellpadding="0" align="center">
							<tr>
								<td class="navybor" colspan="2"><a href="http://www.british-football-academy.com/index.html"><img src="../../images/mats/BFATweblogo.jpg" alt="home" width="700" height="100" border="0" /></a></td>
							</tr>
							<tr>
								<td class="navybor" colspan="2">
									<table class="c4" width="700" cellspacing="0" cellpadding="0" align="center">
										<tr>
											<td rowspan="3"><img src="../../images/mats/UJball2.gif" width="33" height="55" border="0" /></td>
											<td>
												<p class="center white c1"><a href="about.html">ABOUT US</a> | <a href="bulldogs.html">CLASSES</a> | <a href="schedule.html">SCHEDULES &amp; FEES</a> | <a href="coaches.html">COACHES</a> | <b class="white"><a href="venuetis.html">VENUES</a></b></p>
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
												<p class="center"><b class="red">SIGN UP</b> <b class="white">| <a href="thefa.html">THE F.A.</a> | <a href="policies.html">POLICIES</a> | <a href="supporters.html">OUR SUPPORTERS</a> | <a href="mailto:education.ops@footyjapan.com" class="menu">CONTACT US</a></b></p>
											</td>
											<td>
												<p><img src="../../images/mats/flag_jp.gif" width="51" height="26" border="0" align="middle" />&#160;&#160; <a href="../../j/indexj.html"><b class="flag"><span lang="JA" class='c3'>&#26085;&#26412;&#35486;</span></b></a></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td class="navybor c7" colspan="2">
									<table class="c6" border="0" width="660" cellspacing="0" cellpadding="5" align="center" bordercolor="#FF0000">
										<tr>
											<td colspan="3">
												<p class="men"><img src="../../images/mats/spacer.gif" width="10" height="12" align="bottom" /><b class="red">Registration | Summer Camp Registration</b></p>
											</td>
										</tr>
										<tr>
											<td><img src="../../images/mats/spacer.gif" width="2" height="10" align="left" /></td>
											<td class="boxborder">
												<h1>
                                                British Football Academy Trial Request.
                                            </h1>
												<?php
                                            IF (!isset($_GET['form'])) {
                                                ?>
												<p>
                                                    Please fill out all the following information then click the &#39;send&#39; button.<br />
												</p>
												<form action="registration.php?form=true" method="post">
													<table border="0" width="590" cellpadding="0">
														<tr>
															<td rowspan="2">
																<h4>
                                                                    Venue:
                                                                </h4>
															</td>
															<td>
																<h4>
                                                                    Tokyo Locations - TIS<input type="radio" name="venue" value="TIS" checked="checked" />  Sarugaku<input type="radio" name="venue" value="SARUGAKU" /> Nanzan<input type="radio" name="venue" value="NANZAN" /><br />
																</h4>
															</td>
														</tr>
														<tr>
															<td>
																<h4>Yokohama - YC&amp;AC  <input type="radio" name="venue" value="YCAC" /><br />
																</h4>
															</td>
														</tr>
														<tr>
															<td>
																<h4>
                                                                    Parent/Guardian&#39;s name:
                                                                </h4>
															</td>
															<td><input name="name" size="20" /></td>
														</tr>
														<tr>
															<td>
																<h4>
                                                                    Email address:
                                                                </h4>
															</td>
															<td><input name="email" size="20" /></td>
														</tr>
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
                                                                    Sex:
                                                                </h4>
															</td>
															<td>
																<h4>
                                                                    Male<input type="radio" name="sex" value="male" checked="checked" />Female<input type="radio" name="sex" value="female" /><br />
																</h4>
															</td>
														</tr>
														<tr>
															<td>
																<h4>
                                                                    Date of birth (dd/mm/yyyy):
                                                                </h4>
															</td>
															<td>
																<h4>
                                                                    Day <input name="day" size="2" /> / Month <input name="month" size="2" /> / Year <input name="year" size="2" /></h4>
															</td>
														</tr>
														<tr>
															<td>
																<h4>
                                                                    YC&amp;AC Member <span class="small">(for YCAC classes only)</span></h4>
															</td>
															<td>
																<h4>
                                                                    No <input type="radio" name="member" value="no" checked="checked" /> Yes <input type="radio" name="member" value="yes" /> Member Number <input name="memberno" size="10" /></h4>
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
                                            } ELSEIF (isset($_GET['form']) && $_GET['form'] == 'true') {

                                                // MAIL THIS FORM TO SID

                                                $email = 'info@footyjapan.com';
                                                //$email    = 'iwarner@triangle-solutions.com';
                                                $title = 'BFA - Trial Request.';

                                                $message = "Below is a summary of the message:\n\n";
                                                $message .= "VENUE: " . $_POST['venue'] . "\n";
                                                $message .= "NAME: " . $_POST['name'] . "\n";
                                                $message .= "PHONE: " . $_POST['phone'] . "\n";
                                                $message .= "EMAIL: " . $_POST['email'] . "\n";
                                                $message .= "STUDENT NAME: " . $_POST['sname'] . "\n";
                                                $message .= "SEX: " . $_POST['sex'] . "\n";
                                                $message .= "DoB: " . $_POST['day'] . "/" . $_POST['month'] . "/" . $_POST['year'] . "\n";
                                                $message .= "YC/AC: " . $_POST['member'] . "/" . $_POST['memberno'] . "\n";

                                                $headers = "From: " . $_POST['name'] . " <" . $_POST['email'] . ">\n";
                                                $headers .= "Reply-To: " . $_POST['name'] . " <" . $_POST['email'] . ">\n";
                                                $headers .= "X-Sender: <" . $_POST['email'] . ">\n";
                                                $headers .= "Return-Path: <" . $_POST['email'] . ">\n";
                                                $headers .= "Content-Type: text/plain; charset=iso-8859-1";

                                                mail($email, $title, $message, $headers);

                                                echo '<p><b class="red">Thank you, this form has been mailed to us and we will respond shortly</b></p>';
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
								<td bgcolor="#ff3300" width="350" height="100"><a href="../../e/pages/jaguars.html"><img src="../../images/links/Jaguars_ad.jpg" alt="BFA Jaguars" height="100" width="350"></a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
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
