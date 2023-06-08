# DAC WITH PHP

Database schema
                CREATE TABLE `Empleados` (
                `id_empleado` int(10) NOT NULL,
                `RIF` varchar(10) NOT NULL,
                `cedula` varchar(10) NOT NULL,
                `nombre` varchar(50) NOT NULL,
                `apellido` varchar(50) NOT NULL,
                `direccion` text NOT NULL,
                `celular` varchar(10) NOT NULL,
                `telefono` varchar(10) NOT NULL,
                `n_contactp` varchar(10) NOT NULL,
                `f_ingreso` date NOT NULL,
                `f_culminacion` date NOT NULL,
                `sueldo` varchar(20) NOT NULL,
                `foto` varchar(100) NOT NULL,
                `nacionalidad` varchar(40) NOT NULL,
                `tienda` int(10) NOT NULL,
                `cargo` int(10) NOT NULL,
                `activo` char(1) NOT NULL DEFAULT '1'
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
