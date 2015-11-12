table-from-insert-sql
=====================

Create table from insert sql  

This class can generate create table SQL from an insert query.

It takes as parameter a SQL statement of a query to INSERT a table record.

The class builds a SQL query statement to create the given table from the field names used in the INSERT query.

If you have a SQL INSERT query complete with all the fields names and values, you may recover the structure of that table from the query.

This class can do that by parsing the SQL INSERT query and generating a CREATE TABLE statement with all the field names and types based on the parsed query values.

