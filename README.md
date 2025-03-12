# Customer Registration CRUD

This project implements a Customer Registration system with full CRUD (Create, Read, Update, Delete) functionality. Originally developed some time ago, it was recently rediscovered on an old hard drive. After reviewing the code, I found it valuable and decided to add it to my GitHub portfolio. The primary update made was refactoring the database connection, transitioning from MySQL to SQLite for improved portability.

## Features

- **Customer Management**: Add, view, edit, and delete customer records.
- **Responsive Design**: User-friendly interface compatible with various devices.
- **Database Integration**: Utilizes SQLite for data storage, ensuring lightweight and efficient performance.
- **UI Component Library**: The project leverages [jQuery EasyUI](https://www.jeasyui.com/) to streamline UI development and enhance user experience.

## Technologies Used

- **PHP**: Server-side scripting language.
- **SQLite**: Lightweight relational database management system.
- **HTML/CSS**: Markup and styling for the frontend.
- **JavaScript**: Enhances user interaction and experience.
- [**jQuery EasyUI**](https://www.jeasyui.com/): UI components library for faster development.

## Installation and Setup

1. **Clone the repository**:

   ```bash
   git clone https://github.com/dnwest/Customer-registration-CRUD.git
   ```

2. **Navigate to the project directory**:

   ```bash
   cd Customer-registration-CRUD
   ```

3. **Ensure a local server environment** (e.g., XAMPP, WAMP, or a PHP built-in server) is set up to run PHP applications.

4. **Place the project folder in the server's root directory** (e.g., `htdocs` for XAMPP).

5. **Access the application** via `http://localhost/Customer-registration-CRUD` in your web browser.

## Project Structure

The project consists of the following key files:

- `index.php`: Main entry point displaying customer records.
- `conn.php`: Handles database connection using SQLite.
- `save_cadastroclientes.php`: Processes the addition of new customers.
- `update_cadastroclientes.php`: Manages updates to existing customer records.
- `destroy_cadastroclientes.php`: Handles the deletion of customer records.
- `get_cadastroclientes.php`: Retrieves customer data.
- `clientes.sql`: Original SQL script for MySQL (prior to SQLite migration).
- `cadastroclientes.sqlite`: SQLite database file containing customer data.
- `css/`: Directory containing CSS files for styling.
- `js/`: Directory containing JavaScript files for interactive features.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Acknowledgments

Special thanks to the original inspiration behind this project and the resources that guided its development.

---

By showcasing this project, I aim to demonstrate my ability to develop functional web applications and adapt legacy code to modern standards. The transition from MySQL to SQLite highlights my commitment to improving application portability and ease of setup. Additionally, using jQuery EasyUI helped optimize the UI design process and improve the user experience.

