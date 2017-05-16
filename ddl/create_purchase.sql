# Purchase table
CREATE TABLE purchase (
  ISBN13   BIGINT   NOT NULL,
  cid      INT      NOT NULL,
  datetime DATETIME NOT NULL,
  PRIMARY KEY pk_pur (ISBN13, cid, datetime),
  FOREIGN KEY fk_pur_bk (ISBN13)
  REFERENCES book (ISBN13)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
  FOREIGN KEY fk_pur_cust (cid)
  REFERENCES customer (cid)
    ON UPDATE CASCADE
    ON DELETE CASCADE
);
