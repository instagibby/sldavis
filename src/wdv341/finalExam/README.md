# Final Exam Intro PHP
## Instructions:

Your final project is to build a content processing application for a website of your own choice.  You may may choose what type of content or product your site will support.  Some examples include: products for sale, services, events, registrations, blogs, special notices, etc.  You are welcome to use an existing site that you have created or make a new site for this project.

Your final project is about your PHP/MySQL skills.  It must be coded by you and implemented into your website by you. You cannot use a pre-built CMS tool of any type for this project such as Wordpress, Joomla, Drupal, etc.

This project requires the following elements: 

### 1) A login page/Admin System page.

  Accepts username and password.

  Validates against your database.
  
  Display Administrator function options for valid users.
  
  Establish and use session variables to protect your pages from unauthorized access.
  
  Provide a default username and password of "wdv341' for testing purposes. 


### 2) The following Adminstrator functions will be provided for the owner of the website application. 
  
  a) An INSERT process that will add new content to the database.
  
  The page will provide a self posting form to gather the content information.
  
  It will validate the input data using client and server side tools.  Client tools include any combination of HTML5,Javascript or JQuery.  Server side validation will be processed with PHP.
  
  The process will INSERT a new record into your database table.
  
  b) A display content page using the SELECT command
  
  This will list the content available from the database.
  
  It will provide an Update and Delete link option for each piece of content. 
  
  c)The UPDATE process will allow the user to change the content on the database. 
  
  It will display the requested record's values in a form.  
  
  This page will validate the input data and display any errors the same way the INSERT works.  
  
  The process will UPDATE the requested record in your database table.
  
  The page will provide a confirmation or problem response to the customer when complete.
  
  d)The DELETE process in PHP will delete the requested record from the table.
  
  The page will provide a confirmation or problem response to the customer when complete.
  
### 3)Dynamic Content Display
  
  One or more pages of your website should pull product/event/content information from your database.
 
  The content should be formatted by PHP and displayed on the page. 

### 4) Contact Page
 
 This page must accept an email address as input
 
 Use your Email class to send a confirmation email to that address


### 5) Technical requirements
  
  Insert and Update forms must use the self posting process.
  
  All PHP must be OOP.
  
  All pages should implement MVC concepts for separating processing from presentation
  
  All SQL queries must use PDO and prepared statements.
  
  It is expected that your site reflect production quality.  Presentation of the site, including the admin area will affect your project grade. 
  
  User Interface and User Interactions are important. Consider this when working with format, layout and messages.  
  
  Your project must include production error handling using PHP log and an email notification to you when problems occur
  
  Difficulty and complexity of your project will affect your project grade. 
  
