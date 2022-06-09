
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `petcare` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  `penyakit` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `petcare` (`id`, `nama`, `gambar`, `penyakit`) VALUES
(1, 'qwe', 'gojo.jpg', 'katarak');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'qwe', 'qweqweqwe');


ALTER TABLE `petcare`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `petcare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

