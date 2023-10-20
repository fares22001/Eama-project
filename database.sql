CREATE TABLE Customers (
    customer_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    max_purchase_amount DECIMAL(10, 2),
    min_purchase_amount DECIMAL(10, 2),
    pharmacy_name VARCHAR(255),
    customer_type VARCHAR(20),
    proof_document VARCHAR(255),
    address VARCHAR(255),
    phone_number VARCHAR(20)
);

CREATE TABLE Products (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255),
    quantity INT,
    description TEXT,
    brand VARCHAR(255),
    category VARCHAR(255),
    price DECIMAL(10, 2),
    size VARCHAR(20),
    in_stock BOOLEAN
);

CREATE TABLE Orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    product_id INT,
    quantity INT,
    order_date DATE,
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);

CREATE TABLE Payments (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT,
    payment_type VARCHAR(20),
    payment_details VARCHAR(255),
    FOREIGN KEY (order_id) REFERENCES Orders(order_id)
);

CREATE TABLE Bills (
    bill_id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT,
    total_amount DECIMAL(10, 2),
    payment_status VARCHAR(20),
    billing_date DATE,
    FOREIGN KEY (order_id) REFERENCES Orders(order_id)
);

CREATE TABLE Proofs (
    proof_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    proof_type VARCHAR(20),
    proof_document VARCHAR(255),
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id)
);

CREATE TABLE Cart (
    cart_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    product_id INT,
    quantity INT,
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);

CREATE TABLE Wishlist (
    wishlist_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    product_id INT,
    FOREIGN KEY (customer_id) REFERENCES Customers(customer_id),
    FOREIGN KEY (product_id) REFERENCES Products(product_id)
);
