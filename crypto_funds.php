<?
$title = "Crypto Funds Services";
$custom_meta = '
<meta name="keywords" content="Rockchain, Crypto, Funds, Investments" />
<meta name="description" content="We provide tailored services for funds investing into cryptocurrencies, coins, tokens or other forms of Digital Assets." />
<meta name="robots" content="index, follow" />';

$custom_og = '
<meta property="og:url" content="https://www.rockchain.com/"/>
<meta property="og:title" content="Crypto Funds Services"/>
<meta property="og:description" content="We provide tailored services for funds investing into cryptocurrencies, coins, tokens or other forms of Digital Assets."/>';
?>
<?php include 'header.php'; ?>
<?php $active = 'crypto-funds'; ?>
<?php $active_submenu = 'crypto-funds'; ?>
<section class="section-hero hero-small-illustration hero-illustration-1">
	<div class="container section-hero__container">
		<?php include 'menu.php'; ?>
		<h1 class="heading-1">Services for funds investing within the <span class="highlight">Crypto Economy</span>.</h1>
	</div>
</section>
<section class="section-white">
	<div class="container section-white__container">
		<div class="row-3 paragraphs">
			<div class="box-6">
				<h2 class="heading-2">Digital Asset Management policies</h2>
				<p class="paragraph-1">We provide tailored services for funds investing into cryptocurrencies, coins, tokens or other forms of Digital Assets.</p>
				<p class="paragraph-1">We help you define your Information and Communication Security procedures and policies tailored for safe handling of digital assets, following established security standards and evolving industry best practices. Our policies cover:</p>
				<ul class="point-list">
					<li>General Communication and IT security policies</li>
					<li>Specific policies related to safe handling of digital assets</li>
					<li>Cold/Hot storage procedures</li>
					<li>Trading venues account security</li>
					<li>Incident management</li>
				</ul>
			</div>
			<div class="box-6">
				<h2 class="heading-2">Valuation Models Advisory</h2>
				<p class="paragraph-1">A lack of reliable pricing information on some of the more exotic Digital Assets can provide challenges. Many cryptocurrency exchanges are still unregulated and sometimes the historical data provided even by some of the largest trading venues may be unreliable. We can advise you on your valuation models for each individual class of digital asset and help you define the best procedures for valuing these assets, including:</p>
				<ul class="point-list">
					<li>Common, liquid and fungible assets (BTC, ETH, LTC, BCH, XRP)</li>
					<li>Less liquid or common DAs (NEO, XEM, FCT)</li>
					<li>Fungible tokens (i.e. ERC20, NEP-5)</li>
					<li>Non-fungible assets (i.e. ERC721)</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="section-grey">
	<div class="container section-grey__container">
		<h2 class="heading-2">Report Validation services</h2>
		<div class="row-3 paragraphs">
			<div class="box-6 box-s-margin">
				<p class="paragraph-1">The manual revision and confirmation of transactions reports of digital assets with complicated valuation methods, may be a work intensive and error-prone process. Rockchain has developed tools, that allow us to apply even the most complicated valuation models on any digital asset and produce reports on demand.</p>
				<p class="paragraph-1">You provide us with the input data to produce the report. This may consist of:</p>
				<ul class="point-list">
					<li>Read-only API connection to the exchanges where you commence trading</li>
					<li>CSV/JSON/XML trade logs</li>
					<li>API connection to 3rd party trade tracking services</li>
					<li>List of cold storage wallets</li>
					<li>Public blockchain wallet addresses of the fund’s cold storage</li>
				</ul>
			</div>
			<div class="box-6">
				<p class="paragraph-1">We then consolidate all data sources into one report and apply the right valuation model as defined in your DAM Valuation policy to every transaction to give the trade value per transaction.</p>
				<p class="paragraph-1">We also produce a Custody report, indicating what amount of units of each asset shall be present at each storage provider at any given&nbsp;time.</p>
				<p class="paragraph-1">The report can be used by Investment Manager, Directors and Administrators to verify the integrity of other reports (i.e. trading venues, blockchain transactions, etc.) and will make the fund reporting a more straightforward process and save you considerable time.</p>
				<a class="typeform-share button-cta" href="https://rockchain.typeform.com/to/G6TkWd" data-mode="drawer_left" target="_blank">Contact us</a>
			</div>
		</div>
	</div>
</section>
<?php include 'footer.php'; ?>
