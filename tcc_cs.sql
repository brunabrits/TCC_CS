
create database Tcc_cs;

use Tcc_cs;

create table Cliente(
    Id_cliente 		int primary key auto_increment,
    Nm_cliente 		varchar(70) not null,
    Email_cliente 	varchar(50) unique not null,
    Senha_cliente 	varchar(32) not null
);

create table Pesquisa(
 Id_pesquisa 	int  primary key auto_increment,
 Tp_pesquisa 	varchar(4) null
 fk_Cliente 	int null,
 foreign key 	(fk_Cliente) references Cliente (Id_cliente),	
);


create table Nps(
    Id_nps 			        int primary key auto_increment,
    Tp_nps_promotor 		int(2)  null,
    Tp_nps_neutro 		    int(1)  null,
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
    Id_ces 	int primary key auto_increment,
    Tp_ces_mf 	int(1)  null,
    Tp_ces_f 	int(1)  null,
    Tp_ces_n 	int(1)  null,
    Tp_ces_d 	int(1)  null,
    Tp_ces_md 	int(1)  null
);


create table Perguntas(
	Id_pergunta		int not null primary key auto_increment,
	Vlr_pergunta		int(1) not null, 		
	Nm_pergunta 		varchar(100) null,
	fk_Id_nps 		int null,
	fk_Id_csat 		int null,
	fk_Id_ces		int null,   
    	foreign key 	(fk_Id_nps) 	references 	Nps (Id_nps),
    	foreign key 	(fk_Id_csat) 	references 	Csat (Id_csat),
    	foreign key 	(fk_Id_ces) 	references 	Ces (Id_ces)

);

create table Respostas(
    Id_resposta 		        int not null primary key auto_increment,
    Vlr_resposta 		        int not null,
    Email_resposta 		        varchar(50) not null,
    Dt_nasc                     Date not null,
	
    fk_Tp_pesquisa      int null,

    foreign key         (fk_Tp_pesquisa) references     Pesquisa(Id_pesquisa)
);    




