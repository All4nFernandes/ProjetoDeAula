INSERT INTO categoria (nome) VALUES
('Desenvolvimento Web'),
('Banco de Dados'),
('Programação Mobile'),
('Segurança da Informação'),
('Inteligência Artificial');

INSERT INTO artigo (titulo, id_categoria, conteudo) VALUES
('Guia Completo de HTML e CSS', 1, 'Aprenda HTML e CSS do básico ao avançado para criar sites modernos e responsivos.'),
('SQL: Fundamentos e Boas Práticas', 2, 'Descubra como estruturar bancos de dados e escrever queries eficientes em SQL.'),
('Criando Apps Android com Kotlin', 3, 'Um passo a passo para desenvolver aplicativos Android utilizando Kotlin.'),
('Protegendo Aplicações Web', 4, 'Entenda os principais riscos de segurança e como mitigar vulnerabilidades em aplicações web.'),
('Introdução ao Machine Learning', 5, 'Conceitos básicos de aprendizado de máquina e suas aplicações no mundo real.');

INSERT INTO usuario (nome, email, data_nascimento, cpf, telefone) VALUES
('João Silva', 'joao.silva@email.com', '1990-05-14', '12345678901', '(11) 91234-5678'),
('Maria Oliveira', 'maria.oliveira@email.com', '1985-08-22', '23456789012', '(21) 98765-4321'),
('Carlos Santos', 'carlos.santos@email.com', '1998-11-30', '34567890123', '(31) 97654-3210'),
('Ana Souza', 'ana.souza@email.com', '1993-03-25', '45678901234', '(41) 96543-2109'),
('Lucas Pereira', 'lucas.pereira@email.com', '2000-07-19', '56789012345', '(51) 95432-1098');

insert into login(usuario, senha)Values("admin","admin");