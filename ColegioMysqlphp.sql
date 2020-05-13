create database colegio;

use colegio;

create table Materias (
 mat_cod int not null,
 mat_nom varchar(30),
 primary key(mat_cod)
);

create table Salones (
 sal_cod int not null,
 sal_cur varchar (8) not null,
 primary key(sal_cod, sal_cur)
);

create table Estudiantes (
 est_cod int not null,
 est_nom varchar(10),
 est_ap varchar(10),
 est_cur int,
 primary key(est_cod),
 foreign key (est_cur) references Salones(sal_cod)
 );
 
 create table Sal_est(
 se_estcod int not null,
 se_salcod int not null,
 primary key(se_estcod),
 foreign key (se_estcod) references Estudiantes(est_cod),
 foreign key (se_salcod) references Salones(sal_cod)
);
 
create table Est_mat(
 em_estcod int not null,
 em_matcod int not null,
 em_nota float,
 primary key(em_estcod,em_matcod),
 foreign key (em_estcod) references Estudiantes(est_cod),
 foreign key (em_matcod) references Materias(mat_cod)
);

create table Profesores (
 pro_cod int not null,
 pro_nom varchar(10),
 pro_ap varchar(10),
 primary key(pro_cod)
 );

create table Sal_pro(
 sp_procod int not null,
 sp_salcod int not null,
 primary key(sp_salcod),
 foreign key (sp_procod) references Profesores (pro_cod),
 foreign key (sp_salcod) references Salones(sal_cod)
);

create table Pro_mat(
 pm_procod int not null,
 pm_matcod int not null,
 pm_matriculados int,
 primary key (pm_procod,pm_matcod),
 foreign key (pm_procod) references Profesores (pro_cod),
 foreign key (pm_matcod) references Materias (mat_cod)
);

--insert into Materias values(1010,'Estadisticas.');
--insert into Materias values(1020,'Bases de datos.');
--insert into Materias values(1030,'Calculo 4.');

--insert into Salones values(2010,'11-1');
--insert into Salones values(2020,'11-2');
--insert into Salones values(2030,'10-1');

--insert into Estudiantes values (3010,'Rodrigo','Fernandez',2010);
--insert into Estudiantes values (3020,'Nacho','Monrreal',2020);
--insert into Estudiantes values (3030,'Nicole','Aguirre',2030);

--insert into Profesores values (4010,'Juan','Rodriguez');
--insert into Profesores values (4020,'Luis','Diaz');
--insert into Profesores values (4030,'Victor','Gutierrez');
	
--insert into Pro_mat values (4010,1010,12);
--insert into Pro_mat values (4020,1010,17);
--insert into Pro_mat values (4030,1020,23);

--insert into Sal_est values (3010,2020);
--insert into Sal_est values (3020,2020);
--insert into Sal_est values (3030,2030);

--insert into Sal_pro values (4010,2020);
--insert into Sal_pro values (4030,2030);
  
  