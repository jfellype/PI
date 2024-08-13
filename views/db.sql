create database Getting_books;

use Getting_books;

Create table Livros(
id_livro int primary key auto_increment,
titulo varchar (90) not null,
autor varchar (90) not null,
genero varchar (90) not null,
sinopse text not null,
estado_conservacao text not null,
editora varchar (90) not null,
edicao int not null,
ISBN_10 varchar (90) not null,
ISBN_13 varchar (90) not null,
quant_livro int not null,
ano int not null,
idioma varchar (90) not null,
dimensoes int,
paginas int not null
);
