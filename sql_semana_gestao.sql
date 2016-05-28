-- criando banco gestao
create database gestao;

-- criando tabela detalhes
CREATE TABLE detalhes (
id_detalhe SERIAL primary key not null,
resumo varchar(50),
detalhe varchar(500)
);

-- criando tabela eventos
create table eventos(
id_evento SERIAL primary key not null,
tipo varchar(255) not null,
tema varchar(255) not null,
integrante varchar(255) not null,
responsavel varchar(255) not null,
curso varchar(255) not null,
data_evento date not null,
id_detalhe int not null references detalhes(id_detalhe)
);

-- criando tabela nota
create table notas(
id_nota SERIAL primary key not null,
pertinencia float not null,
coerencia float not null,
inovacao float not null,
desenvoltura float not null,
slide float not null,
tempo float not null,
media_notas decimal(10,2) not null,
id_evento int not null references eventos(id_evento)
);

select * from detalhes;

---------------------------------------------------------------------

-- inserindo valores na tabela detalhes
insert into detalhes (resumo, detalhe) 
values ('Palestra sobre Scrum', 'Palestra sobre a metodologia SCRUM ministrada pelo aluno Luis Cláudio do curso de Sistemas para Internet, 
essa palestra irá abortar a importância de se usar Scrum, como utilizar, quando é realmente preciso usar, conceitos, 
historia e será feito um exemplo prático para um melhor entendimento.');

insert into detalhes (resumo, detalhe) 
values ('Palestra sobre MONO', 'Palestra sobre a tecnologia MONO ministrada pela aluna Karen Moura do curso de Sistemas para Internet, 
essa palestra irá abortar a história, como utilizar, componentes, Software desenvolvido com Mono, quando é preciso usar, conceitos, plano de evolução e sua arquitectura.');

insert into detalhes (resumo, detalhe) 
values ('Mini-Curso JAVA', 'Mini-Curso JAVA ministrada pelo aluno Bruno Silva do curso de Sistemas para Internet, 
esse mini-curso irá abortar um pouco da história do JAVA, a diferença do JAVA para outras linguagens, componentes, onde pode ser aplicado o JAVA, 
conceitos, plano de evolução e sua arquitectura, irá ser feito um pequeno projeto abortando os conceitos básicos do JAVA, utilizando Orientação à Objetos e MVC.');

insert into detalhes (resumo, detalhe) 
values ('Mini-Curso de Rede Local Sem Fio', 'Mini-Curso de Rede Local Sem Fio, ministrada pelo aluno Gustavo Braga do curso de Redes de Compuatdores, 
esse mini-curso irá mostrar como identificar, configurar e implementar uma rede Wireless.
O QUE SÃO REDES 802.11?, POR QUE UTILIZAR REDES WIRELESS?, PADRÃO IEEE 802.11, ARQUITETURA, PRODUTOS PARA REDES SEM FIO, SEGURANÇA, 
RM – OSI – MODELO DE REFERÊNCIA – SISTEMA DE INTERCONEXÃO ABERTO, ENTENDENDO A TECNOLOGIA WIRELESS – CONCEITOS DE RÁDIO FREQUÊNCIA, ENLACE PONTO A PONTO.');

----------------------------------------------------------------------------------------------------------

-- inserindo valores na tabela eventos
insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, id_detalhe) 
values ('Palestra', 'SCRUM', 'Luis Cláudio', 'Kaio Lima', 'Sistemas para Internet', '2016/05/20', 1);

insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, id_detalhe) 
values ('Palestra', 'MONO', 'Karen Moura', 'Ricardo Fernando', 'Sistemas para Internet', '2016/05/21', 2);

insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, id_detalhe) 
values ('Mini-Curso', 'Java básico', 'Bruno Silva', 'Paula Alencar', 'Sistemas para Internet', '2016/05/20', 3);

insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, id_detalhe) 
values ('Mini-Curso', 'Rede Local Sem Fio', 'Gustavo Braga', 'Jorge Cunha', 'Redes de Compuatdores', '2016/05/20', 4);

----------------------------------------------------------------------------------------------------------------

-- inserindo valores na tabela nota
insert into notas (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas, id_evento) 
values (5,5,5,5,5,5, (5+ 5 + 5 + 5 + 5 + 5)/6, 1);

insert into notas (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas, id_evento) 
values (10,9,8,10,7,10,(10+9+8+7+10)/6, 2);

insert into notas (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas, id_evento) 
values (7.5,7,8.5,10,10,10, (7.5+7+8.5+10+10+10)/6, 3);

insert into notas (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas, id_evento) 
values (9,7,5,10,10,8.5, (9+7+5+10+10+8.5)/6, 4);


-------------------------------------------------------------------

-- mostrando valores
-- select e select com inner join

-- aqui mostra todos os campos da tabela detalhes
select * from detalhes;

-- aqui mostra todos os campos da tabela eventos
select * from eventos;

-- aqui mostra todos os campos da tabela nota
select * from notas;


-- aqui mostra os campos da tabela eventos e o resumo da tabela detalhes
select eventos.id_evento, eventos.tipo, eventos.tema, eventos.integrante, eventos.responsavel, eventos.curso, to_char(eventos.data_evento, 'DD/MM/YYYY') AS data_evento, detalhes.resumo from eventos
inner join detalhes
on eventos.id_detalhe = detalhes.id_detalhe;















