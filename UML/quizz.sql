-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 09:53 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answerId` int(11) NOT NULL,
  `answerContent` varchar(255) DEFAULT NULL,
  `isCorrect` int(11) DEFAULT 0,
  `questionId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answerId`, `answerContent`, `isCorrect`, `questionId`) VALUES
(1, 'Scalability', 1, 1),
(2, 'Redundancy', 0, 1),
(3, 'Latency', 0, 1),
(4, 'Accessibility', 0, 1),
(5, 'AWS Lambda', 1, 2),
(6, 'AWS EC2', 0, 2),
(7, 'AWS S3', 0, 2),
(8, 'AWS RDS', 0, 2),
(9, 'Multi-threading', 0, 3),
(10, 'Public Cloud', 1, 3),
(11, 'RAID configuration', 0, 3),
(12, 'Code repository', 0, 3),
(13, 'Higher initial setup costs', 0, 4),
(14, 'Reduced scalability', 0, 4),
(15, 'Pay-as-you-go pricing', 1, 4),
(16, 'Limited accessibility', 0, 4),
(17, 'Multi-threading', 0, 5),
(18, 'Multi-cloud', 1, 5),
(19, 'Redundancy', 0, 5),
(20, 'Interoperability', 0, 5),
(21, 'Internet as a Service', 0, 6),
(22, 'Infrastructure as a Service', 1, 6),
(23, 'Identity and Access Service', 0, 6),
(24, 'Instance as a Service', 0, 6),
(25, 'AWS Route 53', 1, 7),
(26, 'AWS CloudFront', 0, 7),
(27, 'AWS Direct Connect', 0, 7),
(28, 'AWS VPC', 0, 7),
(29, 'It eliminates the need for virtual machines', 1, 8),
(30, 'It doesn’t require an internet connection', 0, 8),
(31, 'It doesn’t involve any security protocols', 0, 8),
(32, 'It completely removes the need for databases', 0, 8),
(33, 'To manage AWS budgets', 0, 9),
(34, 'To create IAM users', 0, 9),
(35, 'To manage multiple AWS accounts', 1, 9),
(36, 'To provide global network security', 0, 9),
(37, 'Block storage', 0, 10),
(38, 'File storage', 0, 10),
(39, 'Object storage', 1, 10),
(40, 'Network-attached storage', 0, 10),
(41, 'AWS manages all aspects of security', 0, 11),
(42, 'Customers are responsible for all aspects of security', 0, 11),
(43, 'AWS and customers share responsibility for security', 1, 11),
(44, 'Customers have no responsibility for security', 0, 11),
(45, 'Key Management Service', 1, 12),
(46, 'Knowledge Management System', 0, 12),
(47, 'Key Migration System', 0, 12),
(48, 'Kernel Monitoring Service', 0, 12),
(49, 'Share IAM credentials with trusted colleagues', 0, 13),
(50, 'Use the root account for daily operations', 0, 13),
(51, 'Enable multi-factor authentication (MFA)', 1, 13),
(52, 'Store access keys in public repositories', 0, 13),
(53, 'Automated data backup', 0, 14),
(54, 'Auditing and monitoring AWS account activity', 1, 14),
(55, 'Load balancing', 0, 14),
(56, 'File storage', 0, 14),
(57, 'AWS Inspector', 0, 15),
(58, 'AWS GuardDuty', 0, 15),
(59, 'AWS Config', 0, 15),
(60, 'AWS WAF', 1, 15),
(61, 'Load balancing', 0, 16),
(62, 'Firewall configuration', 1, 16),
(63, 'Managing IAM users', 0, 16),
(64, 'File encryption', 0, 16),
(65, 'AWS Shield', 0, 17),
(66, 'AWS Trusted Advisor', 1, 17),
(67, 'AWS Key Management Service', 0, 17),
(68, 'AWS CloudFormation', 0, 17),
(69, 'Encrypting data at rest', 0, 18),
(70, 'Encrypting data while in use', 0, 18),
(71, 'Encrypting data during transmission', 1, 18),
(72, 'Decrypting data on arrival', 0, 18),
(73, 'AWS IAM', 0, 19),
(74, 'AWS CloudFront', 0, 19),
(75, 'AWS VPC', 1, 19),
(76, 'AWS Route 53', 0, 19),
(77, 'Integrity', 1, 20),
(78, 'Confidentiality', 0, 20),
(79, 'Availability', 0, 20),
(80, 'Non-repudiation', 0, 20),
(81, 'AWS CloudFront', 1, 21),
(82, 'AWS S3', 0, 21),
(83, 'AWS Route 53', 0, 21),
(84, 'AWS Direct Connect', 0, 21),
(85, 'Relational database service', 1, 22),
(86, 'NoSQL database service', 0, 22),
(87, 'Data warehousing service', 0, 22),
(88, 'In-memory database service', 0, 22),
(89, 'Amazon Kinesis', 1, 23),
(90, 'AWS Glue', 0, 23),
(91, 'AWS Data Pipeline', 0, 23),
(92, 'Amazon Redshift', 0, 23),
(93, 'AWS EFS', 0, 24),
(94, 'AWS S3', 0, 24),
(95, 'AWS EBS', 1, 24),
(96, 'AWS Glacier', 0, 24),
(97, 'AWS ECS', 1, 25),
(98, 'AWS Lambda', 0, 25),
(99, 'AWS ECR', 0, 25),
(100, 'AWS Elastic Beanstalk', 0, 25),
(101, 'Managing cloud resources using code', 0, 26),
(102, 'Deploying and scaling web applications', 1, 26),
(103, 'Real-time analytics', 0, 26),
(104, 'Running serverless functions', 0, 26),
(105, 'AWS VPN', 0, 27),
(106, 'AWS Direct Connect', 1, 27),
(107, 'AWS Transit Gateway', 0, 27),
(108, 'AWS Storage Gateway', 0, 27),
(109, 'Securely store and retrieve data', 0, 28),
(110, 'Send notifications to subscribed endpoints or clients', 1, 28),
(111, 'Analyze and visualize data', 0, 28),
(112, 'Manage access to AWS services', 0, 28),
(113, 'Amazon Redshift', 1, 29),
(114, 'AWS Glue', 0, 29),
(115, 'Amazon DynamoDB', 0, 29),
(116, 'AWS Data Pipeline', 0, 29),
(117, 'Provision and manage AWS infrastructure as code', 1, 30),
(118, 'Secure data in AWS S3 buckets', 0, 30),
(119, 'Monitor and analyze AWS resources', 0, 30),
(120, 'Manage DNS and routing in AWS', 0, 30),
(121, 'Pay-per-user', 0, 31),
(122, 'Fixed monthly fee', 1, 31),
(123, 'Pay-per-click', 0, 31),
(124, 'Pay-per-download', 0, 31),
(125, 'Paying for only what you use', 0, 32),
(126, 'Flexibility in changing instance types', 0, 32),
(127, 'No upfront payment required', 0, 32),
(128, 'Lower pricing compared to on-demand instances', 1, 32),
(129, 'Automatically optimize costs', 0, 33),
(130, 'Forecast future AWS usage and costs', 1, 33),
(131, 'Manage user permissions', 0, 33),
(132, 'Monitor network traffic', 0, 33),
(133, 'Access to unlimited resources', 0, 34),
(134, 'Free access to all AWS services forever', 0, 34),
(135, 'Limited usage of AWS services for free for a certain period', 1, 34),
(136, 'Discounted pricing for selected services', 0, 34),
(137, 'Standard, Premium, Advanced', 1, 35),
(138, 'Basic, Intermediate, Advanced', 0, 35),
(139, 'Silver, Gold, Platinum', 0, 35),
(140, 'Starter, Pro, Enterprise', 0, 35),
(141, 'Based on the distance between services', 0, 36),
(142, 'Not charged at all', 1, 36),
(143, 'Based on the data size transferred', 0, 36),
(144, 'Based on the number of API calls', 0, 36),
(145, 'Automatically optimize costs', 0, 37),
(146, 'Set custom cost and usage budgets', 1, 37),
(147, 'Forecast future AWS usage and costs', 0, 37),
(148, 'Monitor network traffic', 0, 37),
(149, 'AWS CloudTrail', 0, 38),
(150, 'AWS Trusted Advisor', 0, 38),
(151, 'AWS Billing and Cost Management', 1, 38),
(152, 'AWS Key Management Service', 0, 38),
(153, 'Based on the number of objects stored', 0, 39),
(154, 'Based on the storage size and data transfer out', 1, 39),
(155, 'Fixed monthly fee', 0, 39),
(156, 'No charges for S3 storage', 0, 39),
(157, 'Monitor resource utilization', 0, 40),
(158, 'Report security vulnerabilities', 0, 40),
(159, 'Track AWS service availability and performance', 1, 40),
(160, 'Manage IAM permissions', 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionId` int(11) NOT NULL,
  `questionContent` varchar(255) DEFAULT NULL,
  `themeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionId`, `questionContent`, `themeId`) VALUES
(1, 'What is the fundamental characteristic of cloud computing that allows users to increase or decrease resources as needed?', 1),
(2, 'What is the AWS service that allows users to run code without provisioning or managing servers?', 1),
(3, 'Which of the following is an example of a cloud deployment model?', 1),
(4, 'What is the primary advantage of using cloud computing over traditional on-premises infrastructure?', 1),
(5, 'What term refers to the practice of using multiple cloud service providers for different tasks?', 1),
(6, 'In cloud computing, what does the term \"IaaS\" stand for?', 1),
(7, 'Which AWS service is used to route traffic to different regions based on defined rules?', 1),
(8, 'What is a characteristic of a \"serverless\" architecture?', 1),
(9, 'What is the purpose of AWS Organizations?', 1),
(10, 'What type of storage service is Amazon S3?', 1),
(11, 'What is a key principle of the shared responsibility model in AWS?', 2),
(12, 'What is the purpose of AWS KMS?', 2),
(13, 'Which of the following is a best practice for securing an AWS account?', 2),
(14, 'What is the purpose of AWS CloudTrail?', 2),
(15, 'Which service can be used to protect against unauthorized access to AWS resources?', 2),
(16, 'What is the primary purpose of AWS Security Groups?', 2),
(17, 'Which AWS service can help identify security vulnerabilities in an infrastructure?', 2),
(18, 'What does the term \"encryption in transit\" refer to?', 2),
(19, 'What AWS service helps control network access to AWS resources?', 2),
(20, 'Which security concept ensures that data is accurate and reliable?', 2),
(21, 'Which AWS service can be used to distribute content globally with low latency?', 3),
(22, 'What type of database service does Amazon RDS provide?', 3),
(23, 'What AWS service can be used for real-time streaming of data?', 3),
(24, 'Which AWS service provides a fully managed file storage for use with EC2 instances?', 3),
(25, 'Which AWS service is used for deploying and managing containerized applications?', 3),
(26, 'What is the primary purpose of AWS Elastic Beanstalk?', 3),
(27, 'Which AWS service allows you to set up private connections between AWS and your data center?', 3),
(28, 'What is the purpose of Amazon SNS (Simple Notification Service)?', 3),
(29, 'Which AWS service can be used for data warehousing and analytics?', 3),
(30, 'What is the purpose of AWS CloudFormation?', 3),
(31, 'What is an example of an AWS pricing model?', 4),
(32, 'What is an advantage of using AWS Reserved Instances?', 4),
(33, 'What is the purpose of AWS Cost Explorer?', 4),
(34, 'What is an advantage of using AWS Free Tier?', 4),
(35, 'What is an example of an AWS support plan?', 4),
(36, 'How is data transfer between different AWS services within the same region charged?', 4),
(37, 'What is the purpose of AWS Budgets?', 4),
(38, 'What is an example of an AWS billing feature that helps control costs?', 4),
(39, 'How does AWS calculate charges for Amazon S3 storage?', 4),
(40, 'What is the purpose of AWS Service Health Dashboard?', 4);

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `themeId` int(11) NOT NULL,
  `themeName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`themeId`, `themeName`) VALUES
(1, 'Cloud Concepts'),
(2, 'Security and Compliance'),
(3, 'Cloud Technology and Services'),
(4, 'Billing, Pricing, and Support');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answerId`),
  ADD KEY `fk_questions` (`questionId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionId`),
  ADD KEY `fk_themes` (`themeId`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`themeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `themeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_questions` FOREIGN KEY (`questionId`) REFERENCES `questions` (`questionId`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_themes` FOREIGN KEY (`themeId`) REFERENCES `themes` (`themeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
