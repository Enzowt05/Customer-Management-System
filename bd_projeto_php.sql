create database bd_projeto_php;
use bd_projeto_php;

create table tb_usuario(
tb_usuario_id int auto_increment primary key,
tb_usuario_usuario varchar(50),
tb_usuario_senha varchar(50),
tb_usuario_cargo varchar(50)
);

select * from tb_usuario;