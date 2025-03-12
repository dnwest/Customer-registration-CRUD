CREATE TABLE cadastroclientes (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  nome TEXT,
  sobrenome TEXT,
  telefone TEXT,
  email TEXT
);

INSERT INTO cadastroclientes (nome, sobrenome, telefone, email) VALUES
('Carlos', 'Silva', '11987654321', 'carlos.silva@email.com'),
('Ana', 'Souza', '21998765432', 'ana.souza@email.com'),
('Marcos', 'Oliveira', '31912345678', 'marcos.oliveira@email.com'),
('Fernanda', 'Lima', '41923456789', 'fernanda.lima@email.com'),
('Rafael', 'Martins', '51934567890', 'rafael.martins@email.com');