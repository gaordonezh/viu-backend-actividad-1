USE library_db;

INSERT INTO actors (name, last_name, date_birth, nationality)
VALUES
  ('Leonardo','Di Caprio','1985-10-02','EEUU'),
  ('Vin','Diesel','1990-12-12','EEUU'),
  ('Juan','Gomez','1989-10-02','INGLATERRA');

INSERT INTO directors (name, last_name, date_birth, nationality)
VALUES
  ('Guillermo','Del Toro','1975-06-11','MEXICO'),
  ('Martin','Scorsese','1968-03-02','EEUU'),
  ('Tim','Burton','1958-09-25','EEUU');

INSERT INTO languages (name, iso_code)
VALUES
  ('Español','es'),
  ('Ingles','en'),
  ('Portugués','pt');

INSERT INTO platforms (name)
VALUES
  ('NETFLIX'),
  ('HBO+'),
  ('AMAZON PRIME'),
  ('STAR+');

INSERT INTO series (title,platform_id,director_id)
VALUES
  ('La casa del terror',1,1),
  ('Mision rescate',3,2),
  ('El libro de las sombras',2,1),
  ('Caminando al sur',4,3);

INSERT INTO serie_actor (actor_id,serie_id)
VALUES
  (1,1),
  (1,2),
  (2,1),
  (3,3),
  (3,4);

INSERT INTO serie_language (type,serie_id,language_id)
VALUES
  (0,1,1),
  (0,2,2),
  (1,3,1),
  (1,4,2),
  (1,1,3),
  (1,2,3),
  (0,3,3),
  (0,4,3);

