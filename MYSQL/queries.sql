-- CREATE DATABASE `school`;

-- SHOW TABLES;

-- CREATE TABLE `students` (
-- 	id INT AUTO_INCREMENT PRIMARY KEY,
-- 	name VARCHAR(100) NOT NULL,
-- 	age INT NOT NULL,
-- 	email VARCHAR(50) UNIQUE NOT NULL,
-- 	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );


-- CRUD (Create, Read, Update, Delete)

-- INSERT INTO `students` 
-- (name, age, email)
-- VALUES
-- ("John Doe", 20, "john@gmail.com"),
-- ("Sara Smith", 22, "sara@gmail.com"),
-- ("Mike", 25, "mike@gmail.com"),
-- ("Brad", 19, "brad@gmail.com"),
-- ("Kim", 21, "kim@gmail.com");


-- SELECT * FROM `students`;
-- SELECT id, name as studentName FROM `students`;
-- SELECT * FROM `students` WHERE id IN (1,3);

-- SELECT * FROM `students` WHERE name LIKE "%k%";


-- UPDATE `students` 
-- 	SET `name` = "Kimi"
-- 	WHERE `name` = "Kim";


-- DELETE FROM students WHERE id = 5;

-- SELECT * FROM students;


-- SELECT * FROM students


-- CREATE TABLE `courses` (
-- 	id INT AUTO_INCREMENT PRIMARY KEY,
-- 	title VARCHAR(100) NOT NULL,
-- 	duration INT, -- weeks
-- 	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );


-- INSERT INTO courses 
-- (title, duration) 
-- VALUES
-- ("IoT", 12),
-- ("AI/ML", 10),
-- ("Web Development", 8),
-- ("DBA", 9),
-- ("Web Assembly", 10);


-- SELECT 
-- 	students.id as studentId, 
-- 	courses.id as courseId,
-- 	students.name as studentName,
-- 	courses.title as courseName
-- FROM students
-- RIGHT JOIN courses 
-- ON
-- students.course_id = courses.id;
-- ;



SELECT * FROM students CROSS JOIN courses;
