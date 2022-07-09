# student-or-Student-Attendance-Management-System-in-PHP-and-MYSQL

A complete and Advanced attendance management system build in PHP and MYSQL with a massive User Interface.This Project is very easy for both Admin and Users.This project is one of the best example of Content Management System (CMS) Using PHP and MYSQL.

### How to setup and run the Project

We have used php for developing the project because ,we can use HTML & CSS to develop the UI and integrate it with the backend and to the database simultaneously unlike NodeJs and Mongo(popular combination!).

## Set up:

Install any one of the servers: WAMP or XAMPP with the required version of MySQL database.

<!-- we used wamp -->

After setting up WAMP:

#### 1.-Go to (http://127.0.0.1/phpmyadmin/).

1.1-enter user as (root);
1.2- enter the password you used to setup the wamp server, if not used any leave it blank
NOTE:- I used a password , so while connecting to the MySQL server in different files using the mysqli_connect method, if u havent used the password change the attribute after root to nul strings or else change it to the password you used!
Example: $con = mysqli_connect('localhost','root','VINEETH@9','attendance');
If your password is 'sample' change 'VINEETH@9' to 'sample' in the above function call

2.-Click on new which is at top left. i.e- (http://127.0.0.1/phpmyadmin/server_databases.php?server=1).
2.1- click on (Import) which is 6th option on top navbar.
2.2- click on browse and select (attendance.sql) click on (open).
2.3- scroll to bottom then click on (Go).

3.Now unzip our Submission file(sent through mail). It has a folder in it hwich contains the source code.
3.1 If u installed wamp go the wamp installation directory and find the folder names 'www' (in xampp it's 'htdocs')
3.2 Now copy and paste the whole source code folder from our submission into the 'www' folder

4.Now open (http://127.0.0.1/G47_Attendance_Management_System/index.php) in new tab on any browser.;
4.1- Click on (admin Space);
4.2- Now login with username as (admin) and password as (admin);

Note:-
To limit the file size we have only added one admin after logging in you can add new faculty user with different credentials

=> default username is (admin) and password is (admin);
