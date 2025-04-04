create database  Devmedia;

use Devmedia;
create table categoria(
	id int primary key not null auto_increment,
    nome varchar(50) not null
);

create table artigo(
	id int primary key not null auto_increment,
    titulo varchar(50) not null,
	id_categoria int,
    conteudo varchar(255) not null
);

create table usuario(
	id int primary key not null auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null,
    data_nascimento date not null,
    cpf varchar(11) not null,
    telefone varchar(15) not null
);

create table login(
	id int primary key not null auto_increment,
    usuario varchar(25) not null,
    senha varchar(16) not null
);


