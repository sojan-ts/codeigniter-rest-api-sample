# Codeigniter API Sample

This README provides information about the way to create a basic CRUD operation rest API using codeigniter 4.

## Table Structure

The `employees` table has the following structure:

- `id` (int): Primary Key.
- `name` (varchar): Name of the employee.
- `email` (varchar): Email address of the employee.

## Sample Data

The table includes the following sample data:

| id | Name             | Email                  |
|----|------------------|------------------------|
| 1  | Rishi Willson    | rishi@example.com      |
| 2  | Michael Johnson  | michael.j@example.com  |
| 3  | Sarah Davis      | sarah.d@example.com    |
| 4  | David Brown      | david.b@example.com    |
| 5  | Emily Lee        | emily.lee@example.com  |
| 6  | Kevin Wilson     | kevin.w@example.com    |
| 7  | Olivia Miller    | olivia.m@example.com   |

## SQL Statement

Here is the SQL statement used to create the `employees` table:

```sql
CREATE TABLE employees (
    id int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    name varchar(100) NOT NULL COMMENT 'Name',
    email varchar(255) NOT NULL COMMENT 'Email Address',
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='datatable demo table' AUTO_INCREMENT=1;
