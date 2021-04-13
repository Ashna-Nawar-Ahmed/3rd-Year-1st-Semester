--Table Doctor--
CREATE TABLE Doctor(
DoctorId Int Identity(5001,1) Primary Key,
FirstName Varchar(50) Not Null,
LastName Varchar(50) Not Null,
Specialty Varchar(15) Not Null,
YearOfService Int Not Null,
Salary Numeric(7,2)
);

--Table Patient--
CREATE TABLE PATIENT(
PatientId Int Identity(6001,1) Primary Key,
PatientName Varchar(50) Not Null,
Category Varchar(15) Not Null,
WardCode Numeric(8),
Severity Char(1)Default 'S'
);

--Table Admission--
CREATE TABLE ADMISSION(
AdmissionId Int Identity(7001,1) Primary Key,
DoctorId Int Not Null FOREIGN KEY REFERENCES Doctor(DoctorId),
PatientId Int Not Null FOREIGN KEY REFERENCES PATIENT(PatientId),
DaysOfStay Numeric(5),
AdmissionDate Date,
Bill Numeric(8,2) Default 0
);

--TABLE DOCTOR--
INSERT INTO Doctor Values ('Amit','Chowdhury','Neurology',5,45000);
INSERT INTO Doctor Values ('Taslima','Khatun','Surgery',9,80000);
INSERT INTO Doctor Values ('Marina','Tabassum','Medicine',8,75000);
INSERT INTO Doctor Values ('Ahmed','Syed','Orthopedics',11,10000);
INSERT INTO Doctor Values ('Fatima','Rahman','Pediatrics',3,30000);

--TABLE PATIENT--
INSERT INTO PATIENT VALUES('Rahim Ahmed','Medicine',45671234,'N');
INSERT INTO PATIENT VALUES('Sabbir Hassan','Orthopedics',65381267,'M');
INSERT INTO PATIENT VALUES('Asif Chowdhury','Pediatrics',98745600,'S');
INSERT INTO PATIENT VALUES('Syeeda Sultana','Surgery',12765890,'N');
INSERT INTO PATIENT VALUES('Marzook Rahman','Medicine',63829014,'S');

--TABLE ADMISSION--
INSERT INTO ADMISSION VALUES(5003,6003,2,'2018-11-21',16000.50);
INSERT INTO ADMISSION VALUES(5001,6002,1,'2018-12-14',2000.00);
INSERT INTO ADMISSION VALUES(5002,6005,3,'2019-01-02',22000.00);
INSERT INTO ADMISSION VALUES(5005,6004,4,'2019-01-11',5000.60);
INSERT INTO ADMISSION VALUES(5004,6001,6,'2019-01-19',70000);


--QUESTION 1--
SELECT DoctorId as 'Doctor Identification',FirstName+' '+LastName as 'Doctor Name',
YearOfService as 'Doctors Year of service', Salary as 'Salary Earned'
FROM Doctor;

--QUESTION 2--
SELECT * FROM Doctor where Specialty <> 'Surgery';

--QUESTION 3--
SELECT PatientId, WardCode
FROM PATIENT
WHERE Severity = 'S';

--QUESTION 4--
SELECT PatientId, WardCode,Category
FROM PATIENT
WHERE Severity = 'S';

--QUESTION 5--
UPDATE PATIENT
SET PatientName='Shimul Paul'
WHERE PatientName = 'Sabbir Hassan';

--QUESTION 6--
SELECT *
FROM PATIENT
WHERE Category = 'Medicine';

--QUESTION 7--
SELECT FirstName+' '+LastName as 'Name'
FROM Doctor
WHERE Salary > '45000';

--QUESTION 8--
UPDATE ADMISSION
SET Bill='10000'
WHERE AdmissionId = '7003';

--QUESTION 9--
SELECT FirstName, LastName,Specialty
FROM Doctor
ORDER BY Salary ASC;

--QUESTION 10--
SELECT AdmissionId, AdmissionDate, DaysOfStay,Bill
FROM ADMISSION
WHERE PatientId = '6003';

--QUESTION 11--
UPDATE Doctor
SET Salary='45000.00'
WHERE YearOfService > '5';