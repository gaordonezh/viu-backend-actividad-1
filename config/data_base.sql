CREATE DATABASE library_db;

CREATE TABLE IF NOT EXISTS platforms (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR (30) NOT NULL
);

CREATE TABLE IF NOT EXISTS languages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR (30) NOT NULL,
  iso_code VARCHAR (4) NOT NULL
);

CREATE TABLE IF NOT EXISTS actors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR (50) NOT NULL,
  last_name VARCHAR (50) NOT NULL,
  date_birth DATE NOT NULL,
  nationality VARCHAR (50) NOT NULL
);

CREATE TABLE IF NOT EXISTS directors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR (50) NOT NULL,
  last_name VARCHAR (50) NOT NULL,
  date_birth DATE NOT NULL,
  nationality VARCHAR (100) NOT NULL
);

CREATE TABLE IF NOT EXISTS series (
  id INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR (50) NOT NULL,
  platform_id INT NOT NULL,
  director_id INT NOT NULL,
  FOREIGN KEY(platform_id) REFERENCES platforms (id) ON DELETE CASCADE,
  FOREIGN KEY(director_id) REFERENCES directors (id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS serie_actor (
  actor_id INT NOT NULL,
  serie_id INT NOT NULL,
  FOREIGN KEY(actor_id) REFERENCES actors (id) ON DELETE CASCADE,
  FOREIGN KEY(serie_id) REFERENCES series (id) ON DELETE CASCADE,
  PRIMARY KEY (actor_id, serie_id)
);

CREATE TABLE IF NOT EXISTS serie_lenguage (
  type VARCHAR (20) not null,
  serie_id INT NOT NULL,
  language_id INT NOT NULL,
  FOREIGN KEY(serie_id) REFERENCES series (id) ON DELETE CASCADE,
  FOREIGN KEY(language_id) REFERENCES languages (id) ON DELETE CASCADE,
  PRIMARY KEY(serie_id, language_id)
);