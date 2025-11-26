
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login - International College of Business and Management</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1a2a6c, #b21f1f, #1a2a6c);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.96);
      border-radius: 14px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
      width: 100%;
      max-width: 400px;
      padding: 12px 40px;
    }

    .college-name {
      text-align: center;
      margin-bottom: 35px;
      color: #1a2a6c;
      font-size: 24px;
      font-weight: 700;
      letter-spacing: 0.5px;
      line-height: 1.4;
    }

    .form-group {
      margin-bottom: 22px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #222;
      font-weight: 600;
      font-size: 14px;
    }

    input,
    select {
      width: 100%;
      padding: 14px;
      border: 0.1px solid #ddd;
      border-radius: 9px;
      font-size: 16px;
      background: #fafbff;
      transition: border 0.3s, box-shadow 0.3s;
    }

    input:focus,
    select:focus {
      outline: none;
      border-color: #1a2a6c;
      background: #ffffff;
      box-shadow: 0 0 0 3px rgba(26, 42, 108, 0.2);
    }

    .btn-login {
      width: 100%;
      padding: 15px;
      background: linear-gradient(to right, #1a2a6c, #2c3e9e);
      color: white;
      border: none;
      border-radius: 10px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
      box-shadow: 0 4px 12px rgba(26, 42, 108, 0.3);
    }

    .btn-login:hover {
      background: linear-gradient(to right, #15235a, #233480);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(26, 42, 108, 0.4);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .show-password {
      display: flex;
      align-items: center;
      margin-top: -15px;
      margin-bottom: 15px;
    }

    .show-password input {
      width: auto;
      margin-right: 8px;
    }

    .show-password label {
      margin-bottom: 0;
      font-size: 13px;
      color: #555;
      cursor: pointer;
    }

    @media (max-width: 550px) {
      .login-container {
        padding: 35px 25px;
      }
      .college-name {
        font-size: 21px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1 class="college-name">International College of Business and Management</h1>

    <form id="loginForm">
      <!-- Full Name -->
      <div class="form-group">
        <label for="name">Student Id</label>
        <input type="text" id="name" name="name" placeholder="Enter your student id" required />
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required />
        
        <!-- Show Password Checkbox -->
        <div class="show-password">
          <input type="checkbox" id="showPassword" /><br><br>
          <label for="showPassword">Show Password</label>
        </div>
      </div>

      <!-- Login Button -->
      <button type="submit" class="btn-login"> <a href="gradepage.html" style="color: white;">Log in</a></button>
    </form>
  </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      e.preventDefault();

      // Get field values
      const name = document.getElementById('name').value.trim();
      const programme = document.getElementById('programme').value;
      const year = document.getElementById('year').value;
      const semester = document.getElementById('semester').value;
      const password = document.getElementById('password').value;

      // Validation
      if (!name) {
        alert('Please enter your full name.');
        return;
      }

      if (!programme) {
        alert('Please select your programme.');
        return;
      }

      if (!year) {
        alert('Please select your year.');
        return;
      }

      if (!semester) {
        alert('Please select your semester.');
        return;
      }

      if (password.length < 6) {
        alert('Password must be at least 6 characters long.');
        return;
      }

      // If all valid → simulate successful login
      alert(`✅ Login successful!\nWelcome, ${name}!\nProgramme: ${document.getElementById('programme').options[document.getElementById('programme').selectedIndex].text}`);
      
    });

    // Toggle password visibility
    document.getElementById('showPassword').addEventListener('change', function() {
      const passwordField = document.getElementById('password');
      if (this.checked) {
        passwordField.type = 'text';
      } else {
        passwordField.type = 'password';
      }
    });
  </script>
</body>
</html>