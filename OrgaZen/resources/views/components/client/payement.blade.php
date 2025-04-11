<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Create Event - Payment</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f9f9f9;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        img {
            max-width: 100%;
        }
        
        /* Color Palette */
        :root {
            --primary: #A0522D;       /* Vibrant pink-red */
            --primary-dark: #E31C5F;  /* Darker shade for hover */
            --secondary: #5E17EB;     /* Rich purple */
            --accent: #00D1FF;        /* Bright cyan */
            --dark: #1A1A2E;          /* Near black with slight blue tint */
            --light: #F8F8F8;         /* Off-white */
            --gray: #767676;          /* Medium gray */
            --success: #34D399;       /* Green */
        }
        
        /* Typography */
        h1, h2, h3, h4, h5 {
            font-weight: 700;
            line-height: 1.2;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
        }
        
        .btn-secondary {
            background-color: var(--secondary);
            color: white;
        }
        
        /* Header */
        header {
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            z-index: 1000;
            top: 0;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 8px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 28px;
        }
        
        .nav-links a {
            font-weight: 600;
            position: relative;
        }
        
        .nav-links a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -6px;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        .cta-buttons {
            display: flex;
            align-items: center;
        }
        
        .login-btn {
            margin-right: 16px;
            font-weight: 600;
        }
        
        /* Event Creation Steps */
        .create-event {
            padding: 120px 0 80px;
            background-color: #f9f9f9;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .section-title h1 {
            font-size: 38px;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .section-title p {
            font-size: 18px;
            color: var(--gray);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .steps-progress {
            display: flex;
            justify-content: space-between;
            margin-bottom: 50px;
            position: relative;
            max-width: 800px;
            margin: 0 auto 50px;
        }
        
        .steps-progress::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: #e0e0e0;
            z-index: 1;
        }
        
        .steps-progress::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: var(--primary);
            z-index: 2;
        }
        
        .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: white;
            position: relative;
            z-index: 3;
        }
        
        .step.active {
            background-color: var(--primary);
        }
        
        .step-label {
            position: absolute;
            top: 45px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            font-size: 14px;
            font-weight: 600;
            color: var(--gray);
        }
        
        .step.active .step-label {
            color: var(--primary);
        }
        
        /* Form Styles */
        .form-container {
            background-color: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
        }
        
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }
        
        .form-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .btn-back {
            background-color: #e0e0e0;
            color: var(--dark);
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            transform: translateY(-2px);
            background-color: #d0d0d0;
        }
        
        .btn-complete {
            background-color: var(--success);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-complete:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(52, 211, 153, 0.2);
        }
        
        /* Payment Summary Styles */
        .payment-summary {
            background-color: #f8f8f8;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 32px;
        }
        
        .summary-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        
        .summary-item:last-child {
            border-bottom: none;
        }
        
        .summary-label {
            font-weight: 600;
        }
        
        .summary-value {
            font-weight: 700;
        }
        
        .summary-total {
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
            margin-top: 12px;
            border-top: 2px solid #e0e0e0;
            font-size: 18px;
            font-weight: 700;
        }
        
        /* Payment Method Styles */
        .payment-methods {
            margin-bottom: 32px;
        }
        
        .payment-method-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 16px;
            color: var(--dark);
        }
        
        .payment-option {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            padding: 16px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .payment-option:hover {
            border-color: var(--primary);
        }
        
        .payment-option.selected {
            border-color: var(--primary);
            background-color: rgba(160, 82, 45, 0.05);
        }
        
        .payment-option input {
            margin-right: 12px;
        }
        
        .payment-logo {
            margin-left: auto;
            display: flex;
            gap: 8px;
        }
        
        .payment-logo i {
            font-size: 24px;
            color: var(--gray);
        }
        
        /* Credit Card Form */
        .card-details {
            margin-top: 24px;
            padding: 24px;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            background-color: #fafafa;
        }
        
        .card-icon {
            display: inline-block;
            margin-left: 8px;
            font-size: 18px;
            color: var(--gray);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-calendar-alt"></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Service Providers</a></li>
                </ul>
                
                <div class="cta-buttons">
                    <a href="{{Route('logout')}}" class="btn btn-primary">logout</a>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Create Event Section - Step 4 (Payment) -->
    <section class="create-event" id="create-event">
        <div class="container">
            <div class="section-title">
                <h1>Complete Your Wedding Event</h1>
                <p>Finalize your event details and process your payment to confirm your booking.</p>
            </div>
            
            <!-- Steps Progress -->
            <div class="steps-progress">
                <div class="step active">
                    1
                    <span class="step-label">Event Details</span>
                </div>
                <div class="step active">
                    2
                    <span class="step-label">Service Providers</span>
                </div>
                <div class="step active">
                    3
                    <span class="step-label">Invitations</span>
                </div>
                <div class="step active">
                    4
                    <span class="step-label">Payment</span>
                </div>
            </div>
            
            <!-- Form Container -->
            <div class="form-container">
                <!-- Payment Summary -->
                <div class="payment-summary">
                    <h3 class="summary-title">Order Summary</h3>
                    
                    <div class="summary-item">
                        <span class="summary-label">Venue Booking Fee</span>
                        <span class="summary-value">$1,000.00</span>
                    </div>
                    
                    <div class="summary-item">
                        <span class="summary-label">Photography Package</span>
                        <span class="summary-value">$800.00</span>
                    </div>
                    
                    <div class="summary-item">
                        <span class="summary-label">Catering (100 guests)</span>
                        <span class="summary-value">$3,500.00</span>
                    </div>
                    
                    <div class="summary-item">
                        <span class="summary-label">Digital Invitations</span>
                        <span class="summary-value">$150.00</span>
                    </div>
                    
                    <div class="summary-item">
                        <span class="summary-label">Service Fee</span>
                        <span class="summary-value">$218.00</span>
                    </div>
                    
                    <div class="summary-total">
                        <span>Total</span>
                        <span>$5,668.00</span>
                    </div>
                </div>
                
                <!-- Payment Methods -->
                <div class="payment-methods">
                    <h3 class="payment-method-title">Select Payment Method</h3>
                    
                    <div class="payment-option selected">
                        <input type="radio" id="creditCard" name="paymentMethod" checked>
                        <label for="creditCard">Credit Card</label>
                        <div class="payment-logo">
                            <i class="fab fa-cc-visa"></i>
                            <i class="fab fa-cc-mastercard"></i>
                            <i class="fab fa-cc-amex"></i>
                        </div>
                    </div>
                    
                    <div class="payment-option">
                        <input type="radio" id="paypal" name="paymentMethod">
                        <label for="paypal">PayPal</label>
                        <div class="payment-logo">
                            <i class="fab fa-paypal"></i>
                        </div>
                    </div>
                    
                    <div class="payment-option">
                        <input type="radio" id="bankTransfer" name="paymentMethod">
                        <label for="bankTransfer">Bank Transfer</label>
                        <div class="payment-logo">
                            <i class="fas fa-university"></i>
                        </div>
                    </div>
                    
                    <!-- Credit Card Details Form -->
                    <div class="card-details">
                        <form id="cardPaymentForm">
                            <div class="form-group">
                                <label for="cardName">Cardholder Name</label>
                                <input type="text" id="cardName" class="form-control" placeholder="Name as it appears on your card" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="cardNumber">Card Number <i class="fas fa-lock card-icon"></i></label>
                                <input type="text" id="cardNumber" class="form-control" placeholder="1234 5678 9012 3456" maxlength="19" required>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="expiryDate">Expiry Date</label>
                                    <input type="text" id="expiryDate" class="form-control" placeholder="MM/YY" maxlength="5" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cvv">CVV <i class="fas fa-question-circle card-icon"></i></label>
                                    <input type="text" id="cvv" class="form-control" placeholder="123" maxlength="4" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="billingAddress">Billing Address</label>
                                <input type="text" id="billingAddress" class="form-control" placeholder="Enter your billing address" required>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="form-group">
                    <label>
                        <input type="checkbox" required> I agree to the <a href="#" style="color: var(--primary);">Terms & Conditions</a> and authorize Orgazen to charge my payment method.
                    </label>
                </div>
                
                <div class="form-actions">
                    <a href="event-creation-step3.html" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn-complete">
                        Complete Payment <i class="fas fa-check"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>