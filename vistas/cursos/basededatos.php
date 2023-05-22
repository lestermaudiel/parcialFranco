CREATE TABLE cursos (
    curso_id SERIAL PRIMARY KEY,
    curso_nombre VARCHAR(50),
    curso_periodos INT,
    curso_fase VARCHAR(30),
    curso_instructor VARCHAR(50),
    curso_creditos FLOAT
);
