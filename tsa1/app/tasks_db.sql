-- Database: tasks_db

CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  status VARCHAR(20) NOT NULL DEFAULT 'pending',
  task_date DATE NOT NULL,
  created_at DATETIME NOT NULL
);

-- Insert Demo User
TRUNCATE TABLE users;
INSERT INTO users (id, username, full_name, email, created_at) VALUES
(1, 'aryanne_cruz', 'Aryanne Chelsea Cruz', 'aryanne.cruz@example.com', NOW());

-- Insert Tasks
TRUNCATE TABLE tasks;
INSERT INTO tasks (id, title, status, task_date, created_at) VALUES
(1, 'Review for midterm exams in Physics, Web Technology, and Networking.', 'pending', '2026-10-05', '2026-10-05 03:01:33'),
(2, 'Complete technical formatives.', 'pending', '2026-10-05', '2026-10-05 03:01:33'),
(3, 'Answer short quizzes and formatives.', 'completed', '2026-10-05', '2026-10-05 03:01:33'),
(4, 'Prepare for the mock defense.', 'pending', '2026-10-05', '2026-10-05 03:01:33'),
(5, 'Stop by the laundry shop.', 'completed', '2026-10-04', '2026-10-05 03:01:33'),
(6, 'Buy groceries to restock food supplies.', 'completed', '2026-10-04', '2026-10-05 03:01:33'),
(7, 'Do household chores.', 'completed', '2026-10-04', '2026-10-05 03:01:33'),
(8, 'Go to the gym.', 'completed', '2026-10-03', '2026-10-05 03:01:33'),
(9, 'Cook garlic butter chicken.', 'completed', '2026-10-03', '2026-10-05 03:01:33'),
(10, 'Get some rest after completing all tasks.', 'pending', '2026-10-03', '2026-10-05 03:01:33');