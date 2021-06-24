# CRUD-using-REST-API-in-codeigniter


Representational state transfer (REST) or RESTful web services provide a way to exchange data between applications or systems on the Internet. RESTful web service also refers as RESTful API, uses HTTP request to GET, PUT, POST and DELETE data across platforms. In present days, RESTful API is an essential component of the web application.

When the CodeIgniter application requires communicating with another application, RESTful API is needed to integrate into CodeIgniter. Using RESTful API in CodeIgniter, you can exchange data between different applications or platform. This tutorial shows RESTful server implementation for CodeIgniter and you will learn how to create RESTful web services in CodeIgniter.

If you are beginners to CodeIgniter, first see CodeIgniter from Scratch tutorial to setup and configure CodeIgniter application.

To demonstrate CodeIgniter REST API, we will implement CRUD operations in CodeIgniter web service.
Test HTTP calls with Google Chrome Postman extension.

Before you get started, take a look the files structure of CodeIgniter REST API.

CodeIgniter REST Controller Setup

We will use CodeIgniter REST_Controller to build RESTful web services in CodeIgniter. Follow the below steps to setup REST Controller Library in your CodeIgniter application.

    Download REST config file and place in the application/config/ directory.
    Open the application/config/rest.php file and setup the following configuration.

        Set REST login username and password.

        $config['rest_valid_logins'] = ['admin'  '1234'];

        Enable REST API key.

        $config['rest_enable_keys'] = TRUE;

    Download REST_Controller file and place in the application/libraries/ directory.
    Download Format class file and place in the application/libraries/ directory.
    Download Language file and place in the application/language/english/ directory.
		
		Hit url -- http://localhost/codeIgniterrest/index.php/api/Example/user
		
		Note : There are also curl files in project in testing folder.
