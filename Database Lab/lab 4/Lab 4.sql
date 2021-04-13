CREATE TABLE Customer(
CustomerID INT IDENTITY(1,1) PRIMARY KEY,
Name VARCHAR(50),
Age INT CHECK (Age >= 18),
Salary DECIMAL(18,2),
Address VARCHAR(50)
);

INSERT INTO Customer VALUES('Rahim',32,2000.00,'Gulshan');
INSERT INTO Customer VALUES('Karim',25,1500.00,'Dhanmondi'),
('Hashim',23,2000.00,'Mottijheel'),
('Khan',25,6500.00,'Tejgaon'),
('Rahman',27,8500.00,'Wari'),
('Mehedi',22,4500.00,'Mohammadpur'),
('Kashim',24,10000.00,'Kakrail'),
('Kazi',24,1000.00,'Kakrail');

SELECT * FROM Customer;
SELECT * FROM Customer WHERE Salary LIKE '200%';
SELECT * FROM Customer WHERE Name LIKE 'Ka%';

UPDATE Customer
SET Age=22
WHERE CustomerID = 8;

SELECT * FROM Customer WHERE Age IN (25,27) ;

SELECT * FROM Customer WHERE Age BETWEEN 25 AND 27;

SELECT * FROM Customer WHERE Age >= 25 AND Salary >= 6500;

SELECT * FROM Customer WHERE Age >= 25 OR Salary >= 6500;

SELECT * FROM Customer WHERE Name LIKE 'Ka%' AND (Age >= 25 OR Salary >= 6500);

SELECT TOP 60 PERCENT * FROM Customer;

SELECT TOP 3 * FROM Customer;
INSERT INTO Customer VALUES('Fahim',NULL,2000.00,'Gulshan');
SELECT * FROM Customer WHERE Age = '' ;
SELECT * FROM Customer;

SELECT SUM(Salary) AS 'Total Salary', AVG(Salary) AS 'Average Salary' FROM Customer;
SELECT MIN(Salary) FROM Customer WHERE Age >= 25;
SELECT MAX(Salary) FROM Customer WHERE Age >= 25;
SELECT MAX(Salary)-MIN(Salary) FROM Customer WHERE Age >= 25;
SELECT COUNT(*) FROM Customer WHERE Name LIKE 'Ka%';
SELECT COUNT(Address) AS 'NumberOfCustomer' FROM Customer;
SELECT LEN(Name) FROM Customer;
UPDATE Customer SET Name=UPPER(Name);
UPDATE Customer SET Name=LOWER(Name);
SELECT Age,MAX(Salary) FROM Customer GROUP BY Age;
SELECT Age,MAX(Salary) FROM Customer GROUP BY Age HAVING Age >= 22;
--ERROR--
SELECT Name,Age,MAX(Salary) FROM Customer GROUP BY Age HAVING Name LIKE 'Ka%';
--ERROR--
SELECT Name,Age,MAX(Salary) FROM Customer GROUP BY Name HAVING Name LIKE 'Ka%';