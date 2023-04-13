CREATE DATABASE patodb;

CREATE TABLE user (
  id INT PRIMARY KEY,
  username VARCHAR(255),
  phone INT(13),
  password TEXT
);

CREATE TABLE users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  surname VARCHAR(50) NOT NULL,
  dob INT NOT NULL,
  gender ENUM('male', 'female') NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL,
  password VARCHAR(255) NOT NULL,
  conf_password VARCHAR(255) NOT NULL;
  terms_acc TINYINT(1) NOT NULL DEFAULT 0,
  -- created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);




















-- CREATE TABLE crop (
--   id INT PRIMARY KEY,
--   name VARCHAR(255),
--   description TEXT,
--   planting_date DATE,
--   time_to_harvest DATE
-- );

-- CREATE TABLE field (
--   id INT PRIMARY KEY,
--   name VARCHAR(255),
--   description TEXT,
--   latitude FLOAT,
--   longitude FLOAT,
--   owner INT,
--   FOREIGN KEY (owner) REFERENCES user(id)
-- );

-- CREATE TABLE crop_field (
--   id INT PRIMARY KEY,
--   crop_id INT,
--   field_id INT,
--   planting_date DATE,
--   harvest_date DATE,
--   FOREIGN KEY (crop_id) REFERENCES crop(id),
--   FOREIGN KEY (field_id) REFERENCES field(id)
-- );

-- CREATE TABLE crop_data (
--   id INT PRIMARY KEY,
--   crop_field_id INT,
--   date DATE,
--   temperature FLOAT,
--   rainfall FLOAT,
--   soil_moisture FLOAT,
--   pest_infestation_level FLOAT,
--   disease_incidence_level FLOAT,
--   yield FLOAT
-- );