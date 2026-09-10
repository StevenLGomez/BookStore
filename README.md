
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
│   └── index.php                     # REAL home page 
├── app   
│   ├── config   
│   │   └── config.php                # Database configuration
│   ├── controllers   
│   │   └── BookController.php        # Book Controller Class (controller), extends Controller 
│   ├── core   
│   │   ├── App.php                   # Class App
│   │   ├── Controller.php            # Class Controller
│   │   └── Database.php              # Class Database
│   ├── models   
│   │   └── Book.php                  # Class Book
│   ├── routes.php   
│   └── views   
│       ├── Book   
│       │   ├── AddBook.php           # HTML AddBook
│       │   ├── Book.php              # HTML for Single Book
│       │   ├── Books.php             # HTML for All Books
│       │   └── UpdateBook.php        # HTML for form to Update Book
│       └── layout.php                # Uses $title & $viewPath for navigation ??   
├── schema   
│   └── bookdb.ddl                    # Data Definition Language for MySQL   
```

