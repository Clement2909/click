-- Création de la table des marques de chaussures
CREATE TABLE marques (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(55) UNIQUE
);

-- Création de la table des types de chaussures
CREATE TABLE types (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(55) UNIQUE
);


-- Création de la table des couleurs de chaussures
CREATE TABLE couleurs (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(55) UNIQUE
);


-- Création de la table des chaussures
CREATE TABLE chaussures (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(55),
    marque_id INT,
    type_id INT,
    description TEXT,
    FOREIGN KEY (marque_id) REFERENCES marques(id),
    FOREIGN KEY (type_id) REFERENCES types(id)
);

-- Création de la table des pointures de chaussures
CREATE TABLE pointures (
    id SERIAL PRIMARY KEY,
    pointure DECIMAL(4,1) -- Exemple: 20.5, 21.0, 21.5, ..., 44.5, 45.0
);



-- Création de la table des stocks de chaussures
CREATE TABLE stocks (
    id SERIAL PRIMARY KEY,
    chaussure_id INT,
    couleur_id INT,
    pointure_id INT,
    quantite INT,
    FOREIGN KEY (chaussure_id) REFERENCES chaussures(id),
    FOREIGN KEY (couleur_id) REFERENCES couleurs(id),
    FOREIGN KEY (pointure_id) REFERENCES pointures(id)
);

-- Insertion des marques de chaussures
INSERT INTO marques (nom) VALUES
('Nike'),
('Adidas'),
('Puma'),
('Reebok'),
('New Balance'),
('Under Armour'),
('Converse'),
('Vans'),
('Fila'),
('Asics');

-- Insertion des types de chaussures
INSERT INTO types (nom) VALUES
('Sport'),
('Running'),
('Basketball'),
('Skate'),
('Tennis'),
('Randonnée'),
('Casual'),
('Football'),
('Fitness'),
('Sandales');

-- Insertion des couleurs de chaussures
INSERT INTO couleurs (nom) VALUES
('Rouge'),
('Bleu'),
('Vert'),
('Noir'),
('Blanc'),
('Gris'),
('Jaune'),
('Rose'),
('Orange'),
('Violet');

-- Insertion des pointures de chaussures pour enfants (20 à 30)
INSERT INTO pointures (pointure)
SELECT generate_series(20, 45, 0.5);

--insertion chaussures
INSERT INTO chaussures (nom, marque_id, type_id, description) VALUES
('Nike Jordan 3', 1, 1, 'Chaussure de basketball emblématique de Nike.'),
('Adidas Ultraboost', 2, 4, 'Chaussure de course confortable et réactive.'),
('Puma Suede Classic', 3, 9, 'Chaussure décontractée au design rétro.');


-- Insertion des stocks
-- Pour Nike Jordan 3
INSERT INTO stocks (chaussure_id, couleur_id, pointure_id, quantite) VALUES
(1, 1, 1, 10),
(1, 1, 4, 15),
(1, 2, 5, 8),
(1, 2, 6, 12);

-- Pour Adidas Ultraboost
INSERT INTO stocks (chaussure_id, couleur_id, pointure_id, quantite) VALUES
(2, 2, 1, 20),
(2, 3, 2, 25),
(2, 4, 3, 18),
(2, 4, 5, 22);

-- Pour Puma Suede Classic
INSERT INTO stocks (chaussure_id, couleur_id, pointure_id, quantite) VALUES
(3, 3, 6, 30),
(3, 4, 2, 35),
(3, 5, 1, 28),
(3, 6, 7, 32);

****************************************************************************************************************************
-- Création de la table des images des chaussures
CREATE TABLE images (
    id SERIAL PRIMARY KEY,
    chaussure_id INT NOT NULL,
    couleur_id INT NOT NULL,
    url VARCHAR(255) NOT NULL,
    CONSTRAINT fk_chaussure_image FOREIGN KEY (chaussure_id) REFERENCES chaussures(id),
    CONSTRAINT fk_couleur_image FOREIGN KEY (couleur_id) REFERENCES couleurs(id)
);

-- Insertion des images
-- Pour Nike Jordan 3
INSERT INTO images (chaussure_id, couleur_id, url) VALUES
(1, 1, 'url_image_nike_jordan_3_1.jpg'),
(1, 2, 'url_image_nike_jordan_3_2.jpg');

-- Pour Adidas Ultraboost
INSERT INTO images (chaussure_id, couleur_id, url) VALUES
(2, 2, 'url_image_adidas_ultraboost_1.jpg'),
(2, 3, 'url_image_adidas_ultraboost_2.jpg');

-- Pour Puma Suede Classic
INSERT INTO images (chaussure_id, couleur_id, url) VALUES
(3, 3, 'url_image_puma_suede_classic_1.jpg'),
(3, 4, 'url_image_puma_suede_classic_2.jpg');
