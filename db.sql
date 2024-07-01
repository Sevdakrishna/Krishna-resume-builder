-- Create users table



CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    full_name VARCHAR(200) COLLATE utf8mb4_general_ci NOT NULL,
    email_id VARCHAR(250) COLLATE utf8mb4_general_ci NOT NULL,
    password TEXT COLLATE utf8mb4_general_ci NOT NULL,
    account_status INT(11) NOT NULL DEFAULT 0,
    created_at TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    updated_at TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create resumes table
CREATE TABLE resumes (
    id INT(11) NOT NULL AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    updated_at TIMESTAMP NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
    name VARCHAR(250) COLLATE utf8mb4_general_ci NOT NULL,
    headline VARCHAR(250) COLLATE utf8mb4_general_ci NOT NULL,
    contact TEXT COLLATE utf8mb4_general_ci NOT NULL,
    objective TEXT COLLATE utf8mb4_general_ci NOT NULL,
    skills TEXT COLLATE utf8mb4_general_ci NOT NULL,
    experience TEXT COLLATE utf8mb4_general_ci NOT NULL,
    education TEXT COLLATE utf8mb4_general_ci NOT NULL,
    url VARCHAR(250) COLLATE utf8mb4_general_ci NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
