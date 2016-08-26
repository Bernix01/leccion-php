--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.3

-- Started on 2016-08-17 07:55:11 ECT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2142 (class 1262 OID 12413)
-- Dependencies: 2141
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- TOC entry 1 (class 3079 OID 12395)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2145 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 182 (class 1259 OID 16457)
-- Name: demo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE demo (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    pimage character varying
);


ALTER TABLE demo OWNER TO postgres;

--
-- TOC entry 181 (class 1259 OID 16455)
-- Name: demo_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE demo_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE demo_id_seq OWNER TO postgres;

--
-- TOC entry 2146 (class 0 OID 0)
-- Dependencies: 181
-- Name: demo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE demo_id_seq OWNED BY demo.id;


--
-- TOC entry 2020 (class 2604 OID 16460)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY demo ALTER COLUMN id SET DEFAULT nextval('demo_id_seq'::regclass);


--
-- TOC entry 2136 (class 0 OID 16457)
-- Dependencies: 182
-- Data for Name: demo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY demo (id, nombre, pimage) FROM stdin;
8	Mickeyzxcxzc	/fotos/img.jpg
9	Guillermo	/fotos/img.jpg
\.


--
-- TOC entry 2147 (class 0 OID 0)
-- Dependencies: 181
-- Name: demo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('demo_id_seq', 9, true);


--
-- TOC entry 2144 (class 0 OID 0)
-- Dependencies: 6
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-08-17 07:55:11 ECT

--
-- PostgreSQL database dump complete
--

