CREATE DATABASE barkomatic;

-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_detail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ship_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `ship_logo` LONGBLOB NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(25) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_staff_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_staff_detail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `ship_reside` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_staff_account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_staff_account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(25) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_staff_reset_password`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_staff_reset_password` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `token` VARCHAR(255) NULL,
  `token_expire` TIMESTAMP NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_passenger_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_passenger_detail` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(25) NOT NULL,
  `lastname` VARCHAR(25) NOT NULL,
  `gender` VARCHAR(15) NOT NULL,
  `dob` DATE NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_belong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_belong` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ship` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_has_accomodation_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_has_accomodation_type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `accomodation_name` VARCHAR(45) NOT NULL,
  `seat_type` VARCHAR(20) NOT NULL,
  `aircon` VARCHAR(20) NOT NULL,
  `price` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_passenger_reservation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_passenger_reservation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `reservation_number` VARCHAR(7) NOT NULL,
  `ship_name` VARCHAR(45) NOT NULL,
  `passenger_name` VARCHAR(45) NOT NULL,
  `location_from` VARCHAR(75) NOT NULL,
  `location_to` VARCHAR(75) NOT NULL,
  `depart_date` DATE NOT NULL,
  `depart_time` VARCHAR(15) NOT NULL,
  `accomodation` VARCHAR(45) NOT NULL,
  `reservation_date` DATE NOT NULL,
  `expiration` DATE NOT NULL,
  `status` VARCHAR(15) NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_passenger_account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_passenger_account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(25) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_accomodation_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_accomodation_type` (
  `id` INT NOT NULL,
  `ship_accomodation_name` VARCHAR(50) NULL,
  `seat_type` VARCHAR(45) NULL,
  `aircon` VARCHAR(45) NULL,
  `price` FLOAT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_port`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_port` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `location_from` VARCHAR(75) NOT NULL,
  `port_from` VARCHAR(75) NOT NULL,
  `location_to` VARCHAR(75) NOT NULL,
  `port_to` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_schedule`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_schedule` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `depart_date` DATE NOT NULL,
  `depart_time` VARCHAR(15) NOT NULL,
  `location_from` VARCHAR(75) NOT NULL,
  `port_from` VARCHAR(75) NOT NULL,
  `location_to` VARCHAR(75) NOT NULL,
  `port_to` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_all_ship_port_location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_all_ship_port_location` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `location_from` VARCHAR(75) NOT NULL,
  `location_to` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_passenger_reset_password`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_passenger_reset_password` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `token` VARCHAR(255) NULL,
  `token_expire` TIMESTAMP NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `barkomatic`.`tbl_ship_reset_password`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `barkomatic`.`tbl_ship_reset_password` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `token` VARCHAR(255) NULL,
  `token_expire` TIMESTAMP NULL,
  PRIMARY KEY (`id`));

