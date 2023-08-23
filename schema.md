use test;

create table producto(
	id int primary key auto_increment,
    nombre varchar(50) not null,
    precio varchar(50) not null
);

describe producto;

select * from producto;
