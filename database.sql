CREATE TABLE proposal (
    proposal_id INT AUTO_INCREMENT PRIMARY KEY,
    title_of_activity VARCHAR(255) NOT NULL,
    college VARCHAR(255) NOT NULL,
    department VARCHAR(255),
    specify_department VARCHAR(255) NULL,
    objectives TEXT NOT NULL,
    nature_classification VARCHAR(255) NOT NULL,
    locale VARCHAR(255) NOT NULL,
    duration_of_activity VARCHAR(255) NOT NULL,
    funding_source VARCHAR(255) NOT NULL,
    total_amount DECIMAL(15,2) NOT NULL,
    contact_person VARCHAR(255) NOT NULL,
    action_of_csac TEXT NULL,
    remarks TEXT NULL,
    doc_sequence_number VARCHAR(100) NOT NULL,
    no_of_copies INT NOT NULL,
    receiver VARCHAR(255) NOT NULL,
    received_datetime DATETIME DEFAULT CURRENT_TIMESTAMP,
    duration_of_process INT NULL,
    expected_release_datetime DATETIME GENERATED ALWAYS AS (received_datetime + INTERVAL 7 DAY) VIRTUAL,
    action_of_usds VARCHAR(255) NOT NULL,
    notations TEXT NULL,
    status VARCHAR(50) NOT NULL,
    status_datetime DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    office_destination VARCHAR(255) NOT NULL,
    accomplished_on_time BOOLEAN GENERATED ALWAYS AS (
        CASE 
            WHEN status_datetime <= expected_release_datetime THEN TRUE 
            ELSE FALSE 
        END
    ) VIRTUAL
);


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    user_type ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);
