<nav class="main-menu mobile-menu">
	<a href="/" class="main-menu__logo"></a>
	<ul class="main-menu__link-list">
		<!--li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'home')? 'active' : null; ?>" href="/">Home</a>
		</li-->
		<li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'gbx-sponsor-firm')? 'active' : null; ?>" href="gbx_sponsor_firm">GBX Sponsor Firm</a>
		</li>
		<li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'smart-contracts')? 'active' : null; ?>" href="smart-contracts">Smart Contracts</a>
			<ul class="main-menu__submenu">
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="utility-tokens">Utility Tokens</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="asset-backed-tokens">Asset Backed Tokens</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="security-tokens">Security Tokens</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="multisig-wallets">Multi-Sig Wallets</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="bespoke-smart-contracts">Bespoke Development</a>
				</li>
			</ul>
		</li>
		<li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'token-sales')? 'active' : null; ?>" href="token_sales">Token Sales</a>
			<ul class="main-menu__submenu">
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="utility-token-sale">Utility Token Sale (ICO/TGE)</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="security-token-offering">Security Token Offering (STO)</a>
				</li>
			</ul>
		</li>
		<li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'advisory')? 'active' : null; ?>" href="advisory">Advisory</a>
		</li>
		<li class="main-menu__item">
			<a class="main-menu__link <?php echo ($active == 'company')? 'active' : null; ?>" href="company">Company</a>
			<ul class="main-menu__submenu">
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="careers">Careers</a>
				</li>
				<li class="main-menu__submenu-item">
					<a class="main-menu__submenu-link" href="partner_with_us">Partner with us</a>
				</li>
			</ul>
		</li>
		<li class="main-menu__item">
			<a class="main-menu__link typeform-share" href="https://rockchain.typeform.com/to/G6TkWd" data-mode="drawer_left" target="_blank">Contact</a>
		</li>
	</ul>
	<button class="mobile-menu__trigger"></button>
	<div class="mobile-menu__flyover">
		<ul class="mobile-menu__list">
			<!--li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'home')? 'active' : null; ?>" href="/">Home</a>
			</li-->
			<li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'gbx-sponsor-firm')? 'active' : null; ?>" href="gbx_sponsor_firm">GBX Sponsor Firm</a>
			</li>
			<li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'smart-contracts')? 'active' : null; ?>" href="smart-contracts">Smart Contracts</a>
				<ul class="mobile-menu__submenu">
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'utility-tokens')? 'active' : null; ?>" href="utility-tokens">Utility Tokens</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'asset-backed-tokens')? 'active' : null; ?>" href="asset-backed-tokens">Asset Backed Tokens</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'security-tokens')? 'active' : null; ?>" href="security-tokens">Security Tokens</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'multisig-wallets')? 'active' : null; ?>" href="multisig-wallets">Multisig Wallets</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'bespoke-smart-contracts')? 'active' : null; ?>" href="bespoke-smart-contracts">Bespoke Development</a>
					</li>
				</ul>
			</li>
			<li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'token-sales')? 'active' : null; ?>" href="token_sales">Token Sales</a>
				<ul class="mobile-menu__submenu">
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'initial-coin-offering')? 'active' : null; ?>" href="utility-token-sale">Utility Token Sale (ICO/TGE)</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'security-token-offering')? 'active' : null; ?>" href="security-token-offering">Security Token Offering (STO)</a>
					</li>
				</ul>
			</li>
			<li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'advisory')? 'active' : null; ?>" href="advisory">Advisory</a>
			</li>
			<li class="mobile-menu__item">
				<a class="mobile-menu__link <?php echo ($active_submenu == 'company')? 'active' : null; ?>" href="company">Company</a>
				<ul class="mobile-menu__submenu">
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'careers')? 'active' : null; ?>" href="careers">Careers</a>
					</li>
					<li class="mobile-menu__submenu-item">
						<a class="mobile-menu__submenu-link <?php echo ($active_submenu == 'partner-with-us')? 'active' : null; ?>" href="partner_with_us">Partner with us</a>
					</li>
				</ul>
			</li>
			<li class="mobile-menu__item">
				<a class="mobile-menu__link typeform-share" href="https://rockchain.typeform.com/to/G6TkWd" data-mode="drawer_left" target="_blank">Contact</a>
			</li>
		</ul>
	</div>
</nav>
