-- criando banco semana_gestao
create database semana_gestao;

-- criando tabela nota
create table nota(
id_nota int primary key not null auto_increment,
pertinencia double not null,
coerencia double not null,
inovacao double not null,
desenvoltura double not null,
slide double not null,
tempo double not null,
media_notas double(10,2) not null
);

-- criando tabela eventos
create table eventos(
id_eventos int primary key auto_increment not null,
tipo varchar(255) not null,
tema varchar(255) not null,
integrante varchar(255) not null,
responsavel varchar(255) not null,
curso varchar(255) not null,
data_evento date not null,
detalhes varchar(255) not null,
id_nota_evento int references nota(id_nota)
);

---------------------------------------------------------------------

-- inserindo valores na tabela eventos
insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, detalhes, id_nota_evento) 
values ("Palestra", "SCRUM", "José, Maria, Carlos", "João", "Arquitetura de Software", "2016/05/20", "Palestra sobre Scrum", 1);

insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, detalhes, id_nota_evento) 
values ("Palestra", "MONO", "Luis", "Ricardo", "Programação Web", "2016/05/21", "O que é? E como utilizar o MONO", 2);

insert into eventos (tipo, tema, integrante, responsavel, curso, data_evento, detalhes, id_nota_evento) 
values ("Mini-Curso", "Java basico", "Laura", "Paula", "Programação Web II", "2016/05/20", "Historia do Java, fazendo um projeto simples", 3);


-- inserindo valores na tabela nota
insert into nota (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas ) 
values (5,5,5,5,5,5, (pertinencia+coerencia+inovacao+desenvoltura+slide+tempo)/6);

insert into nota (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas ) 
values (10,9,8,10,7,10, (pertinencia+coerencia+inovacao+desenvoltura+slide+tempo)/6);

insert into nota (pertinencia, coerencia, inovacao, desenvoltura, slide, tempo, media_notas ) 
values (7.5,7,8.5,10,10,10, (pertinencia+coerencia+inovacao+desenvoltura+slide+tempo)/6);

-------------------------------------------------------------------

-- mostrando valores
-- select e select com inner join

-- aqui mostra todos os campos da tabela eventos
select * from eventos;

-- aqui mostra todos os campos da tabela nota
select * from nota;

-- aqui mostra os campos da tabela eventos e o campo media da tabela nota
select eventos.id_eventos, eventos.tipo, eventos.tema, eventos.integrante, eventos.responsavel, eventos.curso, eventos.data_evento, eventos.detalhes, nota.media_notas from eventos
inner join nota
on eventos.id_eventos = nota.id_nota;

