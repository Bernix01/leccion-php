--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.3
-- Dumped by pg_dump version 9.5.4

-- Started on 2016-08-26 07:27:05 ECT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 2169 (class 1262 OID 12413)
-- Dependencies: 2168
-- Name: postgres; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON DATABASE postgres IS 'default administrative connection database';


--
-- TOC entry 2 (class 3079 OID 12395)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2172 (class 0 OID 0)
-- Dependencies: 2
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


--
-- TOC entry 1 (class 3079 OID 16464)
-- Name: adminpack; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS adminpack WITH SCHEMA pg_catalog;


--
-- TOC entry 2173 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION adminpack; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION adminpack IS 'administrative functions for PostgreSQL';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 187 (class 1259 OID 16484)
-- Name: becario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE becario (
    id integer NOT NULL,
    nombre character varying,
    fk_id_prog integer
);


ALTER TABLE becario OWNER TO postgres;

--
-- TOC entry 186 (class 1259 OID 16482)
-- Name: becario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE becario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE becario_id_seq OWNER TO postgres;

--
-- TOC entry 2174 (class 0 OID 0)
-- Dependencies: 186
-- Name: becario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE becario_id_seq OWNED BY becario.id;


--
-- TOC entry 183 (class 1259 OID 16457)
-- Name: demo; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE demo (
    id integer NOT NULL,
    nombre character varying NOT NULL,
    pimage character varying
);


ALTER TABLE demo OWNER TO postgres;

--
-- TOC entry 182 (class 1259 OID 16455)
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
-- TOC entry 2175 (class 0 OID 0)
-- Dependencies: 182
-- Name: demo_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE demo_id_seq OWNED BY demo.id;


--
-- TOC entry 185 (class 1259 OID 16475)
-- Name: programa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE programa (
    id integer NOT NULL,
    nombre character varying,
    pais character varying
);


ALTER TABLE programa OWNER TO postgres;

--
-- TOC entry 184 (class 1259 OID 16473)
-- Name: programa_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE programa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE programa_id_seq OWNER TO postgres;

--
-- TOC entry 2176 (class 0 OID 0)
-- Dependencies: 184
-- Name: programa_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE programa_id_seq OWNED BY programa.id;


--
-- TOC entry 2037 (class 2604 OID 16487)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario ALTER COLUMN id SET DEFAULT nextval('becario_id_seq'::regclass);


--
-- TOC entry 2035 (class 2604 OID 16460)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY demo ALTER COLUMN id SET DEFAULT nextval('demo_id_seq'::regclass);


--
-- TOC entry 2036 (class 2604 OID 16478)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY programa ALTER COLUMN id SET DEFAULT nextval('programa_id_seq'::regclass);


--
-- TOC entry 2163 (class 0 OID 16484)
-- Dependencies: 187
-- Data for Name: becario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY becario (id, nombre, fk_id_prog) FROM stdin;
\.


--
-- TOC entry 2177 (class 0 OID 0)
-- Dependencies: 186
-- Name: becario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('becario_id_seq', 1, false);


--
-- TOC entry 2159 (class 0 OID 16457)
-- Dependencies: 183
-- Data for Name: demo; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY demo (id, nombre, pimage) FROM stdin;
8	Mickeyzxcxzc	/prueba/fotos/VNZVklL7.jpg
10	Mickey	/prueba/fotos/img.jpg
11	Mickey	/prueba/fotos/img.jpg
\.


--
-- TOC entry 2178 (class 0 OID 0)
-- Dependencies: 182
-- Name: demo_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('demo_id_seq', 11, true);


--
-- TOC entry 2161 (class 0 OID 16475)
-- Dependencies: 185
-- Data for Name: programa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY programa (id, nombre, pais) FROM stdin;
\.


--
-- TOC entry 2179 (class 0 OID 0)
-- Dependencies: 184
-- Name: programa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('programa_id_seq', 1, false);


--
-- TOC entry 2039 (class 2606 OID 16494)
-- Name: pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY programa
    ADD CONSTRAINT pk PRIMARY KEY (id);


--
-- TOC entry 2042 (class 2606 OID 16492)
-- Name: pk_becario; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario
    ADD CONSTRAINT pk_becario PRIMARY KEY (id);


--
-- TOC entry 2040 (class 1259 OID 16500)
-- Name: fki_fk; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX fki_fk ON becario USING btree (fk_id_prog);


--
-- TOC entry 2043 (class 2606 OID 16495)
-- Name: fk; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY becario
    ADD CONSTRAINT fk FOREIGN KEY (fk_id_prog) REFERENCES programa(id);


--
-- TOC entry 2171 (class 0 OID 0)
-- Dependencies: 7
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2016-08-26 07:27:05 ECT

--
-- PostgreSQL database dump complete
--

