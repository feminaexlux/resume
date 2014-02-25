<?php
	date_default_timezone_set('America/Los_Angeles');

	$year = date('Y');
	$html = $year - 2002;
	$linux = $year - 2002;
	$mysql_php = $year - 2002;
	$struts_hibernate_spring = $year - 2010;
	$play_ruby_bootstrap = $year - 2012;
	$rabbitmq = $year - 2012;

	function printYear($printYear) {
		echo $printYear . " year" . ($printYear != 1 ? "s" : "");
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<title>Lani Aung, CSM</title>
		
		<meta charset="utf-8">
		<meta name="description" content="The resume of Lani Aung, CSM, software engineer and web developer">
		<meta name="keywords" content="java,software,engineer,web,developer,resume">
		<meta name="author" content="Lani Aung">

		<link href="http://microformats.org/profile/hcard" rel="profile">
		<link href="http://fonts.googleapis.com/css?family=Amethysta|Fjalla+One" rel="stylesheet" type="text/css">
		<link href="stylesheets/combined.min.css" rel="stylesheet" type="text/css">
		<!--[if IE 7]>
			<link rel="stylesheet" href="stylesheets/font-awesome-ie7.min.css">
		<![endif]-->
		<link href="stylesheets/print.min.css" rel="stylesheet" type="text/css" media="print">
		<link href="assets/Divinya2Icon.ico" rel="shortcut icon">
	</head>
	<body>
		<article id="resume">
			<header id="hcard-Lani-Aung" class="vcard">
				<h1 title="Also known as Ulanda S. Aung" class="fn n">
					<span class="nickname">Lani</span> S. <span class="family-name">Aung</span>,
					<a href="assets/CSMCertificate.pdf"><abbr title="Certified ScrumMaster" class="honorific-suffix">CSM</abbr></a>
				</h1>
				<h2>Software Engineer &amp; Web Developer</h2>
				<h3 class="tel">+1 (714) 696-6301</h3>

				<hr>

				<section id="contact-details">
					<div class="address adr">
						<span class="screen"><i class="icon-circle-blank"></i></span>
						<span class="locality">Irvine</span>, <span class="region"><abbr title="California">CA</abbr></span>, <span class="country-name"><abbr title="United States">US</abbr></span>
					</div>
					<div class="divider">|</div>
					<div>
						<span class="screen"><i class="icon-envelope"></i> <a href="mailto:uaung@alumni.uci.edu" class="email">Email</a></span>
						<span class="print">uaung@alumni.uci.edu</span>
					</div>
					<div class="divider">|</div>
					<div class="site_url">
						<span class="screen"><i class="icon-link"></i> <a href="http://flavoredorange.org" class="url">Personal Website</a></span>
						<span class="print">http://flavoredorange.org</span>
					</div>
					<div class="divider">|</div>
					<div class="google_plus">
						<span class="screen"><i class="icon-google-plus-sign"></i> <a href="http://bit.ly/feminaexlux" class="url">Social</a></span>
						<span class="print">http://bit.ly/feminaexlux</span>
					</div>
				</section>
				<hr>
			</header>

			<section class="skills">
				<header>Skills</header>

				<div class="content">
					<ul>
						<!-- LINKS AHOY -->
						<li><?php printYear($html); ?> of experience with HTML programming, and <abbr title="Linux, Apache (httpd), MySQL, PHP">LAMP</abbr> and <abbr title="Windows, Apache (httpd), MySQL, PHP">WAMP</abbr> configurations.</li>
						<li><?php printYear($mysql_php); ?> of active use of <a href="https://www.mysql.com/">MySQL</a>, <a href="http://www.php.net/">PHP</a>, <a href="http://jquery.com/">jQuery</a>, and <a href="http://www.java.com/en/">Java</a> using development environments such as <a href="http://www.eclipse.org/">Eclipse</a>, <a href="http://www.sublimetext.com/" title="This resume was created using Sublime">Sublime Text</a> and <a href="http://www.jetbrains.com/idea/" title="So far the most complex and feature-filled IDE I've seen">IntelliJ IDEA</a>.</li>
						<li><?php printYear($struts_hibernate_spring); ?> of comfortable familiarity with <a href="https://struts.apache.org/2.x/index.html">Struts 2</a>, <a href="http://tomcat.apache.org/index.html">Tomcat</a>, <a href="http://www.hibernate.org/">Hibernate</a>, <a href="http://www.springsource.org/">Spring</a>, <a href="https://maven.apache.org/">Maven</a>, SOAP/WSDL, <a href="http://subversion.apache.org/">SVN</a>/<a href="http://git-scm.com/" title="Not the easiest, but this seems like a clear winner">GIT</a>, <a href="http://junit.org/" title="Great testing framework.">JUnit</a>, and <a href="https://code.google.com/p/mockito/">Mockito</a>.</li>
						<li><?php printYear($play_ruby_bootstrap); ?> of ongoing learning of <a href="http://www.playframework.org/">the Play 2.0 Framework</a>, <a href="http://www.lighttpd.net/">Lighttpd</a>, <a href="http://www.ruby-lang.org/en/">Ruby</a>, <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a> and <a href="http://fortawesome.github.com/Font-Awesome/">FontAwesome</a>.</li>
						<li><?php printYear($rabbitmq); ?> of using <a href="http://www.rabbitmq.com/">RabbitMQ</a> AMQP implementation for asynchronous event handling.</li>
						<li>Active utilization of virtualization technologies like <a href="http://www.vmware.com/">VMWare</a>, <a href="https://www.virtualbox.org/">Virtualbox</a> and <a href="https://www.microsoft.com/windows/virtual-pc/">Virtual PC</a>.</li>
						<li>Extensive use of <a href="https://www.atlassian.com/" title="These are very good products!">Atlassian products</a> like JIRA, Confluence, Bamboo and Fisheye.</li>
					</ul>

					<hr>

					<ul>
						<li>Highly adaptable, quick to learn new methods and implementations.</li>
						<li>Motivated to work in teams or alone in projects with defined goals.</li>
						<li>Communicative, able to point out issues, explain ideas and concepts clearly, and suggest new ideas for improvement.</li>
						<li>Designs with independent-platform, cross-browser and accessibility standards.</li>
					</ul>
				</div>
			</section>

			<hr>

			<section class="experience">
				<header>Previous Experiences</header>
				
				<div class="content">
					<dl>
						<dt><time datetime="2010-01-04">January 2010</time></dt>
						<dt><strong>Java Developer</strong> at <a href="http://www.picsauditing.com/">PICS Auditing, LLC</a></dt>
						<dd>
							<section class="summary">
								<ul>
									<li>Lead multiple projects that in whole became a brand new product line, broadening the available client base.</li>
									<li>Implemented new features that provided major sources of revenue, such as allowing for pre-registration, expediting the customer-to-company relationship establishment.</li>
									<li>Became team leader and release manager, leading code reviews, training, paired programming, and giving presentations on technologies.</li>
									<li>Internationalized a once US-only site application to reach global audiences, using home grown technology that was easily exportable and importable for ease of translation.</li>
									<li>Effectively communicated directly with teams, clients and staff members throughout all departments.</li>
									<li>Provided flexibility when requirements changed, delivered on-time, robust products focusing on 100% stability and satisfaction.</li>
									<li>Won multiple performance awards and became the go-to woman for in depth explanations and quick assessments.</li>
								</ul>
							</section>
						</dd>
					</dl>

					<hr>

					<dl>
						<dt><time datetime="2008-12-01">December 2008 – September 2009</time></dt>
						<dt><strong>Student Programmer</strong> at <a href="http://oit.uci.edu/"><span class="screen">Research Computing Support, </span>UC Irvine</a></dt>
						<dd>
							<section class="summary">
								<ul>
									<li>Created an interactive and dynamic online system to manage data center information.</li>
									<li>Provided dynamic table generation, data storage into MySQL databases, searches, nightly PDF/image generation, and user management.</li>
								</ul>
							</section>
						</dd>
					</dl>
				</div>
			</section>

			<hr>

			<section class="education">
				<header>Education</header>
				
				<div class="content">
					<dl>
						<dt><time datetime="2009-08-10">Summer 2009</time></dt>
						<dt>Graduated from <a href="http://www.uci.edu/" title="Zot zot">University of California, Irvine</a>.</dt>
						<dd>
							<section class="summary">
								<ul>
									<li>Bachelor of Science degree achieved in Biological Sciences, with a minor in Information and Computer Science.</li>
									<li>GPA of 3.85 in Information and Computer Science minor.</li>
								</ul>
							</section>
						</dd>
					</dl>

					<hr>

					<dl>
						<dt><time datetime="2013-04-23">April 2013</time></dt>
						<dt>Certified ScrumMaster Training</dt>
						<dd>
							<section class="summary">
								<ul>
									<li>2 day seminar on Scrum fundamentals, lead by Carlton Nettleton of <a href="http://lookforwardconsulting.com/">Look Forward Consulting</a>.</li>
								</ul>
							</section>
						</dd>
					</dl>
				</div>
			</section>

			<hr>

			<section class="additional-links">
				<header>Additional Links</header>
				
				<div class="content">
					<span class="screen"><i class="icon-github-sign"></i> <a href="https://github.com/feminaexlux" class="url">Github</a></span>
					<span class="print">https://github.com/feminaexlux</span>
					<br>
					<span class="screen"><i class="icon-linkedin-sign"></i> <a href="http://www.linkedin.com/in/laniaung/" class="url">LinkedIn</a></span>
					<span class="print">http://www.linkedin.com/in/laniaung/</span>
					<br>
					<span class="screen"><i class="icon-facebook-sign"></i> <a href="https://www.facebook.com/feminaexlux" class="url">Facebook</a></span>
					<span class="print">https://www.facebook.com/feminaexlux</span>
					<br>
					<span class="screen"><i class="icon-twitter-sign"></i> <a href="https://www.twitter.com/feminaexlux" class="url">Twitter</a></span>
					<span class="print">https://www.twitter.com/feminaexlux</span>
				</div>
			</section>
			
			<footer>
				<hr>
				<p>Last updated 2014-02-24</p>
				<p>&copy; <span title="aka Ulanda S. Aung"><a href="mailto:uaung@alumni.uci.edu">Lani Aung</a></span></p>
			</footer>
		</article>
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</body>
</html>