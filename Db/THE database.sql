drop database dbiftraquer;

create database dbIFtraquer;

use dbIFtraquer;

create table tbUsuario (
	id_Usuario int unique auto_increment,
	rg_Usuario char(9) unique /* Apenas os numeros */,
    email_Usuario varchar(256) not null,
    nome_Usuario varchar(200) not null,
    foto_Usuario mediumblob,
    senha_Usuario varchar(250) not null,
    tipo_Usuario varchar(20) not null,
    constraint pk_tbUsuario primary key(id_Usuario)
);
create table tbTurma(
	id_Turma int unique auto_increment,
    ano_Turma int,
    curso_Turma varchar(50) not null,
    repre_Turma int not null,
    constraint pk_tbTurma primary key(id_Turma),
    constraint fk_tbTurmatbUsuario foreign key(repre_Turma)
		references tbUsuario(id_Usuario) 
        on delete cascade on update cascade
);
create table tbDocumento(
	id_Doc int unique auto_increment,
    nome_Doc varchar(40) not null,
    tipo_Doc varchar(20) not null,
    tamanho_Doc int not null,
    conteudo_Doc mediumblob not null,
    prof_Doc int not null,
    constraint pk_tbDocumento primary key(id_Doc),
    constraint fk_tbDocumentotbUsuario foreign key(prof_Doc)
		references tbUsuario(id_Usuario)
        on delete cascade on update cascade
);
create table tbAula(
	id_Aula int unique auto_increment,
    data_Aula datetime,
    tema_Aula varchar(20),
    doc_Aula int not null,
    turma_Aula int not null,
    prof_Aula int,
    constraint pk_tAula primary key(id_Aula),
    constraint fk_tbAulatbTurma	foreign key(turma_Aula)
		references tbTurma(id_Turma) 
		on delete cascade on update cascade,
    constraint fk_tbAulatbUsuario foreign key(prof_Aula)
		references tbUsuario(id_Usuario) 
        on delete cascade on update cascade,
    constraint fk_tbAulatbDocumento foreign key(doc_Aula)
		references tbDocumento(id_Doc) 
        on delete cascade on update cascade
);
create table tbAlunoTurma(
	id_Aluno int,
    id_Turma int,
    constraint pk_tbAlunoTurma primary key(id_Aluno, id_Turma),
    constraint fk_tbAlunoTurmatbUsuario foreign key(id_Aluno) 
    references tbUsuario(id_Usuario) 
    on delete cascade on update cascade,
    constraint fk_tbAlunoTurmatbTurma foreign key(id_Turma) 
    references tbTurma(id_Turma) 
    on delete cascade on update cascade
);
create table tbAlunoAula(
	id_Aluno int,
    id_Aula int,
    pressenca boolean default false,
    constraint pk_tbAlunoAula primary key(id_Aluno, id_Aula),
    constraint fk_tbAlunoAulatbUsuario foreign key(id_Aluno) 
    references tbUsuario(id_Usuario) 
    on delete cascade on update cascade,
    constraint fk_tbAlunoAulatbAula foreign key(id_Aula) 
    references tbAula(id_Aula) 
    on delete cascade on update cascade
);

