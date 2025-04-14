# Builder Design Pattern in PHP

This project demonstrates the **Builder** design pattern using a website construction example.  
It shows how to create complex objects step by step with a flexible and readable process.

## 🧠 What is the Builder Pattern?

The **Builder Pattern** is a creational design pattern that lets you **construct complex objects piece by piece**.

It’s useful when:
- A class has many parts or steps to build
- Some parts are optional or vary
- You want to **separate construction from representation**

> In short: builder lets you build objects step by step — with full control over the process.

---

## 🧪 How It Works

We have:
- `Website` – the product being built
- `WebsiteBuilder` – interface with methods like `addHeader()`, `addContent()`, `addFooter()`
- Concrete builders:
    - `BlogWebsiteBuilder`
    - `ShopWebsiteBuilder`
- `WebsiteDirector` – orchestrates the building process

The director calls the steps in order, and the builder determines what each step does.

---

## 📦 Project Structure

interfaces
    WebsiteBuilder.php
src
    BlogWebsiteBuilder.php
    ShopWebsiteBuilder.php
    Website.php
    WebsiteDirector.php
index.php

---

## ✅ Why Use the Builder Pattern?

- Makes object creation **clear and readable**
- Supports different **variations of an object**
- Avoids complex constructors with too many parameters
- Keeps building logic **separate** from the final product

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php