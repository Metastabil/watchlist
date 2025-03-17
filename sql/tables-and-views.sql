CREATE TABLE users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    administrator BOOLEAN DEFAULT FALSE,
    deleted BOOLEAN DEFAULT FALSE,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE types (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    deleted BOOLEAN DEFAULT FALSE,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE platforms (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    deleted BOOLEAN DEFAULT FALSE,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE broadcasts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    rejected BOOLEAN DEFAULT FALSE,
    user_id INT UNSIGNED NOT NULL,
    type_id INT UNSIGNED NOT NULL,
    platform_id INT UNSIGNED NOT NULL,
    deleted BOOLEAN DEFAULT FALSE,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE VIEW v_broadcasts AS
    SELECT broadcasts.id,
           broadcasts.name,
           broadcasts.description,
           broadcasts.rejected,
           broadcasts.user_id,
           broadcasts.type_id,
           broadcasts.platform_id,
           broadcasts.deleted,
           broadcasts.created,
           broadcasts.updated,
           types.name AS type,
           platforms.name AS platform,
           users.username AS user
    FROM broadcasts
    INNER JOIN types ON broadcasts.type_id = types.id
    INNER JOIN platforms ON broadcasts.platform_id = platforms.id
    INNER JOIN users ON broadcasts.user_id = users.id;