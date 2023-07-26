CREATE OR REPLACE VIEW library.best_authors
 AS
 SELECT 
      a.name,
      a.surname,
      avg(r.rating)::numeric(10,2) AS avg_rating
   FROM library.author a
     JOIN library.book b ON a.id = b.author_id
     JOIN library.review r ON b.id = r.book_id
  GROUP BY a.id
  ORDER BY (avg(r.rating)) DESC
  LIMIT 5;

ALTER TABLE library.best_authors
    OWNER TO postgres;

