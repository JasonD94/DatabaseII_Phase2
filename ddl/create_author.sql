CREATE TABLE author (
  aid     INT          NOT NULL,
  name    VARCHAR(200) NOT NULL,
  address VARCHAR(200) NOT NULL,
  PRIMARY KEY (aid),
  FOREIGN KEY fk_people(name, address)
  REFERENCES people (name, address)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);
