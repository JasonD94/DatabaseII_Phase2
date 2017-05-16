# Customer table
CREATE TABLE customer(
  cid int NOT NULL AUTO_INCREMENT,
  name VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  PRIMARY KEY pk_cust (cid),
  FOREIGN KEY fk_cust (name, address)
  REFERENCES people (name, address)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);

ALTER TABLE customer AUTO_INCREMENT = 10000;