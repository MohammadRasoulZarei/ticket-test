-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2023 at 06:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `token`
--

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Pr_K` varchar(256) NOT NULL,
  `pb_k` varchar(256) NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_plus` int(10) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`id`, `name`, `Pr_K`, `pb_k`, `amount`, `amount_plus`, `date`) VALUES
(1, 'C-1', 'a7712c0e90c42889d01b9a23598dd51590dc85cfca08714178b130161494c42f6fdf5499784d358a0df2e601da61194ceafbc32403da086e474603297eb0c58coWIuF+M+QZ4ia6vO5jvRgxXslbwVKkEahjgiQoiy5PdFoiN1saf2Y1vFTVODTLYd6kOcF+okSHKzkS/RtamUq7toiwtOwees69vOXZH2lNDFBLH+6DnzB1Beamue4u3a', 'b895', 1952, 0, '1678878128'),
(2, 'C-2', '68fb381cfd9e71915645179ab87a74e0ee007b40fb6e648f0bb7ae425e1aebc024cf3a34366fb4374f87de512ec69c2e83abba8ecde6b0ed66f1d3deb56bb351OS/3mDM0kv2kXeoDr+ymPVB7wxQUa6cc3lt8WgsePE8MpdvG/eGOBJRSlykZTcyQjN0FnqAjmTCgZsCpF4Ae8xWwj8rcVX22JMl4O6+yoeKs24a5W3CGL0b6uGYRdUtt', 'f23b', 1327, 0, '1681680848'),
(3, 'M-1', '8f4ae9526eeb3c3f052d408dca32f8c71c277962b5d449ca42b5d507b57ba6e14f340cf37726630b12d3a522327deaee4d0bb7a894799fd338ca60d6585726192QxkwWngSFVK99QcaFTafzyy91PJcufdLDvgHvzKmm2cUJdkEkTE/Tw77Yop4KpzaR6N4r8f4i5IMFZV/x/ResIYpFe0SbIhua4uP84FLKM0GmVOHCoW5AjIVVbeAY8U', 'b496', 1558, 0, '1684560644'),
(4, 'M-2', '118c34761f04087c77860815db6df621b231efc56fbee6411e6e54fee8564000480f616ef8c948a0412c75ba8e7d25b9b10a93809e58b455f4fc1ff958c26803AWzfl2hUTF9oBx2JNadD/JfcCBG5KjL6XLqXGLOuz4dcf/nRS5wehdhg4YVEtx5SyDkmZtJTTv2nlv539n7aDIpMNhjJcYEJNR4VnrHCPhIbGPO3wjNJridojjiABvnD', '1576', 1808, 1344, '1687517797'),
(5, 'M-3', '5d6bb66de7fe71caae128b4b162249e10339ab3b8c5c15938d400f4bea819036b876b63ac7d22cbc44eed21281f21023950d03add188546c0493370f60eb4befuuZ551AVA6i5XBesx3rWhKofQIFHN9IvxNF5WWVdMKU0wmxHWXmnd/9HHrL6QXJHmfhj1c8Vz45coYwejx+o2Q5zPGHJsMwbXUFGFCDxCixQTsu2b81A8/0RboD6d3kL', '3dbc', 2354, 0, '1692947899'),
(6, 'C-3', '55a1dcd8dd79eb99b12754806f6cb03658f8d5ea3dcc78f26694a89e7b197472cc247e11be5f7cfcb8523885b0e54a17ef5a61c6297ee961950d379fd5e7ca11UzPDmVaompUPVZU5aGgwFAW8Fm1eCsW2UKOsCmQiXPlwjeyBglbvh6vShNcxnvEJ21HzjooOpdYoGjW3Bbbg5RZ/3BUK8CDCsizb2a/vX3ro/+7ayJ5I7tsu591qxxN2', '3c4a', 2277, 0, '1690387118'),
(7, 'C-4', '184371f68fb2f52b96e08fb33273ff7c6e5d9b41a569c6e7f65bd49716fae39a0ce13fb643e3acfa2545306961b22acdb7c47524c8f69af8371815c35d1cf92dcKX8iPFZA8o2ST5SKrqHCE4glXtlN7RlJIMCjvUb8gIaf+SQdTRebvq25JzvAdExA7geoJOuPnax3i3Qjl1APH8dgXStpWGiz1YmEyJtu6DQu06LvvO5B8zx3Q4rjCTM', '8EA6', 2766, 0, '1695713595'),
(8, '<strong>C-5</strong>', '90823b6aae9d08f693302258787232928b0d54b100955c7020d93394c31d03c1e3c05e49462085535ab27b7d4d7b8da52816af04a893f74cab50b73fcb4c3dbcEsfP3ozgemOLKwPMFfkJBsmRpzrz8Cher1Mw5g6JMBb7qiMoG1g0JDBD85VpTMxpH0X9SuQpS591cU2RcCJPcqCtklXAErq49/Dci+Kg2k5S75Z3wLyT41de0UWCTI63', 'd878', 3353, 0, '1698349364'),
(12, 'M-4', 'd257a447bd62a23bbab0c4deb5ff962e7208a991d12b7b22170f91ac6fba7187b295b7b5bded396f3fe237f2c0893a4af2fa9ab08f5fdbb9807caae3babbb1c78WTRKm9S0DG/Jlu2G4ftvPuU5/8k+B8rGgIFGwgMz2cBGDpLQJg9+OkWtrc8ywMjfBARNzrhigzz4eAE9QdgdTJGVMQ1+zGg/nXlwv7Il5Q2TqsCOPKzjFWHn9zrwE2j', '5844', 3535, 0, '1700891761'),
(13, 'M-5', '96f2563d5290082066916c952a4c2ae26bdfc7a9f32e17be8303bf5f179263488ea7df322dedb91350accf439c1c69dbb3f1a27b94a1849632f0fd7cbf8aa8858seKXem4m9hAGRDGZU3+q1Z7/ZlmTJhcbTZIGhzgYbUEpez/TRP9aNjl01xEHRPGqb1zmNjcTr6BzrhFneVmUscqFQssj8hkKh6okF4ULOJqtwX9i5F3W4nUglBrSCJr', 'F1F7', 1494, 1542, '1674033139'),
(15, 'account', '829d39ffd81c118000ff1f54eb3e098645397494a418f2a481b5d16186d807f44a9a4dcb165def1be573d9a95fd0f0d3146c970df7392a399a8ee3fbf6a7847f1cbt8dP1QdJC6Qb1TO2DFjBgT533/OQ9xMia5Dkm/lvas5eX9KoKYUbZIcI4Ixtqx3JGw2xe3e2GSYHn+HUhIrivnNz4W8jnqLpDtyB5lGK5+7I/LRGHg4Aa2yxqZ/Vk', '4c48', 4672, 0, '1703784417');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;