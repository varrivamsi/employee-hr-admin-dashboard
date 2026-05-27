-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2026 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` varchar(8) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `work_shift` varchar(30) DEFAULT NULL,
  `role_type` varchar(50) DEFAULT NULL,
  `access_level` varchar(30) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `full_name`, `designation`, `department`, `email`, `phone`, `gender`, `age`, `city`, `state`, `joining_date`, `experience_years`, `qualification`, `work_shift`, `role_type`, `access_level`, `salary`, `status`, `password`, `profile_photo`, `created_at`) VALUES
('81000001', 'Rajesh Kumar', 'System Admin', 'Administration', 'rajesh.admin@company.in', '9899001001', 'Male', 42, 'Hyderabad', 'Telangana', '2017-04-12', 18, 'MBA HR', 'General', 'Super Admin', 'High', 120000, 'Active', 'ADM81000001@', 'profiles/81000001.jpg', '2026-05-27 07:54:00'),
('81000002', 'Sneha Reddy', 'Operations Admin', 'Operations', 'sneha.admin@company.in', '9899001002', 'Female', 37, 'Bangalore', 'Karnataka', '2018-06-18', 13, 'MBA Operations', 'Morning', 'Admin', 'High', 110000, 'Active', 'ADM81000002@', 'profiles/81000002.jpg', '2026-05-27 07:54:00'),
('81000003', 'Arvind Sharma', 'IT Administrator', 'IT', 'arvind.admin@company.in', '9899001003', 'Male', 39, 'Pune', 'Maharashtra', '2016-08-21', 15, 'M.Tech CSE', 'Morning', 'Technical Admin', 'High', 125000, 'Active', 'ADM81000003@', 'profiles/81000003.jpg', '2026-05-27 07:54:00'),
('81000004', 'Priyanka Nair', 'Finance Admin', 'Finance', 'priyanka.admin@company.in', '9899001004', 'Female', 36, 'Chennai', 'Tamil Nadu', '2019-01-15', 12, 'MBA Finance', 'General', 'Finance Admin', 'Medium', 108000, 'Active', 'ADM81000004@', 'profiles/81000004.jpg', '2026-05-27 07:54:00'),
('81000005', 'Vamsi Krishna', 'Security Admin', 'Security', 'vamsi.admin@company.in', '9899001005', 'Male', 41, 'Hyderabad', 'Telangana', '2015-03-10', 17, 'B.Tech Cyber Security', 'Night', 'Security Admin', 'High', 130000, 'Active', 'ADM81000005@', 'profiles/81000005.jpg', '2026-05-27 07:54:00');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` varchar(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `marital_status` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `shift_timing` varchar(20) DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL,
  `work_mode` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `name`, `designation`, `department`, `salary`, `email`, `phone`, `gender`, `age`, `marital_status`, `city`, `state`, `shift_timing`, `date_of_joining`, `experience_years`, `qualification`, `blood_group`, `work_mode`, `status`) VALUES
('100001', 'Rahul Kumar', 'Developer', 'IT', 55000, 'rahul.kumar@company.in', '9876543201', 'Male', 26, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2023-04-12', 2, 'B.Tech CSE', 'B+', 'Hybrid', 'Active'),
('100002', 'Anjali Sharma', 'HR Executive', 'HR', 48000, 'anjali.sharma@company.in', '9876543202', 'Female', 28, 'Married', 'Hyderabad', 'Telangana', 'General', '2022-06-18', 4, 'MBA HR', 'A+', 'Office', 'Active'),
('100003', 'Varun Reddy', 'Manager', 'Operations', 85000, 'varun.reddy@company.in', '9876543203', 'Male', 35, 'Married', 'Hyderabad', 'Telangana', 'Morning', '2020-01-15', 10, 'MBA', 'O+', 'Office', 'Active'),
('100004', 'Kiran Rao', 'Team Lead', 'IT', 72000, 'kiran.rao@company.in', '9876543204', 'Male', 31, 'Married', 'Hyderabad', 'Telangana', 'Morning', '2021-03-22', 7, 'B.Tech IT', 'AB+', 'Hybrid', 'Active'),
('100005', 'Suresh Patel', 'Tester', 'QA', 45000, 'suresh.patel@company.in', '9876543205', 'Male', 27, 'Single', 'Hyderabad', 'Telangana', 'Night', '2023-08-10', 3, 'B.Sc Computers', 'B-', 'Hybrid', 'Active'),
('100006', 'Priya Nair', 'UI Designer', 'Design', 50000, 'priya.nair@company.in', '9876543206', 'Female', 25, 'Single', 'Bangalore', 'Karnataka', 'General', '2024-02-11', 2, 'B.Des', 'A+', 'WFH', 'Active'),
('100007', 'Arjun Singh', 'Backend Developer', 'IT', 62000, 'arjun.singh@company.in', '9876543207', 'Male', 29, 'Single', 'Bangalore', 'Karnataka', 'Morning', '2022-07-20', 5, 'B.Tech CSE', 'O+', 'Hybrid', 'Active'),
('100008', 'Sneha Verma', 'Recruiter', 'HR', 42000, 'sneha.verma@company.in', '9876543208', 'Female', 26, 'Single', 'Hyderabad', 'Telangana', 'General', '2023-05-15', 3, 'MBA HR', 'A-', 'Office', 'Active'),
('100009', 'Rohit Das', 'Data Analyst', 'Analytics', 68000, 'rohit.das@company.in', '9876543209', 'Male', 30, 'Married', 'Kolkata', 'West Bengal', 'Morning', '2021-11-18', 6, 'MCA', 'B+', 'Hybrid', 'Active'),
('100010', 'Meena Joshi', 'Finance Executive', 'Finance', 53000, 'meena.joshi@company.in', '9876543210', 'Female', 29, 'Married', 'Mumbai', 'Maharashtra', 'General', '2022-03-25', 5, 'MBA Finance', 'O-', 'Office', 'Active'),
('100011', 'Vikram Rao', 'Cloud Engineer', 'IT', 75000, 'vikram.rao@company.in', '9876543211', 'Male', 32, 'Married', 'Hyderabad', 'Telangana', 'Night', '2021-04-14', 8, 'B.Tech CSE', 'AB+', 'Hybrid', 'Active'),
('100012', 'Pooja Mehta', 'Business Analyst', 'Business', 65000, 'pooja.mehta@company.in', '9876543212', 'Female', 27, 'Single', 'Pune', 'Maharashtra', 'General', '2022-09-19', 4, 'MBA', 'A+', 'Office', 'Active'),
('100013', 'Ajay Kumar', 'System Admin', 'IT', 58000, 'ajay.kumar@company.in', '9876543213', 'Male', 33, 'Married', 'Hyderabad', 'Telangana', 'Night', '2020-10-01', 9, 'BCA', 'B+', 'Office', 'Active'),
('100014', 'Lavanya Reddy', 'Frontend Developer', 'IT', 60000, 'lavanya.reddy@company.in', '9876543214', 'Female', 24, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2024-01-05', 2, 'B.Tech IT', 'O+', 'Hybrid', 'Active'),
('100015', 'Naveen Gupta', 'DevOps Engineer', 'IT', 78000, 'naveen.gupta@company.in', '9876543215', 'Male', 31, 'Married', 'Bangalore', 'Karnataka', 'Night', '2021-08-28', 7, 'B.Tech CSE', 'A+', 'Office', 'Active'),
('100016', 'Kavya Sharma', 'QA Engineer', 'QA', 47000, 'kavya.sharma@company.in', '9876543216', 'Female', 25, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2023-06-17', 3, 'B.Sc IT', 'B-', 'Hybrid', 'Active'),
('100017', 'Manoj Verma', 'Network Engineer', 'IT', 64000, 'manoj.verma@company.in', '9876543217', 'Male', 34, 'Married', 'Delhi', 'Delhi', 'General', '2020-12-21', 10, 'B.Tech ECE', 'O+', 'Office', 'Active'),
('100018', 'Deepika Nair', 'Content Writer', 'Marketing', 40000, 'deepika.nair@company.in', '9876543218', 'Female', 26, 'Single', 'Bangalore', 'Karnataka', 'General', '2024-03-10', 2, 'MA English', 'A+', 'WFH', 'Active'),
('100019', 'Harish Yadav', 'Support Engineer', 'Support', 43000, 'harish.yadav@company.in', '9876543219', 'Male', 28, 'Single', 'Indore', 'Madhya Pradesh', 'Night', '2022-05-12', 4, 'Diploma CSE', 'O-', 'Hybrid', 'Active'),
('100020', 'Neha Kapoor', 'Marketing Executive', 'Marketing', 51000, 'neha.kapoor@company.in', '9876543220', 'Female', 30, 'Married', 'Delhi', 'Delhi', 'General', '2021-02-14', 6, 'MBA Marketing', 'B+', 'Office', 'Active'),
('110066', 'Rahul Kumar', 'Software Engineer', 'IT', 58000, 'rahulkumar1@company.in', '9876501001', 'Male', 26, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2023-02-14', 2, 'B.Tech CSE', 'B+', 'Hybrid', 'Active'),
('120034', 'Anjali Sharma', 'HR Executive', 'HR', 49000, 'anjalisharma1@company.in', '9876501002', 'Female', 29, 'Married', 'Bangalore', 'Karnataka', 'General', '2022-05-18', 5, 'MBA HR', 'A+', 'Office', 'Active'),
('130098', 'Varun Reddy', 'Team Lead', 'IT', 82000, 'varunreddy1@company.in', '9876501003', 'Male', 33, 'Married', 'Hyderabad', 'Telangana', 'Morning', '2020-11-09', 9, 'B.Tech IT', 'O+', 'Hybrid', 'Active'),
('140021', 'Sneha Patel', 'UI Designer', 'Design', 54000, 'snehapatel1@company.in', '9876501004', 'Female', 25, 'Single', 'Pune', 'Maharashtra', 'General', '2024-01-12', 2, 'B.Des', 'A-', 'WFH', 'Active'),
('150876', 'Kiran Rao', 'Backend Developer', 'IT', 67000, 'kiranrao1@company.in', '9876501005', 'Male', 28, 'Single', 'Chennai', 'Tamil Nadu', 'Night', '2022-08-25', 5, 'B.Tech CSE', 'B+', 'Hybrid', 'Active'),
('160455', 'Pooja Verma', 'Business Analyst', 'Business', 71000, 'poojaverma1@company.in', '9876501006', 'Female', 31, 'Married', 'Delhi', 'Delhi', 'Morning', '2021-03-14', 7, 'MBA', 'O+', 'Office', 'Active'),
('170032', 'Ajay Singh', 'DevOps Engineer', 'IT', 78000, 'ajaysingh1@company.in', '9876501007', 'Male', 30, 'Married', 'Bangalore', 'Karnataka', 'Night', '2021-07-21', 8, 'B.Tech CSE', 'AB+', 'Hybrid', 'Active'),
('180654', 'Neha Kapoor', 'Marketing Executive', 'Marketing', 52000, 'nehakapoor1@company.in', '9876501008', 'Female', 27, 'Single', 'Mumbai', 'Maharashtra', 'General', '2023-06-16', 4, 'MBA Marketing', 'B+', 'Office', 'Active'),
('190443', 'Rohit Das', 'Data Analyst', 'Analytics', 69000, 'rohitdas1@company.in', '9876501009', 'Male', 29, 'Single', 'Kolkata', 'West Bengal', 'Morning', '2022-04-11', 6, 'MCA', 'O-', 'Hybrid', 'Active'),
('200145', 'Meena Joshi', 'Finance Executive', 'Finance', 57000, 'meenajoshi1@company.in', '9876501010', 'Female', 32, 'Married', 'Ahmedabad', 'Gujarat', 'General', '2021-10-05', 8, 'MBA Finance', 'A+', 'Office', 'Active'),
('210764', 'Harish Yadav', 'Support Engineer', 'Support', 45000, 'harishyadav1@company.in', '9876501011', 'Male', 27, 'Single', 'Indore', 'Madhya Pradesh', 'Night', '2023-01-20', 3, 'Diploma CSE', 'B-', 'WFH', 'Active'),
('220398', 'Lavanya Reddy', 'Frontend Developer', 'IT', 61000, 'lavanyareddy1@company.in', '9876501012', 'Female', 24, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2024-02-08', 2, 'B.Tech IT', 'O+', 'Hybrid', 'Active'),
('230145', 'Naveen Gupta', 'Cloud Engineer', 'IT', 84000, 'naveengupta1@company.in', '9876501013', 'Male', 34, 'Married', 'Noida', 'Uttar Pradesh', 'Night', '2020-12-12', 10, 'B.Tech CSE', 'A+', 'Office', 'Active'),
('240882', 'Deepika Nair', 'Content Writer', 'Marketing', 43000, 'deepikanair1@company.in', '9876501014', 'Female', 26, 'Single', 'Kochi', 'Kerala', 'General', '2023-09-18', 3, 'MA English', 'B+', 'WFH', 'Active'),
('250614', 'Suresh Patel', 'QA Tester', 'QA', 50000, 'sureshpatel1@company.in', '9876501015', 'Male', 28, 'Single', 'Surat', 'Gujarat', 'Morning', '2022-11-01', 5, 'B.Sc Computers', 'AB+', 'Hybrid', 'Active'),
('260119', 'Kavya Sharma', 'Recruiter', 'HR', 46000, 'kavyasharma1@company.in', '9876501016', 'Female', 25, 'Single', 'Jaipur', 'Rajasthan', 'General', '2023-07-24', 3, 'MBA HR', 'O+', 'Office', 'Active'),
('270745', 'Vikram Rao', 'Project Manager', 'Operations', 96000, 'vikramrao1@company.in', '9876501017', 'Male', 38, 'Married', 'Hyderabad', 'Telangana', 'Morning', '2019-04-15', 14, 'MBA', 'B+', 'Office', 'Active'),
('280533', 'Priya Mehta', 'System Administrator', 'IT', 62000, 'priyamehta1@company.in', '9876501018', 'Female', 30, 'Married', 'Bhopal', 'Madhya Pradesh', 'Night', '2021-09-13', 7, 'BCA', 'A-', 'Hybrid', 'Active'),
('290874', 'Arjun Singh', 'Cyber Security Analyst', 'Security', 88000, 'arjunsingh1@company.in', '9876501019', 'Male', 31, 'Married', 'Delhi', 'Delhi', 'Night', '2020-06-22', 9, 'M.Tech Cyber Security', 'O+', 'Office', 'Active'),
('300421', 'Divya Rao', 'Operations Executive', 'Operations', 51000, 'divyarao1@company.in', '9876501020', 'Female', 28, 'Single', 'Visakhapatnam', 'Andhra Pradesh', 'General', '2022-12-19', 4, 'MBA', 'B+', 'Hybrid', 'Active'),
('310245', 'Mohit Jain', 'Database Administrator', 'IT', 76000, 'mohitjain1@company.in', '9876501021', 'Male', 35, 'Married', 'Pune', 'Maharashtra', 'Morning', '2020-08-18', 11, 'MCA', 'A+', 'Office', 'Active'),
('320654', 'Aishwarya Nair', 'Graphic Designer', 'Design', 47000, 'aishwaryanair1@company.in', '9876501022', 'Female', 24, 'Single', 'Thiruvananthapuram', 'Kerala', 'General', '2024-03-04', 2, 'BFA', 'O+', 'WFH', 'Active'),
('330145', 'Manoj Kumar', 'Network Engineer', 'IT', 65000, 'manojkumar1@company.in', '9876501023', 'Male', 33, 'Married', 'Lucknow', 'Uttar Pradesh', 'Night', '2021-05-17', 8, 'B.Tech ECE', 'B-', 'Hybrid', 'Active'),
('340789', 'Shreya Kapoor', 'Legal Advisor', 'Legal', 72000, 'shreyakapoor1@company.in', '9876501024', 'Female', 34, 'Married', 'Mumbai', 'Maharashtra', 'General', '2020-10-29', 9, 'LLB', 'AB+', 'Office', 'Active'),
('350236', 'Tarun Reddy', 'Mobile App Developer', 'IT', 70000, 'tarunreddy1@company.in', '9876501025', 'Male', 27, 'Single', 'Hyderabad', 'Telangana', 'Morning', '2022-02-28', 5, 'B.Tech CSE', 'O+', 'Hybrid', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `hr_data`
--

CREATE TABLE `hr_data` (
  `admin_id` varchar(6) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `experience_years` int(11) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `work_shift` varchar(30) DEFAULT NULL,
  `role_type` varchar(50) DEFAULT NULL,
  `access_level` varchar(30) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr_data`
--

INSERT INTO `hr_data` (`admin_id`, `full_name`, `designation`, `department`, `email`, `phone`, `gender`, `age`, `city`, `state`, `joining_date`, `experience_years`, `qualification`, `work_shift`, `role_type`, `access_level`, `salary`, `status`, `password`, `profile_photo`, `created_at`) VALUES
('51001', 'Rajesh Kumar', 'HR Admin', 'Administration', 'rajesh.kumar@company.in', '9887001001', 'Male', 40, 'Hyderabad', 'Telangana', '2018-04-12', 15, 'MBA HR', 'General', 'Super Admin', 'High', 95000, 'Active', 'ADM51001@', 'profiles/51001.jpg', '2026-05-27 07:52:41'),
('51002', 'Sneha Reddy', 'Operations Admin', 'Operations', 'sneha.reddy@company.in', '9887001002', 'Female', 36, 'Bangalore', 'Karnataka', '2019-06-18', 12, 'MBA Operations', 'Morning', 'Admin', 'High', 92000, 'Active', 'ADM51002@', 'profiles/51002.jpg', '2026-05-27 07:52:41'),
('51003', 'Arvind Sharma', 'IT Admin', 'IT', 'arvind.sharma@company.in', '9887001003', 'Male', 38, 'Pune', 'Maharashtra', '2017-08-21', 14, 'M.Tech CSE', 'Morning', 'System Admin', 'High', 105000, 'Active', 'ADM51003@', 'profiles/51003.jpg', '2026-05-27 07:52:41'),
('51004', 'Priyanka Nair', 'Finance Admin', 'Finance', 'priyanka.nair@company.in', '9887001004', 'Female', 35, 'Chennai', 'Tamil Nadu', '2020-01-15', 11, 'MBA Finance', 'General', 'Finance Admin', 'Medium', 98000, 'Active', 'ADM51004@', 'profiles/51004.jpg', '2026-05-27 07:52:41'),
('51005', 'Vamsi Krishna', 'Security Admin', 'Security', 'vamsi.krishna.admin@company.in', '9887001005', 'Male', 41, 'Hyderabad', 'Telangana', '2016-03-10', 17, 'B.Tech Cyber Security', 'Night', 'Security Admin', 'High', 110000, 'Active', 'ADM51005@', 'profiles/51005.jpg', '2026-05-27 07:52:41'),
('51006', 'Keerthana Rao', 'HR Manager', 'HR', 'keerthana.rao@company.in', '9887001006', 'Female', 34, 'Visakhapatnam', 'Andhra Pradesh', '2019-09-14', 10, 'MBA HR', 'General', 'HR Admin', 'Medium', 97000, 'Active', 'ADM51006@', 'profiles/51006.jpg', '2026-05-27 07:52:41'),
('51007', 'Manoj Verma', 'System Administrator', 'IT', 'manoj.verma.admin@company.in', '9887001007', 'Male', 39, 'Delhi', 'Delhi', '2018-07-28', 13, 'MCA', 'Morning', 'Technical Admin', 'High', 102000, 'Active', 'ADM51007@', 'profiles/51007.jpg', '2026-05-27 07:52:41'),
('51008', 'Bhavana Kapoor', 'Admin Executive', 'Administration', 'bhavana.kapoor.admin@company.in', '9887001008', 'Female', 33, 'Mumbai', 'Maharashtra', '2021-02-11', 9, 'MBA', 'General', 'Admin Executive', 'Medium', 88000, 'Active', 'ADM51008@', 'profiles/51008.jpg', '2026-05-27 07:52:41'),
('51009', 'Rohit Mehta', 'Database Admin', 'IT', 'rohit.mehta@company.in', '9887001009', 'Male', 42, 'Noida', 'Uttar Pradesh', '2015-11-05', 18, 'M.Tech IT', 'Night', 'Database Admin', 'High', 115000, 'Active', 'ADM51009@', 'profiles/51009.jpg', '2026-05-27 07:52:41'),
('51010', 'Lavanya Sharma', 'Corporate Admin', 'Administration', 'lavanya.sharma@company.in', '9887001010', 'Female', 37, 'Bangalore', 'Karnataka', '2019-05-20', 12, 'MBA', 'General', 'Corporate Admin', 'Medium', 93000, 'Active', 'ADM51010@', 'profiles/51010.jpg', '2026-05-27 07:52:41');

-- --------------------------------------------------------

--
-- Table structure for table `login_credentials`
--

CREATE TABLE `login_credentials` (
  `employee_id` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_credentials`
--

INSERT INTO `login_credentials` (`employee_id`, `password`) VALUES
('100001', 'EMP100001@'),
('100002', 'EMP100002@'),
('100003', 'EMP100003@'),
('100004', 'EMP100004@'),
('100005', 'EMP100005@'),
('100006', 'EMP100006@'),
('100007', 'EMP100007@'),
('100008', 'EMP100008@'),
('100009', 'EMP100009@'),
('100010', 'EMP100010@'),
('100011', 'EMP100011@'),
('100012', 'EMP100012@'),
('100013', 'EMP100013@'),
('100014', 'EMP100014@'),
('100015', 'EMP100015@'),
('100016', 'EMP100016@'),
('100017', 'EMP100017@'),
('100018', 'EMP100018@'),
('100019', 'EMP100019@'),
('100020', 'EMP100020@'),
('110066', 'EMP110066@'),
('120034', 'EMP120034@'),
('130098', 'EMP130098@'),
('140021', 'EMP140021@'),
('150876', 'EMP150876@'),
('160455', 'EMP160455@'),
('170032', 'EMP170032@'),
('180654', 'EMP180654@'),
('190443', 'EMP190443@'),
('200145', 'EMP200145@'),
('210764', 'EMP210764@'),
('220398', 'EMP220398@'),
('230145', 'EMP230145@'),
('240882', 'EMP240882@'),
('250614', 'EMP250614@'),
('260119', 'EMP260119@'),
('270745', 'EMP270745@'),
('280533', 'EMP280533@'),
('290874', 'EMP290874@'),
('300421', 'EMP300421@'),
('310245', 'EMP310245@'),
('320654', 'EMP320654@'),
('330145', 'EMP330145@'),
('340789', 'EMP340789@'),
('350236', 'EMP350236@'),
('360912', 'EMP360912@'),
('371245', 'EMP371245@'),
('389654', 'EMP389654@'),
('401276', 'EMP401276@'),
('420987', 'EMP420987@'),
('431098', 'EMP431098@'),
('442310', 'EMP442310@'),
('453901', 'EMP453901@'),
('464782', 'EMP464782@'),
('475620', 'EMP475620@'),
('486532', 'EMP486532@'),
('497861', 'EMP497861@'),
('508214', 'EMP508214@'),
('51001', 'ADM51001@'),
('51002', 'ADM51002@'),
('51003', 'ADM51003@'),
('51004', 'ADM51004@'),
('51005', 'ADM51005@'),
('51006', 'ADM51006@'),
('51007', 'ADM51007@'),
('51008', 'ADM51008@'),
('51009', 'ADM51009@'),
('51010', 'ADM51010@'),
('519743', 'EMP519743@'),
('520186', 'EMP520186@'),
('531902', 'EMP531902@'),
('542671', 'EMP542671@'),
('553098', 'EMP553098@'),
('564720', 'EMP564720@'),
('575310', 'EMP575310@'),
('586421', 'EMP586421@'),
('597302', 'EMP597302@'),
('608715', 'EMP608715@'),
('619843', 'EMP619843@'),
('620954', 'EMP620954@'),
('631278', 'EMP631278@'),
('642590', 'EMP642590@'),
('653741', 'EMP653741@'),
('664182', 'EMP664182@'),
('675903', 'EMP675903@'),
('81000001', 'ADM81000001@'),
('81000002', 'ADM81000002@'),
('81000003', 'ADM81000003@'),
('81000004', 'ADM81000004@'),
('81000005', 'ADM81000005@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hr_data`
--
ALTER TABLE `hr_data`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `login_credentials`
--
ALTER TABLE `login_credentials`
  ADD PRIMARY KEY (`employee_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `login_credentials` (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
