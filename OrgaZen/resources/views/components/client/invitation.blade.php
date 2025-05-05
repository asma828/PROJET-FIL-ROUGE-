<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orgazen - Create Event - Guest Invitations</title>
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
        
        .section-subtitle {
            font-size: 16px;
            color: var(--gray);
            text-align: center;
            margin-bottom: 30px;
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
            width: 75%;
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
        
        .invitation-templates {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .select-circle {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 24px;
            height: 24px;
            border: 2px solid #e0e0e0;
            border-radius: 50%;
            background-color: white;
            transition: all 0.3s ease;
        }
        
        .template-card.selected .select-circle {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        
        .template-card.selected .select-circle::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 14px;
        }
        
        .guest-list {
            margin-top: 40px;
        }
        
        .guest-list-title {
            font-size: 20px;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .guest-inputs {
            margin-bottom: 20px;
        }
        
        .guest-input-row {
            display: flex;
            gap: 15px;
            margin-bottom: 15px;
        }
        
        .guest-input-row .form-group {
            flex: 1;
            margin-bottom: 0;
        }
        
        .remove-guest {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f5f5f5;
            color: var(--gray);
            cursor: pointer;
            margin-top: 26px;
        }
        
        .remove-guest:hover {
            background-color: #e0e0e0;
        }
        
        .add-guest-btn {
            display: inline-flex;
            align-items: center;
            background-color: transparent;
            color: var(--primary);
            border: none;
            font-weight: 600;
            cursor: pointer;
            padding: 0;
        }
        
        .add-guest-btn i {
            margin-right: 8px;
        }
        
        .add-guest-btn:hover {
            text-decoration: underline;
        }
        
        .skip-text {
            text-align: center;
            margin-top: 20px;
            color: var(--gray);
            font-size: 14px;
        }
        
        .form-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 40px;
        }
        
        .btn-back {
            background-color: transparent;
            color: var(--gray);
            border: 2px solid #e0e0e0;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-back:hover {
            border-color: var(--gray);
        }
        
        .btn-next {
            background-color: var(--primary);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-next:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(160, 82, 45, 0.2);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class=""></i> Orgazen
                </a>
                
                <ul class="nav-links">
                    <li><a href="{{Route('components.client.home')}}">Home</a></li>
                    <li><a href="{{Route('components.client.categories')}}">Events</a></li>
                    <li><a href="{{ route('components.client.EventHistory', ['id' => auth()->user()->id]) }}">History</a></li>
                    <li><a href="{{Route('components.client.providers')}}">Service Providers</a></li>
                </ul>
                
                <div class="cta-buttons">
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </nav>
        </div>
    </header>
    
    <!-- Create Event Section - Step 3 -->
    <section class="create-event" id="create-event">
        <div class="container">
            <div class="section-title">
                <h1>Send Invitations</h1>
                <p>Invite your guests to your wedding with beautiful digital invitations.</p>
            </div>
            
            <p class="section-subtitle">(Optional) You can skip this step if you prefer to send invitations later</p>
            
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
                <div class="step">
                    4
                    <span class="step-label">Payment</span>
                </div>
            </div>
            
            <!-- Form Container -->
            <div class="form-container">
                <form id="invitationsForm" action="{{ route('client.sendInvitations', $reservation->id) }}" method="POST">
                    @csrf
            <!-- Guest List -->
                    <div class="guest-list">
                        <h3 class="guest-list-title">Add Your Guest List</h3>
                        <div class="guest-inputs" id="guestInputsContainer">
                            <!-- First Guest Row -->
                            <div class="guest-input-row">
                                <div class="form-group">
                                    <label for="guestName1">Guest Name</label>
                                    <input type="text" name="guest_names[]" id="guestName1" class="form-control" placeholder="Enter guest name">                                </div>
                                
                                <div class="form-group">
                                    <label for="guestEmail1">Email Address</label>
                                    <input type="email" name="guest_emails[]" id="guestEmail1" class="form-control" placeholder="Enter email address">                                </div>
                            </div>
                        </div>
                        
                        <button type="button" class="add-guest-btn" onclick="addGuestRow()">
                            <i class="fas fa-plus-circle"></i> Add Another Guest
                        </button>
                    </div>
                    
                    <div class="form-group">
                        <label for="personalMessage">Personal Message (Optional)</label>
                        <textarea name="personal_message" id="personalMessage" class="form-control" rows="4" placeholder="Add a personal message to your invitation"></textarea>
                    </div>
                    
                    <p class="skip-text">This step is optional. You can skip to proceed to payment.</p>
                    
                    <div class="form-actions">
                        <a href="{{ route('components.client.serviceProviderSelect', $reservation) }}" class="btn-back">Back</a>
                        <button type="submit" class="btn-next">Next: Payment</button>
                        <a href="{{ route('client.invitations.skip', $reservation->id) }}" class="btn-back">
                            Skip
                        </a>
                    </div>
                  
                </form>
            </div>
        </div>
    </section>

    <script>
        // Counter for guest rows
        let guestCounter = 1;
        // Function to add a new guest row
        function addGuestRow() {
            guestCounter++;
            
            const container = document.getElementById('guestInputsContainer');
            
            const row = document.createElement('div');
            row.className = 'guest-input-row';
            row.innerHTML = `
    <div class="form-group">
        <label for="guestName${guestCounter}">Guest Name</label>
        <input type="text" name="guest_names[]" id="guestName${guestCounter}" class="form-control" placeholder="Enter guest name">
    </div>
    
    <div class="form-group">
        <label for="guestEmail${guestCounter}">Email Address</label>
        <input type="email" name="guest_emails[]" id="guestEmail${guestCounter}" class="form-control" placeholder="Enter email address">
    </div>

    <div class="remove-guest" onclick="removeGuestRow(this)">
        <i class="fas fa-times"></i>
    </div>
`;  
            container.appendChild(row);
        }
        // Function to remove a guest row
        function removeGuestRow(btn) {
            const row = btn.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>