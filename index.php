<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillSplit · Shared expenses without spreadsheets</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="Public/CSS/style.css">
</head>
<body>
    <header class="site-header">
        <div class="shell">
            <a href="#" class="brand">
                <span class="brand-mark"><i class="fas fa-receipt"></i></span>
                BillSplit
            </a>
            <nav class="site-nav" aria-label="Primary navigation">
                <a href="#features">Product</a>
                <a href="#workflow">How it works</a>
                <a href="#pricing">Pricing</a>
                <a href="#footer">Company</a>
            </nav>
            <div class="nav-actions">
                <a href="View/login.html" class="ghost-btn">Sign in</a>
                <a href="View/register.html" class="pill-btn">
                    <span>Get started</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <button class="nav-toggle" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="shell hero-layout">
                <div class="hero-copy">
                    <div class="eyebrow"><span></span>Designed for modern money moments</div>
                    <h1>Split every bill <span class="accent">fairly</span> and keep friendships intact.</h1>
                    <p>BillSplit keeps every shared cost transparent—from your next trip to the electricity bill at home. Track payments, settle balances, and know exactly who owes what in seconds.</p>
                    <div class="hero-actions">
                        <a href="View/register.html" class="pill-btn">
                            <span>Create your free workspace</span>
                            <i class="fas fa-magic"></i>
                        </a>
                        <a href="#features" class="ghost-btn">Explore the product</a>
                    </div>
                    <div class="metrics">
                        <div class="metric">
                            <strong>12k+</strong>
                            <span>shared groups organised</span>
                        </div>
                        <div class="metric">
                            <strong>$48M</strong>
                            <span>in expenses reconciled</span>
                        </div>
                        <div class="metric">
                            <strong>4.9★</strong>
                            <span>rated across app stores</span>
                        </div>
                    </div>
                </div>
                <div class="hero-media">
                    <div class="hero-board" role="presentation">
                        <header>
                            <h3>Weekend getaway · April</h3>
                            <span class="badge"><i class="fas fa-sparkles"></i> Live balance</span>
                        </header>
                        <div class="board-cards">
                            <div class="board-card">
                                <h4><i class="fas fa-city"></i>Stay & lodging</h4>
                                <strong>$842</strong>
                                <span>Paid by Priya · split 4 ways</span>
                            </div>
                            <div class="board-card">
                                <h4><i class="fas fa-utensils"></i>Food & dining</h4>
                                <strong>$312</strong>
                                <span>8 receipts uploaded</span>
                            </div>
                            <div class="board-card">
                                <h4><i class="fas fa-bus"></i>Transport</h4>
                                <strong>$167</strong>
                                <span>2 reimbursements pending</span>
                            </div>
                            <div class="board-card">
                                <h4><i class="fas fa-bolt"></i>Activities</h4>
                                <strong>$204</strong>
                                <span>All even splits</span>
                            </div>
                        </div>
                        <div class="board-list">
                            <div class="board-item">
                                <span class="label"><span class="dot"></span> Alex owes Priya</span>
                                <span class="value">$86.50</span>
                            </div>
                            <div class="board-item">
                                <span class="label"><span class="dot"></span> Jamie owes Dana</span>
                                <span class="value">$41.75</span>
                            </div>
                            <div class="board-item">
                                <span class="label"><span class="dot"></span> Dana is settled</span>
                                <span class="value paid">Cleared</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trusted" aria-label="Trusted by teams">
            <div class="shell">
                <p>Trusted by shared homes, crews & clubs globally</p>
                <div class="trusted-logos">
                    <span>NomadCollective</span>
                    <span>RoomieHub</span>
                    <span>TrailBlazers</span>
                    <span>CampusFund</span>
                    <span>Glow Events</span>
                </div>
            </div>
        </section>

        <section class="feature-panels" id="features">
            <div class="shell">
                <header>
                    <h2>Every tool you need to get square, faster</h2>
                    <p>BillSplit bundles the tedious parts of expense sharing into a calm workspace. Upload receipts, assign who paid, and we handle the maths, notifications, and reminders.</p>
                </header>
                <div class="panel-grid">
                    <article class="panel">
                        <div class="icon"><i class="fas fa-sliders-h"></i></div>
                        <h3>Flexible splits</h3>
                        <p>Weight expenses by people, percentages, or exact amounts. Switch methods per line item without ever leaving the flow.</p>
                        <footer>See how it works <i class="fas fa-arrow-right"></i></footer>
                    </article>
                    <article class="panel">
                        <div class="icon"><i class="fas fa-bell"></i></div>
                        <h3>Gentle nudges</h3>
                        <p>Automated reminders nudge your friends with context, not guilt. We even detect repayments and close the loop for you.</p>
                        <footer>Review notification styles <i class="fas fa-arrow-right"></i></footer>
                    </article>
                    <article class="panel">
                        <div class="icon"><i class="fas fa-chart-pie"></i></div>
                        <h3>Clear overviews</h3>
                        <p>Dashboards highlight what’s owed, what’s paid, and how every group is trending — all exportable in one click.</p>
                        <footer>Preview dashboards <i class="fas fa-arrow-right"></i></footer>
                    </article>
                </div>
            </div>
        </section>

        <section class="workflow" id="workflow">
            <div class="shell">
                <header>
                    <h2>One tidy flow from receipt to repayment</h2>
                    <p>From the first shared transaction to the last “ settled ” message, everything stays tidy, auditable, and in sync across your devices.</p>
                </header>
                <div class="timeline">
                    <div class="timeline-step" data-step="1">
                        <h4>Start a shared workspace</h4>
                        <p>Create a group for your trip, house, or side project. Invite teammates with a link and pick your base currency.</p>
                        <div class="tags">
                            <span>No spreadsheets</span>
                            <span>Unlimited members</span>
                        </div>
                    </div>
                    <div class="timeline-step" data-step="2">
                        <h4>Add expenses on the fly</h4>
                        <p>Snap a photo of the receipt or forward an email. BillSplit reads the totals, suggests a split, and logs who paid.</p>
                        <div class="tags">
                            <span>OCR receipts</span>
                            <span>Smart suggestions</span>
                        </div>
                    </div>
                    <div class="timeline-step" data-step="3">
                        <h4>Settle up without stress</h4>
                        <p>See balances update instantly as repayments roll in. Export statements or sync with your favourite wallet app.</p>
                        <div class="tags">
                            <span>Bank-friendly exports</span>
                            <span>Smart reminders</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing" id="pricing">
            <div class="shell">
                <header>
                    <h2>Simple pricing that scales with your circles</h2>
                    <p>Start free for casual hangs, then grow with pro-level analytics and controls when your groups demand more structure.</p>
                </header>
                <div class="pricing-grid">
                    <article class="pricing-card">
                        <h3>Free</h3>
                        <div class="price">
                            <strong>$0</strong><span>/ month</span>
                        </div>
                        <p>Perfect for flatmates, families, and weekend trips.</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Up to 5 active groups</li>
                            <li><i class="fas fa-check"></i> Unlimited expenses & attachments</li>
                            <li><i class="fas fa-check"></i> Gentle payment reminders</li>
                        </ul>
                        <a href="View/register.html" class="pill-btn">Create free account</a>
                    </article>
                    <article class="pricing-card featured">
                        <span class="pricing-badge">Most loved</span>
                        <h3>Pro</h3>
                        <div class="price">
                            <strong>$9</strong><span>/ month</span>
                        </div>
                        <p>For organisers who manage multiple crews or events.</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Unlimited groups & members</li>
                            <li><i class="fas fa-check"></i> Auto currency conversion</li>
                            <li><i class="fas fa-check"></i> Advanced analytics & exports</li>
                            <li><i class="fas fa-check"></i> Priority email & chat support</li>
                        </ul>
                        <a href="View/register.html" class="pill-btn">Start 14-day trial</a>
                    </article>
                    <article class="pricing-card">
                        <h3>Collective</h3>
                        <div class="price">
                            <strong>$29</strong><span>/ month</span>
                        </div>
                        <p>Tailored controls for clubs, co-ops, and organisations.</p>
                        <ul>
                            <li><i class="fas fa-check"></i> Custom approval workflows</li>
                            <li><i class="fas fa-check"></i> Dedicated success manager</li>
                            <li><i class="fas fa-check"></i> SSO & audit reporting</li>
                            <li><i class="fas fa-check"></i> API & webhook access</li>
                        </ul>
                        <a href="mailto:hello@billsplit.app" class="ghost-btn">Talk to sales</a>
                    </article>
                </div>
            </div>
        </section>

        <section class="final-cta">
            <div class="shell">
                <div class="cta-box">
                    <div>
                        <h2>Ready to make splitting the bill the easiest part?</h2>
                        <p>Create a free workspace in under a minute and keep every group on the same page — on mobile, desktop, and everything in between.</p>
                    </div>
                    <div class="actions">
                        <a href="View/register.html" class="pill-btn">
                            <span>Launch BillSplit for free</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                        <a href="View/login.html" class="ghost-btn">Sign back in</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer" id="footer">
        <div class="shell">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="brand">
                        <span class="brand-mark"><i class="fas fa-receipt"></i></span>
                        BillSplit
                    </a>
                    <p>We believe money conversations should feel light. BillSplit handles the maths so your group can focus on the good times.</p>
                    <div class="social" aria-label="Social media">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
                <div class="footer-nav">
                    <h4>Product</h4>
                    <ul>
                        <li><a href="#features">Features & updates</a></li>
                        <li><a href="#workflow">Workflow</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#">Download app</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="footer-nav">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Help centre</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Status</a></li>
                        <li><a href="#">Security</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>&copy; <?php echo date('Y'); ?> BillSplit. All rights reserved.</span>
                <span>
                    <a href="#">Privacy</a> · <a href="#">Terms</a> · <a href="#">Cookies</a>
                </span>
            </div>
        </div>
    </footer>
</body>
</html>
