create database if not exists distribution;
set names utf8;
use distribution;

CREATE TABLE distro (
    Distro_id INT AUTO_INCREMENT,
    Distro_name VARCHAR(15) NOT NULL,
    Distro_link TEXT NOT NULL,
    PRIMARY KEY (Distro_id));

INSERT INTO distro (Distro_name, Distro_link) VALUES
    ('Windows11', 'https://www.microsoft.com/ru-ru/software-download/windows11'),
    ('Ubuntu', 'https://ubuntu.com/download/desktop'),
    ('Arch', 'https://archlinux.org/download/'),
    ('Mint', 'https://www.linuxmint.com/download.php'),
    ('Debian', 'https://www.debian.org/'),
    ('Fedora', 'https://fedoraproject.org/workstation/'),
    ('Astra', 'https://astralinux.ru/os/'),
    ('KDE NEON', 'https://neon.kde.org/download'),
    ('Zorin OS', 'https://zorin.com/os/download/'),
    ('Manjaro', 'https://manjaro.org/products/download/x86'),
    ('Kali', 'https://www.kali.org/get-kali/#kali-platforms');

CREATE TABLE osvs (
    id INT AUTO_INCREMENT,
    characteristic VARCHAR(255),
    windows VARCHAR(255),
    macos VARCHAR(255),
    linux VARCHAR(255),
    PRIMARY KEY (id));

INSERT INTO osvs (characteristic, windows, macos, linux) VALUES
    ('Операционные системы','Windows','Mac OS','Linux'),
    ('Разработчик', 'Microsoft', 'Apple', 'Сообщество разработчиков'),
    ('Лицензия', 'Проприетарная', 'Проприетарная', 'Открытая (разные дистрибутивы)'),
    ('Пользовательский интерфейс', 'Графический интерфейс (GUI)', 'Графический интерфейс (GUI)', 'Разнообразные интерфейсы (GUI/CLI)'),
    ('Поддержка программ', 'Широкая поддержка приложений', 'Поддержка приложений Apple', 'Ограниченная поддержка, но много открытых приложений'),
    ('Безопасность', 'Уязвим к вирусам и malware', 'Более безопасен, но не идеален', 'Высокий уровень безопасности'),
    ('Настраиваемость', 'Ограниченная', 'Ограниченная', 'Высокая'),
    ('Поддержка игр', 'Широкая поддержка', 'Ограниченная', 'Ограниченная, но растет'),
    ('Производительность', 'Зависит от конфигурации', 'Оптимизирована для Apple-аппаратуры', 'Зависит от дистрибутива и конфигурации'),
    ('Обновления', 'Регулярные, иногда проблемные', 'Регулярные и стабильные', 'Зависит от дистрибутива'),
    ('Поддержка оборудования', 'Широкая поддержка', 'Ограничена аппаратурой Apple', 'Широкая поддержка, но зависит от дистрибутива');

CREATE TABLE populos (
    osid INT AUTO_INCREMENT,
    name VARCHAR(20),
    uses float,
    PRIMARY KEY (osid));

INSERT INTO populos (name, uses) VALUES
    ('Windows', 73.41),
    ('MAC OS', 15.49),
    ('Other', 4.66),
    ('Linux', 4.31),
    ('Chrome OS', 2.12 );

CREATE TABLE userdata (
    User_id INT AUTO_INCREMENT,
    Username VARCHAR(20) NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(20) NOT NULL,
    PRIMARY KEY (User_id));

INSERT INTO userdata (Username, email, password) VALUES
    ('hello', 'hi@email.ru', '13579a');