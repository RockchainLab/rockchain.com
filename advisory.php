<?php
	header("Location: /",TRUE,301);
	exit();
?>

<?
$title = "Rockchain Advisory";
$custom_meta = '
<meta name="keywords" content="Rockchain, Advisory, Consulting" />
<meta name="description" content="We provide advisory services to companies who wish to establish as Distributed Ledger Technology businesses and participate in the Crypto Economy. We provide help with Strategic Planning, Business plans, White papers, Cybersecurity, Technology evaluation, Financial planning either in-house or through a network of trusted partners." />
<meta name="robots" content="index, follow" />';

$custom_og = '
<meta property="og:url" content="https://www.rockchain.com/"/>
<meta property="og:title" content="Rockchain Advisory"/>
<meta property="og:description" content="We provide advisory services to companies who wish to establish as Distributed Ledger Technology businesses and participate in the Crypto Economy. We provide help with Strategic Planning, Business plans, White papers, Cybersecurity, Technology evaluation, Financial planning either in-house or through a network of trusted partners."/>';
?>
<?php include 'header.php'; ?>
<?php $active = 'advisory'; ?>
<?php $active_submenu = 'advisory'; ?>
<section class="section-hero hero-small-illustration hero-illustration-1">
	<div class="container section-hero__container">
		<?php include 'menu.php'; ?>
		<h1 class="heading-1">Consulting and advisory for <span class="highlight">DLT businesses</span>.</h1>
	</div>
</section>
<section class="section-white">
	<div class="container section-white__container">
		<div class="row-3 paragraphs">
			<div class="box-6">
				<h2 class="heading-2">Advisory</h2>
				<p class="paragraph-1">Rockchain exists to support innovation and development by helping companies with credible teams and projects to establish their presence in our crypto-friendly jurisdiction and become a valuable member of a reputable ecosystem.</p>
				<p class="paragraph-1">We provide advisory services to companies who wish to establish as Distributed Ledger Technology businesses and participate in the Crypto Economy. We provide help with Strategic Planning, Business plans, White papers, Cybersecurity, Technology evaluation, Financial planning either in-house or through a network of trusted partners.</p>
			</div>
			<div class="box-6">
				<h2 class="heading-2">Compliance</h2>
				<p class="paragraph-1">If you are looking to establish your business within Gibraltar under the new DLT Providers regime, a leader for business in the Crypto and Fintech economies, we can act as your lead advisor, supporting you through your licence application and/or Token Sale. We will assemble and help you manage the team necessary for success and enable you to spend more of your time on your core business or project.</p>
			</div>
		</div>
	</div>
</section>
<section class="section-grey">
	<div class="container section-grey__container">
		<div class="row-3 paragraphs">
			<div class="box-6">
				<h2 class="heading-2">Fundraising</h2>
				<p class="paragraph-1">We have investor and management experience relevant to you. Our team has designed, launched and supported products and services and we can review your business model, identify gaps and help you to improve your investor proposition. We can then support you through a successful fundraiser, whether running a Token Sale or more traditional forms of fundraising.</p>
			</div>
			<div class="box-6">
				<h2 class="heading-2">Information strategy</h2>
				<p class="paragraph-1">We help you draft your Information and Communication (ICT) security policies and our partners can act as your 'virtual information officer' and ensure compliance with the relevant security standards and best practices.</p>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
