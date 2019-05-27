<?php include 'components/header.php'; ?>
<section class="page-header page-product">
	<div class="container">
		<div class="page-title">
			<h1>DDoS MITIGATION AND WAF</h1>
		</div>
	</div>	
</section>
<section class="page-content-body">
	<div class="container">
		<div class="float-box-wrapper set-p-mb">		
			<div class="row">
				<div class="col-md-6">
					<h1 class="small-main-title">DDoS Mitigation Overview</h1>

					<p>We integrate the best of breed Anti-DDoS protection techniques designed to provide superior online 
					computing security, ensure 100% availability of your website and provide a security perimeter to prevent 
					data theft and cyber-attacks against your data center.</p>

					<p>Due to the nature of TOFFS Secured Multi-CDN, we are able to federate across multiple CDNs to absorb 
					the volumetric attacks. TOFFS Secured Multi-CDN aggregates more than 5 Tbps of traffic and is burstable 
					to 10 Tbps in the event of large scale attacks. With the automated capability to switch real end-users to 
					another CDN network within 30 seconds, TOFFS provides 100% availability of the Secured Multi-CDN network 
					at all times.</p>
				</div>
				<div class="col-md-6">
					<img src="<?php echo ROOT_DIR.'/build/img/multi-cdn-ddos.png';?>" alt=""  class="img-fluid" />
				</div>				
			</div>

			<p>In the event of a bot attack on the primary CDN network, business rules can be configured to automatically switch 
			valid users to another network when the response of the primary network has slowed down. TOFFS 24 x 7 SOC personnel 
			will monitor the attack as well as ensure the real users performance are not degraded by switching the real users to 
			another CDN that is not attacked or affected.</p>

			<p>With web application firewalls in the CDNs and TOFFS infrastructure, organisations are protected from Layer 7 
			application attacks like SQL injections, Cross site scripting, CC attacks, LOIC attacks, etc.</p>

			<p>TOFFS provides the customers a SLA guarantee of 99.999% availability even during a DDoS attack.</p>	
		</div>

		<div class="set-p-mb">
			<h1 class="small-main-title">Cedexis & TOFFS Secured Multi-CDN Use Case Scenarios</h1>
			<p><strong>Under DDoS or Application Level Attack</strong></p>
			<div class="row">
				<div class="col-md-6">
					<ol class="order-list">
						<li>CCompany A traffic is load balanced between 2 CDNs serving valid traffic and having 2 separate networks 
						to mitigate volumetric attack traffic.</li>
						<li>Cedexis’ Radar tracks the real time performance of every end-user and baseline the users response time 
						against the desired threshold (e.g., 3 sec) as well as the health check of the Company A’s origin.</li>
						
					</ol>
				</div>
				<div class="col-md-6">
					<ol start="3" class="order-list">
						<li>Cedexis’ OpenMix load balance the volumetric attack traffic between 2 CDNs and at the same time serving 
						legit traffic by choosing the more responsive & effective CDN to serve the legit end-users’ request.</li>
						<li>Automated Business Rules – Using Cedexis enables Company A and the TOFFS SOC team to switch networks 
						within 30 seconds to ensure the website is always available and there is no single point of failure at DNS or CDN level.</li>
					</ol>
				</div>
			</div>
			<img src="<?php echo ROOT_DIR.'/build/img/toffstech-ddos-attack.gif';?>" class="img-fluid diagram-2 diagram" alt=""/>
		</div>

		<div class="bg-gray set-p-mb">
			<h1 class="small-main-title">TOFFS Secured Multi-CDN & WAF Overview</h1>
			<p>TOFFS Secured Multi-CDN offers Web Application Firewall with full web security protection including OWASP Top-10 coverage, 
			advanced attack protection and 0-day attack protection that automatically adapts your protections to evolving threats and protected assets.</p>
			<div class="row">
				<div class="col-md-6">
					<ul class="marker-none list-indent">
						<li>
							<i class="fas fa-circle pre-icon"></i>
							Activated through a simple DNS change, with no additional hardware or software installed, WAF Service is easily 
							activated to provide web security coverage in the shortest time-to-deploy.</li>
						<li>
							<i class="fas fa-circle pre-icon"></i>
							Provides both negative and positive security models that automatically detect application domains, analyze potential 
							vulnerabilities, and assign optimal protection policies. This allows rapid detection and mitigation of zero-day attacks 
							and the continuous fine-tuning of security policies due to changing application usage patterns.</li>
						<li>
							<i class="fas fa-circle pre-icon"></i>
							<strong>Fully Managed 24 x 7 Security Service</strong> – Fully managed, 24 x 7 service provided by TOFFS Security 
							Operations Team – a dedicated group of security professionals monitoring the security health of our customers' 
							websites and mobile applications.</li>
					</ul>
				</div>
				<div class="col-md-6">
					<img src="<?php echo ROOT_DIR.'/build/img/cdn-waf-diagram.png';?>" class="img-fluid" alt=""/>
				</div>
			</div>
		</div>
		<div class="set-p-mb">
			<h1 class="small-main-title">Scrubbing Center for other ports / protocols (non http / https)</h1>
			<p>With increasing native mobile applications using custom ports in addition to port 80, 433 (e.g. whatsapp uses 5223, 5228, 4244, 5242, 443, 80) 
			and enterprises have other, there is a need for Internet protection services for other ports that CDN typically cannot support.</p>
			<p>TOFFS Secured Multi-CDN provides an option of using Radware’s global network of mitigation devices total over 2Tbps of scrubbing mitigation 
			capacity for non http ports. This capability is spread strategically across scrubbing centers around the world for instances when volumetric attacks 
			threaten to saturate customers’ link capacity. Radware scrubbing centers are designed to serve major markets with minimal latency and are constantly 
			being expanded and upgraded based on the growth of the customer base and changes in DDoS attack trends.</p>
			<p>In addition to its scrubbing centers, Radware also supports multiple cloud POPs for always-on WAF and DDoS protection service. Radware is the only 
			service provider that has dedicated scrubbing centers that segregate clean traffic from attack traffic – further securing the organization’s legitimate traffic.</p>	

			<p class="expand-more"><a href="#wafSpecs" class="read-more">CLICK HERE</a> to view WAF specifications</p>

			<div class="bg-gray set-p-mb" id="wafSpecs">
				<h1 class="small-main-title">Web Application Firewall Specifications</h1>
				<div class="row">
					<div class="col-md-6">
						<p><strong>Web Application Attack Mitigation</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								SQL injection attack protection</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Cross-site scripting attack protection</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Cross-site request forgery (CSRF) attack protection</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Open redirect attack protection</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Bot defenses by detecting known bot agents and frequency of requests</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Buffer overflow mitigation</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Attack evasion techniques by normalizing traffic and enforcing protocol compliance</li>
						</ul>

						<p><strong>Authentication</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Basic</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Digest</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								NT LAN Manager (NTLM)</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Client SSL certificate</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Security Assertion Markup Language (SAML)</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Token-based authentication</li>
						</ul>

						<p><strong>Supported Protocols</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								HTML, DHTML, XML, SOAP, JSON, AJAX</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								HTTP/1.0 and HTTP/1.1</li>
						</ul>
					</div>
					<div class="col-md-6">
						<p><strong>Application Defenses</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								HTTP protocol conformance</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								White list security with automated learning</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Black list security</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Request normalization</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Cookie encryption, URI and form rewriting for session protection</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Client-side caching and SSL security enhancements</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								Blocking by geolocation</li>
								<li>
								<i class="fas fa-circle pre-icon"></i>
								aFleX policies for customized rules and complete programmatic control</li>
						</ul>

						<p><strong>Data Loss Prevention</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Credit card and social security number masking</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Perl Compatible Regular Expressions (PCRE) pattern matching</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Response cloaking</li>
								<li>
						</ul>

						<p><strong>DDoS Protection</strong></p>
						<ul class="marker-none list-indent">
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Volumetric DDoS attacks - SYN flood, ICMP flood, UPD flood, Ping of Death, Smurft attack, LAND attack, fragmented packets</li>
							<li>
								<i class="fas fa-circle pre-icon"></i>
								Application-layer DDoS attacks - HTTP flood, Slowloris, Slow POST, DNS flood, targeted attacks to exhaust backend database resources</li>
						</ul>
					</div>
				</div>
			</div>	
		</div>

	</div>
</section>
<?php include 'components/footer.php'; ?>