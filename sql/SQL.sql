-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE notas (
id_nota serial PRIMARY KEY,
Pertinencia float,
Inovação float,
Desenvoltura float,
Slide float,
Tempo float,
Coerencia float,
Media_Notas decimal(10,2),
id_evento serial
)

CREATE TABLE detalhes (
id_detalhe serial PRIMARY KEY,
resumo varchar(50),
detalhes varchar(500)
)

CREATE TABLE eventos (
id_evento serial PRIMARY KEY,
Tipo varchar(255),
Tema varchar(255),
Integrantes varchar(255),
Responsavel varchar(255),
Data Date,
Curso varchar(255),
id_detalhe serial,
FOREIGN KEY(id_detalhe) REFERENCES detalhes (id_detalhe) ON UPDATE CASCADE ON DELETE CASCADE
)

ALTER TABLE notas ADD FOREIGN KEY(id_evento) REFERENCES eventos (id_evento) ON UPDATE CASCADE ON DELETE CASCADE
