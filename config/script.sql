create database tarefa

create table usuario (
Id INT  AUTO_INCREMENT PRIMARY KEY NOT NULL,
nome varchar(50) Not Null,
usuario varchar(50) Not Null,
email varchar(50) Not Null,
senha varchar(255) Not Null,
data_criacao datetime

)

create table tarefa (
Id INT  AUTO_INCREMENT PRIMARY KEY NOT NULL,
titulo varchar(50) Not Null,
descricao varchar(50) Not Null,
email varchar(50) Not Null,
Id_User int,
data_ datetime

)

create table logs (
Id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
Id_User int,
data_registro datetime
)

ALTER TABLE logs
ADD FOREIGN KEY (Id_User) REFERENCES usuario(Id);

ALTER TABLE tarefa
ADD FOREIGN KEY (Id_User) REFERENCES usuario(Id);