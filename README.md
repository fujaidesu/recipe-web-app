# Recipe-Web-App

This project is a web application that demonstrates the recipes.

## Getting Started

Before you can run this project, you need to make sure you have the following installed:
- XAMPP

## Installation and Setup

1. Clone the repository or download the code to your local system.

2. Copy the folder to path to xampp. i.e. C:\xampp\htdocs.

3. Open connection.php to set your connection configuration parameters: 
```
<?php      
    $host = "localhost:3307";  
    $user = "root";  
    $password = '';  
    $db_name = "recipewebapplicationdb"; 
?>  
```

4. Import the database schema to your phpmyadmin MySQL server.

## Running the Application

To run the application and land on the home page, paste the url in your Chrome browser: 
```
http://localhost/csck543_ema/index.php
```

## Application Functionalities

The system provides the following functionalities:

1. The web app should be responsive and accessible.
2. The web app should use a MySQL database to store data (e.g., on users and recipes) and be user-friendly.
3. The web app should allow users to register and log in.
4. Users should be able to search for recipes according to a range of different criteria.
5. Users should also be able to save their favourite recipes, to be accessed on an account page.
6. The web app should also store some information on each user.
7. Each recipe contains, as a minimum, one or more categories (e.g., starter, main, meat, vegetarian etc.), a list of ingredients and quantities, a sequence of steps to be followed and an amount of time per step.
8. Users are able to rate each recipe. 
9. Include at least 5 recipes from the following list from BBC Food.


Please note, this is a basic demonstration of a system and does not include comprehensive security measures that would be necessary in a production application.
