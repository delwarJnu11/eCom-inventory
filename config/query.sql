create database inventory;

use inventory;

create table products(
    id int primary key auto_increment,
    product_name varchar(2500) not null,
    category_id int,
    unit_price decimal(10,2),
    barcode int,
    uom_id int,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table stock(
    id int primary key auto_increment,
    product_id int,
    quantity int,
    transaction_type_id int,
    warehouse_id int,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table categories(
    id int primary key auto_increment,
    category_name varchar(255) not null,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table uom(
    id int primary key auto_increment,
    name varchar(255) not null,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table transaction_type(
    id int primary key auto_increment,
    name varchar(255) not null,
    factor int,
    comment text,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table clients(
    id int primary key auto_increment,
    client_name varchar(255) not null,
    email varchar(255),
    phone varchar(255),
    dob datetime,
    point decimal(10,2),
    address varchar(255),
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table orders(
    id int primary key auto_increment,
    client_id int,
    status_id int,
    total decimal(15,2),
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table order_details(
    id int primary key auto_increment,
    order_id int,
    product_id int,
    qty int,
    unit_price float,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table purchases(
    id int primary key auto_increment,
    client_id int,
    total decimal(15,2),
    status_id int,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table suppliers(
    id int primary key auto_increment,
    supplier_name varchar(255) not null,
    email varchar(255),
    phone varchar(255),
    dob datetime,
    point decimal(10,2),
    address varchar(255),
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table purchase_details(
    id int primary key auto_increment,
    order_id int,
    product_id int,
    qty int,
    unit_price float,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table status(
    id int primary key auto_increment,
    status varchar(255),
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

create table warehouse(
    id int primary key auto_increment,
    warehouse_name varchar(255) not null,
    location varchar(255),
    capacity int,
    created_at datetime default current_timestamp,
    updated_at datetime default current_timestamp
);

