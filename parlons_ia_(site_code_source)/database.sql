
USE parlons-ia;
CREATE TABLE inscriptions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  telephone VARCHAR(50),
  entreprise VARCHAR(150),
  statut VARCHAR(100),
  metier VARCHAR(150),
  propositions TEXT,
  recontact TINYINT(1) DEFAULT 0,
  date_inscription DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE  messages_contact (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(150),
  email VARCHAR(255),
  message TEXT,
  consent TINYINT(1) DEFAULT 0,
  date_message DATETIME DEFAULT CURRENT_TIMESTAMP
);


-- Table for admin users (simple implementation)
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert a default admin user (username: admin, password: admin123)
-- IMPORTANT: Change this password for production!
INSERT INTO `admins` (`username`, `password`) VALUES
('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'); -- password is 'admin123'