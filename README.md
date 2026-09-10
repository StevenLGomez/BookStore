
# Building a Minimal MVC Architecture Application in Vanilla PHP
## A Step by Step Guide

From: https://medium.com/@dilankayasuru/budling-a-minimal-mvc-application-in-vanilla-php-a-step-by-step-guide-75c185604c65    

# github repository   
https://github.com/dilankayasuru/book-store

# Directory Tree of my implementation
```
├── README.md                         # Documentation
├── index.html                        # FAKE landing page, shortcut to public/index.php
|
├── public   
│   └── index.php                     # Entry point of application, ini_set(), 4x require_once, $app = new App();
│   └── .htaccess                     # Configures Apache server's per directory behavior 
├── app   
│   ├── config   
│   │   └── config.php                # Database configuration
│   ├── controllers   
│   │   └── BookController.php        # BookController class, extends Controller, manages books in application
│   ├── core   
│   │   ├── App.php                   # Core of MVC application, handles routing & controller dispatching on URLs
│   │   ├── Controller.php            # Class Controller
│   │   └── Database.php              # Class Database
│   ├── models   
│   │   └── Book.php                  # Class Book
│   ├── routes.php                    # PHP routing system (array) controls how application handles URLs
│   └── views   
│       ├── Book   
│       │   ├── AddBook.php           # HTML - ADD book form
│       │   ├── Book.php              # HTML & PHP - VIEW single book as <ul><li> list 
│       │   ├── Books.php             # HTML table to VIEW ALL books
│       │   └── UpdateBook.php        # HTML - UPDATE book form
│       └── layout.php                # Main template for the views in the application.  
├── schema   
│   └── bookdb.ddl                    # Data Definition Language for MySQL   
```

