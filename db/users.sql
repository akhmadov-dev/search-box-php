CREATE TABLE
    users (
        id INT AUTO_INCREMENT,
        first_name VARCHAR(100),
        last_name VARCHAR(100),
        middle_name VARCHAR(100),
        address VARCHAR(255),
        birth_date DATETIME,
        PRIMARY KEY (id)
    );