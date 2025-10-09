<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BillSplit - Smart Bill Management</title>
    <link rel="stylesheet" href="Public/CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-receipt"></i>
                <span>BillSplit</span>
            </div>
            <div class="nav-links">
                <a href="#features">Features</a>
                <a href="#how-it-works">How it Works</a>
                <a href="View/login.html" class="nav-login">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <div class="hero-badge">
                    <i class="fas fa-star"></i>
                    <span>Trusted by 10,000+ users</span>
                </div>
                <h1 class="hero-title">
                    Split Bills <span class="gradient-text">Effortlessly</span>
                    <br>With Friends & Family
                </h1>
                <p class="hero-description">
                    The smartest way to manage shared expenses. Track who owes what, 
                    settle up instantly, and never worry about awkward money conversations again.
                </p>
                <div class="hero-actions">
                    <a href="View/register.html" class="btn-primary">
                        <i class="fas fa-rocket"></i>
                        Get Started Free
                    </a>
                    <a href="View/login.html" class="btn-secondary">
                        <i class="fas fa-sign-in-alt"></i>
                        Sign In
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
                <div class="floating-card card-1">
                    <i class="fas fa-utensils"></i>
                    <span>Dinner</span>
                    <span class="amount">$45.50</span>
                </div>
                <div class="floating-card card-2">
                    <i class="fas fa-car"></i>
                    <span>Gas</span>
                    <span class="amount">$23.00</span>
                </div>
                <div class="floating-card card-3">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Groceries</span>
                    <span class="amount">$89.75</span>
                </div>
                <div class="hero-image">
                    <img src="Public/Images/coverimage.png" alt="Bill splitting illustration">
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
                    <h3>Group Management</h3>
                    <p>Create groups for different occasions and manage multiple expense categories effortlessly.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Smart Calculations</h3>
                    <p>Automatic calculations with support for equal splits, percentages, and custom amounts.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Friendly</h3>
                    <p>Access your bills anywhere with our responsive design that works on all devices.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure & Private</h3>
                    <p>Your financial data is encrypted and secure. We never share your information.</p>
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-brand">
                    <div class="footer-logo">
                        <i class="fas fa-receipt"></i>
                        <span>BillSplit</span>
                    </div>
                    <p>Making bill splitting simple and fair for everyone.</p>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Product</h4>
                        <a href="#">Features</a>
                        <a href="#">Pricing</a>
                        <a href="#">How it Works</a>
                    </div>
                    <div class="footer-column">
                        <h4>Support</h4>
                        <a href="#">Help Center</a>
                        <a href="#">Contact Us</a>
                        <a href="#">FAQ</a>
                    </div>
                    <div class="footer-column">
                        <h4>Company</h4>
                        <a href="#">About</a>
                        <a href="#">Privacy</a>
                        <a href="#">Terms</a>
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
