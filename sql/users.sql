
CREATE USER `peop`@`localhost`;

GRANT SELECT, INSERT, UPDATE, DELETE, EXECUTE, REFERENCES ON peops.* TO `peop`@`localhost`;

SET PASSWORD FOR 'peop'@'localhost' = PASSWORD('peop_pass');