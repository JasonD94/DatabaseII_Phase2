# Book table
CREATE TABLE book (
  ISBN13   BIGINT         NOT NULL,
  title    VARCHAR(200)   NOT NULL,
  year     YEAR(4)        NOT NULL,
  category VARCHAR(200)   NOT NULL,
  pname    VARCHAR(200)   NOT NULL,
  price    DECIMAL(10, 2) NOT NULL,
  PRIMARY KEY pk_book (ISBN13),
  FOREIGN KEY fk_book (pname)
  REFERENCES publisher (pname)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
