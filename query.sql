INSERT INTO y (author,title,youtube)
VALUES ("Yann Tiersen","Comptine d'un autre été (Amélie)", "PaXKf0JEzEA")
ALTER TABLE Songs ADD FOREIGN KEY (author) REFERENCES Authors(id)

