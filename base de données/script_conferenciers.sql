CREATE TABLE conferenciers (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  profil TEXT NOT NULL,
  description TEXT NOT NULL,
  angle_conference TEXT NOT NULL,
  titre_conference VARCHAR(255) DEFAULT NULL,
  image VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `conferenciers`
(`nom`, `prenom`, `profil`, `description`, `angle_conference`, `titre_conference`, `image`)
VALUES
(
  'Julia',
  'Luc',
  'Scientifique, inventeur et entrepreneur, pionnier de l’intelligence artificielle grand public.',
  'Co-créateur de l’assistant vocal Siri, Luc Julia a dirigé la recherche en intelligence artificielle chez Samsung et Renault. Auteur du livre "L’intelligence artificielle n’existe pas", il est reconnu pour sa capacité à rendre l’IA compréhensible et accessible à tous.',
  'Évolution de l’IA de Siri aux chatbots génératifs et usages concrets de l’IA prédictive dans l’industrie.',
  'De Siri aux IA génératives : démystifier l’intelligence artificielle',
  'luc-julia.jpg'
);



INSERT INTO `conferenciers`
(`nom`, `prenom`, `profil`, `description`, `angle_conference`, `titre_conference`, `image`)
VALUES
(
  'Villata',
  'Serena',
  'Chercheuse en intelligence artificielle, spécialiste des interactions humain-machine et de l’éthique de l’IA.',
  'Directrice de recherche au CNRS au laboratoire I3S (Nice), Serena Villata est membre du comité d’éthique du CNRS et intervient régulièrement dans les médias pour analyser les impacts sociétaux et les usages responsables de l’IA.',
  'Utilisation responsable de l’IA générative, biais algorithmiques, confiance et interaction humain-machine.',
  'IA générative : comment l’utiliser de façon fiable et responsable en entreprise ?',
  'serena-villata.jpg'
);