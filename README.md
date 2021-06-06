# BarkoMatic
A Web Online Ticket for Shipping
## Prerequisites
* [XAMPP](https://www.apachefriends.org/index.html) - Cross-platform web server

## Configuration
* Locate C:\xampp\sendmail\sendmail.ini and replace the following:
```
smtp_server=smtp.gmail.com

smtp_port=465

smtp_ssl=ssl

auth_username=your@gmail.com
auth_password=yourpassword

force_sender=your@gmail.com

hostname=localhost
```
* Locate C:\xampp\php\php.ini find [mail function] and replace the following:
```
[mail function]
; For Win32 only.
; http://php.net/smtp
; SMTP=localhost
; http://php.net/smtp-port
; smtp_port=25

; For Win32 only.
; http://php.net/sendmail-from
; sendmail_from= 

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; http://php.net/sendmail-path
sendmail_path = "C:\xampp\sendmail\sendmail.exe -t"
```
## Deployment
* Open the xampp control panel and start Apache and MySQL
* Import the file SQL located at folder vg-shipping-line/mysql/vg-shippingdb.sql
* In your browser type:
```
http://localhost/vg-shipping-lines/
```
## Project Functionality
* Reservation Ticket 
* Content Management
* Notifications
* Send Email 



