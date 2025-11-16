ALTER TABLE roles ADD role_inherit INT NULL;

CREATE TABLE role_permissions (
    role_id INT,
    permission_id INT
);
