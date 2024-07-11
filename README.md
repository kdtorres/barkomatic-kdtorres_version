<p align="center"><img src="https://github.com/kimdavetorres/barkomatic/blob/main/img/core-img/logo.png" title="Barkomatic" alt="Barkomatic" /></p>
<p align="center">A Web Online Ticketing for Shipping</p>

## Xampp
 [XAMPP](https://www.apachefriends.org/index.html)

## PHP Mailer
PHP Mailer
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
        
    //.....
    
   ...
   
```

## Deployment
1. Start XAMPP Control Panel:
  `Apache`
  and
  `MySQL`
2. In phpMyAdmin ``` http://localhost/phpmyadmin/ ``` import database file located at folders:
```
├── barkomatic
|   ├── db
|   |   └── barkomatic_tables.sql
```
3. In your browser type:
```
http://localhost/barkomatic/
```
## Functionality
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
  
