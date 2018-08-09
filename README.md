# Sendy Project
## Background

ABC Ltd uses a number of platforms for communication and to manage their services. Here are some of them.<br>
1.Gitlab for code collaboration, documentation and issue tracking<br>
2.Blossom for project management<br>
3.Google Drive for document sharing<br>
4.Status Cake for app monitoring<br>
5.Happy apps for app monitoring<br>
6.Jfrog for docker registry<br>
7.Slack for internal communication<br>
8.Cloudflare for content delivery<br>
9.Mode for report sharing<br>
10.Deploybot for automated deployment<br>
11.Play Store for android app reviews and statistics<br>
12.App Store for iphone app reviews and statistics<br>
13.S3 for image and document storage<br>
14.Cloudwatch for app logging<br>
15.Xero for accounting<br>

## Required

1.To help new staff easily navigate to those platforms, you are required to create a simple page that lists the platforms used and a description of its use. When clicked it should take the user to the site. <br> <br>
2.Since platforms may be many and it gets tedious to scroll through the page till the end, add a search functionality to the page which filters the results to match what the user has typed.

## Prerequisites 
<ul>Linux and LAMPP environment</ul>
<ul>Laravel 5.6</ul>
<ul>PHP 7.1</ul>
<ul>MySQL</ul>
<ul>Web server (Apache)</ul>

## Solution
To add the database:
  <ul> Set the Database Credentials in .env </ul><br>
  Then Run: php artisan migrate
<p> Listing of platforms of communication from the database</p><br>

![list](https://user-images.githubusercontent.com/10959155/43885344-4de6a3f4-9bc1-11e8-8352-6fb6b32d6f80.png)

<p> Search functionality Implemented using the Laravel AJAX </p><br>

![search](https://user-images.githubusercontent.com/10959155/43885513-c465efda-9bc1-11e8-96f2-78ba6e620a2a.png)
  

