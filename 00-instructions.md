### Separate your functions in an MVC structure

In this exercise you'll be creating a Web application using some existing code
taken from the **Contacts manager** exercise we did for the command line.

Use the file `01-contacts-manager-console.php` 
which contains a set of functions separated by functionality as you would see
them in an MVC framework. Use these functions for your Web application. The
goal is to **reuse most of the code** and only make adjustments where needed.

Some of them won't be useful like the ones in the group `Input / Output` which
are specific to the terminal. As you may have now noticed the input and the ouput
for the web have the form of **requests** and **responses**. You might find the functions
`inputGet`, `inputHas` and `escape` useful as an alternative or replacement to the functions
`alert`, `prompt` and `confirm`.

Create the following files `controller.php`, `model.php`, `view.php`,
`validation.php` and `middleware.php` and include them in your page. *Middleware*
refers to the function(s) that run either before or after your controllers in a
web application.

Your `pageController` for this exercise will be similar to the function
`contactsManager`, but instead of checking a menu option you will be checking if
the request type is either `GET` or `POST` and the parameters you receive in those
cases.

The initial interface for this application is in the file
`02-contacts-manager.php`. Feel free to customize it and make it look awesome.

Please work in pairs for this one, and be prepared to present your application to
the class!
