-- ============================================
-- BASE DE DATOS: INSTITUCIÓN EDUCATIVA
-- Sistema de gestión académica
-- ============================================

-- Crear base de datos
CREATE DATABASE IF NOT EXISTS institucion_educativa
CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE institucion_educativa;

-- ============================================
-- TABLA: carreras
-- Almacena las carreras ofrecidas
-- ============================================
CREATE TABLE carreras (
    id_carrera INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre_carrera VARCHAR(100) NOT NULL,
    duracion_semestres TINYINT UNSIGNED NOT NULL,
    estado ENUM('activo', 'inactivo') DEFAULT 'activo',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_estado (estado),
    INDEX idx_nombre (nombre_carrera)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- TABLA: docentes
-- Información de los profesores
-- ============================================
CREATE TABLE docentes (
    id_docente INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    numero_documento VARCHAR(20) UNIQUE NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    especialidad VARCHAR(100),
    fecha_contratacion DATE NOT NULL,
    estado ENUM('activo', 'inactivo', 'licencia') DEFAULT 'activo',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_documento (numero_documento),
    INDEX idx_email (email),
    INDEX idx_estado (estado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- TABLA: estudiantes
-- Información de los alumnos
-- ============================================
CREATE TABLE estudiantes (
    id_estudiante INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    codigo_estudiante VARCHAR(20) UNIQUE NOT NULL,
    numero_documento VARCHAR(20) UNIQUE NOT NULL,
    nombres VARCHAR(100) NOT NULL,
    apellidos VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    fecha_nacimiento DATE NOT NULL,
    id_carrera INT UNSIGNED NOT NULL,
    semestre_actual TINYINT UNSIGNED DEFAULT 1,
    estado ENUM('activo', 'inactivo', 'egresado', 'retirado') DEFAULT 'activo',
    fecha_ingreso DATE NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_estudiante_carrera FOREIGN KEY (id_carrera) 
        REFERENCES carreras(id_carrera) ON DELETE RESTRICT ON UPDATE CASCADE,
    INDEX idx_codigo (codigo_estudiante),
    INDEX idx_documento (numero_documento),
    INDEX idx_carrera (id_carrera),
    INDEX idx_estado (estado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- TABLA: cursos
-- Cursos o materias disponibles
-- ============================================
CREATE TABLE cursos (
    id_curso INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    codigo_curso VARCHAR(20) UNIQUE NOT NULL,
    nombre_curso VARCHAR(150) NOT NULL,
    creditos TINYINT UNSIGNED NOT NULL,
    horas_semanales TINYINT UNSIGNED NOT NULL,
    id_carrera INT UNSIGNED NOT NULL,
    semestre_recomendado TINYINT UNSIGNED NOT NULL,
    estado ENUM('activo', 'inactivo') DEFAULT 'activo',
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_curso_carrera FOREIGN KEY (id_carrera) 
        REFERENCES carreras(id_carrera) ON DELETE RESTRICT ON UPDATE CASCADE,
    INDEX idx_codigo (codigo_curso),
    INDEX idx_carrera (id_carrera),
    INDEX idx_estado (estado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- TABLA: matriculas
-- Registro de matrículas de estudiantes en cursos
-- ============================================
CREATE TABLE matriculas (
    id_matricula INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_estudiante INT UNSIGNED NOT NULL,
    id_curso INT UNSIGNED NOT NULL,
    id_docente INT UNSIGNED NOT NULL,
    periodo_academico VARCHAR(10) NOT NULL, -- Ej: 2024-1, 2024-2
    nota_final DECIMAL(4,2) DEFAULT NULL,
    estado ENUM('matriculado', 'aprobado', 'desaprobado', 'retirado') DEFAULT 'matriculado',
    fecha_matricula DATE NOT NULL,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_matricula_estudiante FOREIGN KEY (id_estudiante) 
        REFERENCES estudiantes(id_estudiante) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT fk_matricula_curso FOREIGN KEY (id_curso) 
        REFERENCES cursos(id_curso) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT fk_matricula_docente FOREIGN KEY (id_docente) 
        REFERENCES docentes(id_docente) ON DELETE RESTRICT ON UPDATE CASCADE,
    CONSTRAINT uk_matricula_estudiante_curso_periodo 
        UNIQUE (id_estudiante, id_curso, periodo_academico),
    INDEX idx_estudiante (id_estudiante),
    INDEX idx_curso (id_curso),
    INDEX idx_periodo (periodo_academico),
    INDEX idx_estado (estado)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ============================================
-- DATOS DE PRUEBA
-- ============================================

-- Insertar Carreras
INSERT INTO carreras (nombre_carrera, duracion_semestres, estado) VALUES
('Ingeniería de Sistemas', 10, 'activo'),
('Administración de Empresas', 10, 'activo'),
('Contabilidad', 10, 'activo'),
('Derecho', 12, 'activo'),
('Psicología', 10, 'activo');

-- Insertar Docentes
INSERT INTO docentes (numero_documento, nombres, apellidos, email, telefono, especialidad, fecha_contratacion, estado) VALUES
('12345678', 'Carlos Alberto', 'González Pérez', 'cgonzalez@institucion.edu', '987654321', 'Programación', '2020-03-15', 'activo'),
('23456789', 'María Elena', 'Rodríguez Silva', 'mrodriguez@institucion.edu', '987654322', 'Base de Datos', '2019-08-01', 'activo'),
('34567890', 'José Luis', 'Martínez Torres', 'jmartinez@institucion.edu', '987654323', 'Gestión Empresarial', '2021-01-10', 'activo'),
('45678901', 'Ana Patricia', 'López Vargas', 'alopez@institucion.edu', '987654324', 'Finanzas', '2018-05-20', 'activo'),
('56789012', 'Roberto Carlos', 'Sánchez Díaz', 'rsanchez@institucion.edu', '987654325', 'Derecho Civil', '2022-02-14', 'activo');

-- Insertar Estudiantes
INSERT INTO estudiantes (codigo_estudiante, numero_documento, nombres, apellidos, email, telefono, fecha_nacimiento, id_carrera, semestre_actual, estado, fecha_ingreso) VALUES
('2024001', '71234567', 'Juan Carlos', 'Pérez García', 'jperez@estudiante.edu', '912345671', '2004-05-15', 1, 3, 'activo', '2024-03-01'),
('2024002', '72345678', 'María Fernanda', 'Ramírez López', 'mramirez@estudiante.edu', '912345672', '2003-08-22', 1, 3, 'activo', '2024-03-01'),
('2024003', '73456789', 'Luis Alberto', 'Torres Mendoza', 'ltorres@estudiante.edu', '912345673', '2004-11-30', 2, 2, 'activo', '2024-08-15'),
('2024004', '74567890', 'Carmen Rosa', 'Flores Huamán', 'cflores@estudiante.edu', '912345674', '2003-02-14', 3, 4, 'activo', '2023-03-01'),
('2024005', '75678901', 'Diego Alejandro', 'Vásquez Quispe', 'dvasquez@estudiante.edu', '912345675', '2004-07-08', 1, 3, 'activo', '2024-03-01');

-- Insertar Cursos
INSERT INTO cursos (codigo_curso, nombre_curso, creditos, horas_semanales, id_carrera, semestre_recomendado, estado) VALUES
('SIS101', 'Introducción a la Programación', 4, 6, 1, 1, 'activo'),
('SIS201', 'Base de Datos I', 4, 6, 1, 3, 'activo'),
('SIS301', 'Desarrollo Web', 5, 8, 1, 5, 'activo'),
('ADM101', 'Fundamentos de Administración', 3, 4, 2, 1, 'activo'),
('CON101', 'Contabilidad General', 4, 6, 3, 1, 'activo');

-- Insertar Matrículas
INSERT INTO matriculas (id_estudiante, id_curso, id_docente, periodo_academico, nota_final, estado, fecha_matricula) VALUES
(1, 2, 2, '2024-2', 16.50, 'aprobado', '2024-08-15'),
(2, 2, 2, '2024-2', 18.00, 'aprobado', '2024-08-15'),
(3, 4, 3, '2024-2', NULL, 'matriculado', '2024-08-15'),
(4, 5, 4, '2024-2', 15.00, 'aprobado', '2024-08-15'),
(5, 2, 2, '2024-2', NULL, 'matriculado', '2024-08-15');

-- ============================================
-- CONSULTAS DE VERIFICACIÓN
-- ============================================

-- Ver todas las carreras
-- SELECT * FROM carreras;

-- Ver estudiantes con su carrera
-- SELECT e.codigo_estudiante, e.nombres, e.apellidos, c.nombre_carrera, e.semestre_actual
-- FROM estudiantes e
-- INNER JOIN carreras c ON e.id_carrera = c.id_carrera;

-- Ver matrículas activas
-- SELECT m.id_matricula, e.codigo_estudiante, e.nombres, e.apellidos, 
--        cu.nombre_curso, d.nombres AS docente_nombres, d.apellidos AS docente_apellidos,
--        m.periodo_academico, m.estado
-- FROM matriculas m
-- INNER JOIN estudiantes e ON m.id_estudiante = e.id_estudiante
-- INNER JOIN cursos cu ON m.id_curso = cu.id_curso
-- INNER JOIN docentes d ON m.id_docente = d.id_docente
-- WHERE m.estado = 'matriculado';