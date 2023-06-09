# Simple-MVC-PHP

This is a simple PHP MVC framework that provides a basic structure for building web applications. It follows the Model-View-Controller (MVC) architectural pattern and includes routing, controllers, views, and a model for interacting with an external API.

## Getting Started

### Prerequisites

- PHP 7.0 or higher
- Apache or any other web server

### Installation

1. Clone the repository or download the project files.
2. Place the project files in the root directory of your web server (e.g., `htdocs` for XAMPP or `www` for WAMP).
3. Start your web server.

### Running the Application

To run the application, you can use the PHP built-in web server. Open a terminal or command prompt, navigate to the project directory, and run the following command:

php -S localhost:8000
This will start the PHP built-in web server, and you can access the application in your web browser at http://localhost:8000.



Routing
The routing is handled by the router.php file. It defines the routes and associates them with the corresponding controllers and actions. You can modify the routes in the $routes array to suit your application.

Here are the default routes included in the framework:

/ - Home page
/about - About page
/users - Users page (displays a list of users)
/user?id={id} - Single user page (displays details of a specific user)


Controllers
Controllers handle the logic for different routes and actions. They interact with models to fetch data and pass it to the views. You can find the controllers in the controllers directory.

HomeController.php: Handles the home page route (/).
AboutController.php: Handles the about page route (/about).
UsersController.php: Handles the users page route (/users) and single user page route (/user).


Views
Views are responsible for displaying the data to the user. They are located in the views directory. You can customize the HTML markup and content of each view file.

home.php: View file for the home page.
about.php: View file for the about page.
users.php: View file for displaying a list of users.
user.php: View file for displaying the details of a single user.


Models
The UserModel.php in the models directory is responsible for interacting with an external API to fetch user data. It provides methods for fetching all users and fetching a user by ID.

External API
The framework interacts with an external API to fetch user data. The API URL is configured in the UserModel constructor. You can update the API URL to point to your desired API.
