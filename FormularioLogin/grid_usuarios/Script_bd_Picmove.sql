create database picmove
use picmove


GO
 CREATE TABLE usuario(
 ID_Usuario INT IDENTITY PRIMARY KEY NOT NULL,
 Rol VARCHAR(20) NOT NULL,
 Puesto VARCHAR(20) NOT NULL,
 Contrasena VARCHAR(25) NOT NULL,
 Nombre_Usuario VARCHAR(25) NOT NULL,
 Telefono_Usuario VARCHAR(25) NOT NULL,
 Direccion_Usuario VARCHAR(25) NOT NULL,
 RFC_Usuario VARCHAR(50) NOT NULL,
 Fecha_Nac VARCHAR(25) NOT NULL,
 Fecha_registro VARCHAR(25) NOT NULL)
 GO
 

 select ID_Usuario, Rol, Puesto, Contrasena, Nombre_Usuario, Telefono_Usuario, Direccion_Usuario, RFC_Usuario, Fecha_Nac, Fecha_registro
 from usuario

 Insert
 into usuario 
 values ('Administrador', 'Fotografia escenica' ,'ABC1_1' ,'Fernando', '11412584', ' ST broll 3', 'ASGSHDYDHDGDDGDGDH','1999-01-25' ,'2020-06-2020')

 Insert
 into usuario 
 values ('Empleado', 'Diseñador gráfico' ,'ABC1_1' ,'Carmen', '1122414', ' ST broll 4', 'ASGSHDYDHDGDDGDGDH','199-01-25' ,'2020-06-2020')
 
 Insert
 into usuario 
 values ('Administrador', 'Fotografia escenica' ,'ABC1_1' , 'Cecilia', '1122414', ' ST broll 5', 'HCEHDUDHDDJDKD','199-01-25' ,'2020-06-2020')

 Insert
 into usuario 
 values ('Administrador', 'Diseñador gráfico' ,'ABC1_1' , 'Alejandra', '1122414', ' ST broll 6', 'AAHSUYEGDTFFNCC','199-01-25' ,'2020-06-2020')

 Insert
 into usuario 
 values ('Empleado', 'Fotografia escenica' ,'ABC1_1' ,'Ivan','11412584', ' ST broll 7', 'ASGSHDYDHDGDDGDGDH','199-01-25' ,'2020-06-2020')

 Insert
 into usuario 
 values ('Empleado', 'Comodin' ,'ABC1_1' ,'Alejandro', '11412584', ' ST broll 8', 'ASGSHDYDHDGDDGDGDH','199-01-25' ,'2020-06-2020')

 Insert
 into usuario 
 values ('Administrador', 'Fotografia escenica' ,'ABC1_1' ,'Facundo', '11412584', ' ST broll 9', 'ASGSHDYDHDGDDGDGDH','199-01-25' ,'2020-06-2020')