BEGIN;

CREATE SCHEMA IF NOT EXISTS library
    AUTHORIZATION postgres;

CREATE TABLE IF NOT EXISTS library.author
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    name character varying(40) COLLATE pg_catalog."default" NOT NULL,
    surname character varying(40) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT author_pkey PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS library.book
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    title character varying(100) COLLATE pg_catalog."default" NOT NULL,
    isbn_code character varying(13) COLLATE pg_catalog."default" NOT NULL,
    author_id integer NOT NULL,
    CONSTRAINT book_pkey PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS library.review
(
    id integer NOT NULL GENERATED ALWAYS AS IDENTITY ( INCREMENT 1 START 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1 ),
    rating smallint NOT NULL,
    raview text COLLATE pg_catalog."default" NOT NULL,
    book_id integer NOT NULL,
    CONSTRAINT review_pkey PRIMARY KEY (id)
);

COMMENT ON COLUMN library.review.rating
    IS 'contains 1-10 value for starts revies';

ALTER TABLE IF EXISTS library.book
    ADD CONSTRAINT author_id FOREIGN KEY (author_id)
    REFERENCES library.author (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;


ALTER TABLE IF EXISTS library.review
    ADD CONSTRAINT book_id FOREIGN KEY (book_id)
    REFERENCES library.book (id) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;

END;