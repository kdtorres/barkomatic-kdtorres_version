<p align="center"><img src="https://github.com/kimdavetorres/barkomatic/blob/main/img/core-img/logo.png" title="Barkomatic" alt="Barkomatic" /></p>
<p align="center">A Web Online Ticketing for Shipping</p>

## Prerequisites
 [XAMPP](https://www.apachefriends.org/index.html) - Cross-platform web server

## Configuration
PHP Mailer code configuration
```
├── barkomatic
|   ├── dashboard
|   |   ├── ship
|   |   |   ├── modules
|   |   |   |   └── process.php
|   ├── modules
|   |   ├── create-account
|   |   |   ├── login
|   |   |   |   └── process.php
|   |   ├── schedule
|   |   |   └── process.php
```
```php
function modifiedFunctionNameEx(param1_ex, param2_ex) {
    $mail = new PHPMailer(true);
    try{
        $mail->Username = 'yourShippingEmail@gmail.com',
        $mail->Password = 'yourShippingEmailPasswordReal,
        
    // It can be changed from static email into dynamic based on ship owners registration you can freely make your own algorithm for this.
    
   ...
   
```

## Deployment
1. Open XAMPP Control Panel and start:
  `Apache`
  and
  `MySQL`
2. In phpMyAdmin import database file located at:
```
├── barkomatic
|   ├── db
|   |   └── barkomatic_tables.sql
```
3. In your browser type:
```
http://localhost/barkomatic/
```
## Project Functionality
 `Passenger`
  ```
  Create Account
  Login
  Reset Password
  Search Schedule
  Reservation
  Reservation Expiry
  Email Notification
  ```
 `Ship Owner`
  ```
  Create Account
  Login
  Reset Password
  Dashboard
  Create Reservation Schedules
  Create Roles to manage passenger resevation status
  Content Management
  ```
`Ship Staff`
  ```
  Create Account
  Login
  Reset Password
  Dashboard
  Manage passenger reservations
  Send email notification reservation status
  Content Management
  ```
  
