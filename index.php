<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillSplit - Smart Bill Management</title>
    <link rel="stylesheet" href="Public/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <div class="logo-icon">
                    <i class="fas fa-calculator"></i>
                </div>
                <span>BillSplit</span>
            </div>
            <div class="nav-links">
                <a href="#features" class="nav-link">Features</a>
                <a href="#how-it-works" class="nav-link">How it Works</a>
                <a href="#pricing" class="nav-link">Pricing</a>
                <a href="View/login.html" class="nav-login">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </a>
            </div>
            <div class="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <div class="gradient-orb orb-1"></div>
            <div class="gradient-orb orb-2"></div>
            <div class="gradient-orb orb-3"></div>
        </div>
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Trusted by 10,000+ users worldwide</span>
                </div>
                <h1 class="hero-title">
                    Split Bills <span class="gradient-text">Smartly</span>
                    <br>With Your Squad
                </h1>
                <p class="hero-description">
                    Split smarter, stay closer. BillSplit makes sharing expenses effortless,
                    transparent, and fair—so you can focus on the moments, not the math.
                </p>
                <div class="hero-actions">
                    <a href="View/register.html" class="btn-primary">
                        <i class="fas fa-rocket"></i>
                        Start Free Trial
                    </a>
                    <a href="View/login.html" class="btn-secondary">
                        <i class="fas fa-play"></i>
                        Watch Demo
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Bills Split</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Happy Users</span>
                    </div>
                    <div class="stat">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Accuracy</span>
                    </div>
                </div>
            </div>
            <div class="hero-visual">
                <div class="phone-mockup">
                    <div class="phone-screen">
                        <div class="app-header">
                            <div class="app-title">Recent Bills</div>
                            <div class="app-balance">+$127.50</div>
                        </div>
                        <div class="bill-item">
                            <div class="bill-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="bill-details">
                                <div class="bill-name">Dinner at Mario's</div>
                                <div class="bill-meta">You owe $15.50</div>
                            </div>
                            <div class="bill-amount">$45.50</div>
                        </div>
                        <div class="bill-item">
                            <div class="bill-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <div class="bill-details">
                                <div class="bill-name">Gas Station</div>
                                <div class="bill-meta">You paid $23.00</div>
                            </div>
                            <div class="bill-amount">$23.00</div>
                        </div>
                        <div class="bill-item">
                            <div class="bill-icon">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="bill-details">
                                <div class="bill-name">Grocery Shopping</div>
                                <div class="bill-meta">Split equally</div>
                            </div>
                            <div class="bill-amount">$89.75</div>
                        </div>
                    </div>
                </div>
                <div class="floating-elements">
                    <div class="floating-card card-1">
                        <i class="fas fa-users"></i>
                        <span>Group</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fas fa-chart-pie"></i>
                        <span>Analytics</span>
                    </div>
                    <div class="floating-card card-3">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Mobile</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose BillSplit?</h2>
                <p>Powerful features designed to make bill splitting simple and stress-free</p>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Smart Groups</h3>
                    <p>Create unlimited groups for different occasions and manage multiple expense categories effortlessly.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Auto Calculations</h3>
                    <p>Automatic calculations with support for equal splits, percentages, and custom amounts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile First</h3>
                    <p>Access your bills anywhere with our responsive design that works perfectly on all devices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Bank-Level Security</h3>
                    <p>Your financial data is encrypted and secure. We never share your information with third parties.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Analytics & Insights</h3>
                    <p>Track your spending patterns and get insights into your group's expense trends.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Lightning Fast</h3>
                    <p>Split bills in seconds with our intuitive interface and real-time synchronization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works" id="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2>How It Works</h2>
                <p>Get started in minutes with our simple 3-step process</p>
            </div>
            <div class="steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Create a Group</h3>
                        <p>Start by creating a group and adding your friends or family members.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Add Expenses</h3>
                        <p>Record shared expenses and specify who paid and how to split the bill.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Settle Up</h3>
                        <p>View who owes what and settle up with simple, clear payment instructions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="section-header">
                <h2>Simple Pricing</h2>
                <p>Choose the plan that works best for you</p>
            </div>
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Free</h3>
                        <div class="price">$0<span>/month</span></div>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Up to 3 groups</li>
                        <li><i class="fas fa-check"></i> Basic calculations</li>
                        <li><i class="fas fa-check"></i> Mobile app</li>
                    </ul>
                    <a href="View/register.html" class="pricing-btn">Get Started</a>
                </div>
                <div class="pricing-card featured">
                    <div class="pricing-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Pro</h3>
                        <div class="price">$9<span>/month</span></div>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Unlimited groups</li>
                        <li><i class="fas fa-check"></i> Advanced analytics</li>
                        <li><i class="fas fa-check"></i> Priority support</li>
                        <li><i class="fas fa-check"></i> Export reports</li>
                    </ul>
                    <a href="View/register.html" class="pricing-btn">Start Free Trial</a>
                </div>
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise</h3>
                        <div class="price">$29<span>/month</span></div>
                    </div>
                    <ul class="pricing-features">
                        <li><i class="fas fa-check"></i> Everything in Pro</li>
                        <li><i class="fas fa-check"></i> Custom integrations</li>
                        <li><i class="fas fa-check"></i> Dedicated support</li>
                        <li><i class="fas fa-check"></i> Advanced security</li>
                    </ul>
                    <a href="View/register.html" class="pricing-btn">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <div class="logo-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <span>BillSplit</span>
                    </div>
                    <p>Making bill splitting simple and fair for everyone.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Product</h4>
                        <a href="#features">Features</a>
                        <a href="#pricing">Pricing</a>
                        <a href="#how-it-works">How it Works</a>
                        <a href="#">API</a>
                    </div>
                    <div class="footer-column">
                        <h4>Support</h4>
                        <a href="#">Help Center</a>
                        <a href="#">Contact Us</a>
                        <a href="#">FAQ</a>
                        <a href="#">Status</a>
                    </div>
                    <div class="footer-column">
                        <h4>Company</h4>
                        <a href="#">About</a>
                        <a href="#">Privacy</a>
                        <a href="#">Terms</a>
                        <a href="#">Careers</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 BillSplit. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
