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
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (User_id));

CREATE TABLE Windows11_Characteristics (
    id INT PRIMARY KEY AUTO_INCREMENT,
    requirement_type VARCHAR(50),
    processor VARCHAR(255),
    ram VARCHAR(50),
    storage VARCHAR(255),
    firmware VARCHAR(255),
    tpm VARCHAR(50),
    graphics_card VARCHAR(255),
    display VARCHAR(255),
    internet_connection VARCHAR(255),
    additional_features TEXT
);

INSERT INTO Windows11_Characteristics (requirement_type, processor, ram, storage, firmware, tpm, graphics_card, display, internet_connection, additional_features)
VALUES
    ('Минимальные', '1 ГГц или быстрее с 2 ядрами', '4 ГБ', '64 ГБ или больше', 'UEFI, поддержка Secure Boot', 'TPM 2.0', 'DirectX 12, WDDM 2.0', 'HD (720p) или выше', 'Требуется для обновлений и загрузки некоторых функций', 'Новый интерфейс, поддержка приложений Android, улучшенные функции безопасности'),
    ('Рекомендуемые', 'Современный многоядерный процессор', '8 ГБ', 'SSD', 'UEFI, поддержка Secure Boot', 'TPM 2.0', 'DirectX 12, поддержка HDR', '1920x1080 или выше', 'Требуется для обновлений и загрузки некоторых функций', 'Поддержка DirectStorage и Auto HDR для улучшения игрового опыта');

CREATE TABLE Linux_Characteristics (
    id INT PRIMARY KEY AUTO_INCREMENT,
    distribution VARCHAR(50),
    requirement_type VARCHAR(50),
    processor VARCHAR(255),
    ram VARCHAR(50),
    storage VARCHAR(255),
    graphics_card VARCHAR(255),
    display VARCHAR(255),
    internet_connection VARCHAR(255),
    additional_features TEXT
);

INSERT INTO Linux_Characteristics (distribution, requirement_type, processor, ram, storage, graphics_card, display, internet_connection, additional_features)
VALUES
    ('Linux Mint', 'Минимальные', '1 ГГц или быстрее', '2 ГБ', '15 ГБ свободного места', 'Совместимая с OpenGL', '1024x768 или выше', 'Необязательно', 'Легкий и удобный интерфейс, поддержка мультимедиа'),
    ('Linux Mint', 'Рекомендуемые', '2 ГГц или быстрее', '4 ГБ', '20 ГБ свободного места', 'Совместимая с OpenGL', '1366x768 или выше', 'Необязательно', 'Поддержка современных приложений и игр'),
    ('Ubuntu', 'Минимальные', '2 ГГц двухъядерный процессор', '2 ГБ', '25 ГБ свободного места', 'Совместимая с OpenGL', '1024x768 или выше', 'Необязательно', 'Поддержка Snap-пакетов, активное сообщество'),
    ('Ubuntu', 'Рекомендуемые', '2 ГГц четырехъядерный процессор', '4 ГБ', '25 ГБ свободного места', 'Совместимая с OpenGL', '1366x768 или выше', 'Необязательно', 'Поддержка современных приложений и игр, улучшенная безопасность');

