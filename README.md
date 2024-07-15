# Online Shopping Application

This is an Online Shopping Application developed using Spring Boot, Hibernate, and React. It provides users with a seamless shopping experience with features like product browsing, adding items to the cart, and order processing.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Contributing](#contributing)
- [License](#license)

## Features
- User registration and authentication
- Product browsing and search
- Shopping cart functionality
- Order processing
- Admin panel for product and order management

## Technologies Used
- **Backend:** Spring Boot, Hibernate
- **Frontend:** React
- **Database:** MySQL
- **Build Tools:** Maven
- **Version Control:** Git

## Installation

### Prerequisites
- Java 11 or higher
- Node.js
- MySQL
- Maven

### Backend Setup
1. Clone the repository:
    ```sh
    git clone https://github.com/saurabhjojare/Online-Shopping-Application.git
    cd Online-Shopping-Application/backend
    ```

2. Update MySQL configurations in `application.properties`:
    ```properties
    spring.datasource.url=jdbc:mysql://localhost:3306/online_shopping
    spring.datasource.username=yourUsername
    spring.datasource.password=yourPassword
    ```

3. Build and run the backend:
    ```sh
    mvn clean install
    mvn spring-boot:run
    ```

### Frontend Setup
1. Navigate to the frontend directory:
    ```sh
    cd ../frontend
    ```

2. Install dependencies:
    ```sh
    npm install
    ```

3. Run the frontend:
    ```sh
    npm start
    ```

## Usage
1. Open your browser and navigate to `http://localhost:3000` to access the application.
2. Register as a new user or log in with existing credentials.
3. Browse products, add them to the cart, and proceed to checkout.

## API Endpoints

### Authentication
- **POST** `/api/auth/signup` - Register a new user
- **POST** `/api/auth/signin` - Authenticate an existing user

### Products
- **GET** `/api/products` - Retrieve all products
- **GET** `/api/products/{id}` - Retrieve a single product by ID
- **POST** `/api/products` - Create a new product (Admin)
- **PUT** `/api/products/{id}` - Update an existing product (Admin)
- **DELETE** `/api/products/{id}` - Delete a product (Admin)

### Cart
- **GET** `/api/cart` - Retrieve the current user's cart
- **POST** `/api/cart` - Add a product to the cart
- **PUT** `/api/cart` - Update the cart item quantity
- **DELETE** `/api/cart/{id}` - Remove an item from the cart

### Orders
- **GET** `/api/orders` - Retrieve all orders (Admin)
- **GET** `/api/orders/{id}` - Retrieve a single order by ID
- **POST** `/api/orders` - Place a new order

## Contributing
Contributions are welcome! Please follow these steps:
1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature/your-feature`).
6. Open a pull request.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
