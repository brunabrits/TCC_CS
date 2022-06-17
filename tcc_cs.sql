create database Tcc_cs;

use Tcc_cs;

create table Cliente(
	Id_cliente 		int primary key auto_increment,
    Nm_cliente 		varchar(70) not null,
    Email_cliente 	varchar(50) not null,
    Senha_cliente 	varchar(32) not null
);

create table Pesquisas(
	Id_pesquisa 	int primary key auto_increment,
    Tp_pesquisa 	varchar(45) not null
);

create table Nps(
	Id_nps 					int primary key auto_increment,
    Tp_nps_promotor 		int(2)  null,
    Tp_nps_neutro 			int(1)  null,
    Tp_nps_detrator 		int(1)  null
);


create table Csat(
	Id_csat 		int primary key auto_increment,
    Tp_csat_mts		int(1)  null,
	Tp_csat_s 		int(1)  null,
    Tp_csat_n 		int(1)  null,
    Tp_csat_i 		int(1)  null,
    Tp_csat_mti		int(1)  null
);

create table Ces(
	Id_ces 		int primary key auto_increment,
    Tp_ces_mf 	int(1)  null,
    Tp_ces_f 	int(1)  null,
    Tp_ces_n 	int(1)  null,
    Tp_ces_d 	int(1)  null,
    Tp_ces_md 	int(1)  null
);

create table Metricas(
	Id_metricas 	int primary key auto_increment,
    Nm_metricas 	varchar(10) not null,
    fk_Id_nps 		int null,
    fk_Id_csat 		int null,
    fk_Id_ces		int null,
	foreign key 	(fk_Id_nps) 	references 	Nps (Id_nps),
    foreign key 	(fk_Id_csat) 	references 	Csat (Id_csat),
    foreign key 	(fk_Id_ces) 	references 	Ces (Id_ces)
);

create table Perguntas(
	Id_pergunta			int not null primary key,
    Nm_pergunta 		varchar(100) not null,
    Ds_pergunta 		varchar(100) not null,
    fk_Id_metricas 		int not null,
    fk_Id_pesquisas 	int not null,
    foreign key 		(fk_Id_metricas)	references 	Metricas  (Id_metricas),
    foreign key 		(fk_Id_pesquisas)	references 	Pesquisas (Id_pesquisa)
);

create table Respostas(
	Id_resposta 		int not null primary key auto_increment,
    Vlr_resposta 		int not null,
    Email_resposta 		varchar(50) not null,
    Dt_nasc             Date not null,
	fk_Id_pergunta 		int not null,
    foreign key 		(fk_Id_pergunta) references Perguntas (Id_pergunta)
);    

show tables;

desc Cliente;
desc Pesquisas;
desc Nps;
desc Csat;
desc Ces;
desc Metricas;
desc Perguntas;
desc Respostas;

