-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.

CREATE TABLE EDITORA (
codigo_editora VARCHAR(50) PRIMARY KEY,
nome_editora VARCHAR(30) not null,
cnpj_editora number(12) not null,
disponivel_editora boolean
)

CREATE TABLE MATERIAL (
codigo_material INTEGER PRIMARY KEY,
nome_material VARCHAR(50) not null,
genero_material VARCHAR(30) not null,
descricao_material VARCHAR(500) not null,
tipo_material VARCHAR(30) not null,
capa_material image not null,
idioma_material VARCHAR(30) not null,
numero_paginas_material INTEGER not null,
data_adicionado_sistema_material DATE not null,
faixa_etaria_material VARCHAR(10),
avaliacao_media_material NUMBER(1,2),
disponivel_material boolean,
data_publicacao_material DATE,
FOREIGN KEY(codigo_material) REFERENCES EDITORA (codigo_editora)
)

CREATE TABLE autor (
nome_autor VARCHAR(30) not null
)

CREATE TABLE INSTITUICAO (
codigo_instituicao VARCHAR(50) PRIMARY KEY,
cnpj_instituicao INTEGER not null,
nome_instituicao VARCHAR(30) not null
)

CREATE TABLE USUARIO
codigo_usuario VARCHAR(50) PRIMARY KEY,
login_usuario VARCHAR(25) not null,
nome_usuario VARCHAR(30) not null,
senha_usuario VARCHAR(20) not null,
data_nascimento_usuario DATE not null,
email_usuario varchar(30),
sexo_usuario VARCHAR(10) not null,
endereco_usuario VARCHAR(50),
permissao_usuario char(1),
ativo_inativo_usuario boolean
)

CREATE TABLE ALUNO OF USUARIO(
ra_aluno varchar(50) not null,
FOREIGN KEY(codigo_usuario) REFERENCES INSTITUICAO (codigo_instituicao)
)

CREATE TABLE PROFESSOR OF USUARIO(
cpf_professor number(9) not null,
FOREIGN KEY(codigo_usuario) REFERENCES INSTITUICAO (codigo_instituicao)
)

CREATE TABLE ADMINISTRADOR OF USUARIO(
cpf_administrador number(9) not null
)


CREATE TABLE TURMA (
nome_turma varchar(50) not null,
codigo_turma integer PRIMARY KEY
)


CREATE TABLE HITORICO_ALTECACAO (
codigo_historico_alteracao INTEGER PRIMARY KEY,
codigo_administrador_historico_alteracao INTEGER not null,
codigo_material_historico_alteracao INTEGER not null,
data_alteracao_historico_alteracao DATE not null,
FOREIGN KEY(codigo_historico_alteracao) REFERENCES ADMINISTRADOR (codigo_aluno),
FOREIGN KEY(codigo_historico_alteracao) REFERENCES MATERIAL (codigo_material)
)

CREATE TABLE LICENCA (
data_vencimento_licenca DATE not null,
codigo_licenca INTEGER PRIMARY KEY,
ativa_licenca boolean,
valor_licenca NUMBER(4,2) not null,
data_compra_licenca DATE not null,
FOREIGN KEY(codigo_licenca) REFERENCES INSTITUICAO (codigo_instituicao),
FOREIGN KEY(codigo_licenca) REFERENCES MATERIAL (codigo_material)
)