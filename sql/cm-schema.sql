DROP TABLE person CASCADE;
CREATE TABLE person (
  fname    varchar(15) not null, 
  lname    varchar(15) not null,
  id      char(9),
  bdate    date,
  address  varchar(50),
  sex      char, 
  dno      decimal(4),
  phone integer(10), 
  primary key (id),
);

DROP TABLE employee CASCADE;
CREATE TABLE employee (
    id char(9), 
    position varchar(9), 
    superid(9), 
    dno decimal(4),
    primary key(id), 
    foreign key(id) references person(id), 
    foreign key(superid) references person(id)
    ); 

DROP TABLE department CASCADE;
CREATE TABLE department (
  dname        varchar(25) not null,
  dnumber      decimal(4),
  mgrid       char(9) not null, 
  primary key (dnumber),
  unique (dname),
  foreign key (mgrssn) references employee(ssn)
);

ALTER TABLE employee ADD (
  foreign key (dno) references department(dnumber)
);

DROP TABLE dept_locations CASCADE;
CREATE TABLE dept_locations (
  dnumber   decimal(4),
  dlocation varchar(15), 
  primary key (dnumber,dlocation),
  foreign key (dnumber) references department(dnumber)
);

DROP TABLE program CASCADE;
CREATE TABLE project (
  pname      varchar(25) not null,
  pnumber    decimal(4),
  plocation  varchar(15),
  dnum       decimal(4) not null,
  ptime decimal(4) not null, 
  primary key (pnumber),
  unique (pname),
  foreign key (dnum) references department(dnumber)
);

DROP TABLE works_on CASCADE;
CREATE TABLE works_on (
  eid   char(9),
  pno    decimal(4),
  hours  decimal(4,1),
  primary key (id,pno),
  foreign key (eid) references employee(id),
  foreign key (pno) references project(pnumber)
);

DROP TABLE attedee CASCADE;
CREATE TABLE attendee (
  id      char(9), 
  pno      decimal(4),
  phone integer(10), 
  primary key (id),
  foreign key (pno) references program(id),
    foreign key(id) references person(id)
);

DROP TABLE choir CASCADE;
CREATE TABLE choir (
  mid char(9), 
  instrument varchar(15),
  singingInfo varchar(15), 
  folderNo decimal(2), 
  pno      decimal(4), 
  primary key (id),
  foreign key (pno) references program(id)
  foreign key (mid) references person(id)
);

DROP TABLE retreat CASCADE;
CREATE TABLE retreat (
  rname      varchar(25) not null,
  rnumber    decimal(4),
  rlocation  varchar(15),
  dnum       decimal(4) not null,
  sid char(9), 
    semester char(4), 
  primary key (pnumber),
  foreign key (dnum) references department(dnumber)
);

DROP TABLE rAttendee CASCADE; 
CREATE TABLE rAttendee (
    pid char(9), 
    eid char(9), 
    rid char(9), 
    erelation char(9), 
    disbility char(15), 
    payment decimal(4), 
    dietary varchar(30), 
    room varchar(30), 
    medical varchar(30), 
    primary key(pid), 
    foreign key (pid) references person(id), 
    foreign key (eid) references person(id), 
    foreign key (rid) references retreat(rnumber)
);


ALTER TABLE retreat ADD (
  foreign key (sid) references rAttendee(pid)
);


DROP TABLE wedding CASCADE; 
CREATE TABLE wedding (
    bid char(9), 
    gid char(9), 
    pid char(9), 
    wdate date, 
    rdate date, 
    loyolaAff varchar(20), 
    ctype varchar(20), 
    id char(9) not null, 
    payment decimal(4), 
    primary key(id), 
    foreign key(bid,gid,pid) references person(id)
); 