CREATE DATABASE ECommerce
USE ECommerce;

CREATE TABLE produit (
    num_prod INT PRIMARY KEY AUTO_INCREMENT,
    nom_prod VARCHAR(255),
    prix_unit DECIMAL(10,2),
    qte_stock INT,
    image VARCHAR(255),
    description TEXT
);

CREATE TABLE client (
    num_client INT PRIMARY KEY AUTO_INCREMENT,
    id_client VARCHAR(255),
    adress_client VARCHAR(255),
    nom_client VARCHAR(255)
);

CREATE TABLE commande (
    num_commande INT PRIMARY KEY AUTO_INCREMENT,
    num_client INT,
    date_commande DATE,
    FOREIGN KEY (num_client) REFERENCES client(num_client)
);

CREATE TABLE ligneCommande (
    num_commande INT,
    num_prod INT,
    qte_commande INT,
    PRIMARY KEY (num_commande, num_prod),
    FOREIGN KEY (num_commande) REFERENCES commande(num_commande),
    FOREIGN KEY (num_prod) REFERENCES produit(num_prod)
);


/*  Exemple d'incrémentation genere par IA
INSERT INTO produits (num_prod, nom_prod, prix_unit, qte_stock, image, description) VALUES
('T-shirt', 19.99, 'tshirt.jpg', 'T-shirt 100% coton'),
('Casquette', 14.50, 'casquette.jpg', 'Casquette stylée'),
('Sac', 34.99, 'sac.jpg', 'Sac à dos résistant');
*/