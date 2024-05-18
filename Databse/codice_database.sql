CREATE DATABASE wealthdiversify;
USE wealthdiversify;
-- Tabella degli investitori
CREATE TABLE Utente_Investitore (
    ID_investitore INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Cognome VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL,
    Saldo DECIMAL(10, 2) NOT NULL,
    Numero_telefono VARCHAR(15),
    FK_categoria_preferita INT,
    FOREIGN KEY (FK_categoria_preferita) REFERENCES Categoria_Investimento(ID_categoria)
);
-- Tabella degli utenti commerciali
CREATE TABLE Utente_Commerciale (
    ID_commerciale INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Cognome VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL
);
-- Tabella degli amministratori
CREATE TABLE Utente_Amministratore (
    ID_amministratore INT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Cognome VARCHAR(50) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE,
    Password VARCHAR(100) NOT NULL
);
-- Tabella delle categorie di investimento
CREATE TABLE Categoria_Investimento (
    ID_categoria INT PRIMARY KEY,
    Nome_Categoria VARCHAR(50) NOT NULL
);
-- Tabella degli investimenti
CREATE TABLE Investimento (
    ID_investimento INT PRIMARY KEY,
    Nome VARCHAR(100) NOT NULL,
    Descrizione TEXT,
    Rendimento DECIMAL(5, 2) NOT NULL,
    Quota_disponibile DECIMAL(10, 2) NOT NULL,
    FK_commerciale INT,
    FOREIGN KEY (FK_commerciale) REFERENCES Utente_Commerciale(ID_commerciale)
);
-- Tabella dei valori degli investimenti
CREATE TABLE Valore_Investimento (
    ID_valore INT PRIMARY KEY,
    Data DATE NOT NULL,
    Valore DECIMAL(10, 2) NOT NULL,
    FK_investimento INT,
    FOREIGN KEY (FK_investimento) REFERENCES Investimento(ID_investimento)
);
-- Tabella per le relazioni di investimento
CREATE TABLE Investire (
    FK_investitore INT,
    FK_investimento INT,
    Quota DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (FK_investitore, FK_investimento),
    FOREIGN KEY (FK_investitore) REFERENCES Utente_Investitore(ID_investitore),
    FOREIGN KEY (FK_investimento) REFERENCES Investimento(ID_investimento)
);
-- Tabella per i contatti tra investitori e commerciali
CREATE TABLE Contatto (
    ID_contatto INT PRIMARY KEY,
    Livello VARCHAR(50) NOT NULL,
    FK_investitore INT,
    FK_commerciale INT,
    FOREIGN KEY (FK_investitore) REFERENCES Utente_Investitore(ID_investitore),
    FOREIGN KEY (FK_commerciale) REFERENCES Utente_Commerciale(ID_commerciale)
);