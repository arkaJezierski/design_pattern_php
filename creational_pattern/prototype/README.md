# Prototype Design Pattern in PHP

This project demonstrates the **Prototype** design pattern using a simple user object example.  
It shows how to create new objects by **cloning existing ones**, rather than building them from scratch.

## 🧠 What is the Prototype Pattern?

The **Prototype Pattern** is a creational design pattern that allows you to **clone existing objects** instead of creating new instances manually.

It’s useful when:
- Object creation is expensive or repetitive
- You need many similar objects with small differences
- You want to copy fully configured objects quickly

> In short: prototype lets you **duplicate objects on demand**.

---

## 🧪 How It Works

We have:
- A `User` class that implements a custom `Prototype` interface
- The `clone()` method returns a new instance based on the original
- The client can change properties after cloning

This avoids creating each user manually from scratch.

---

## 📦 Project Structure

interfaces
    Prototype.php
src
    User.php
index.php

---

## ✅ Why Use the Prototype Pattern?

- Reduces **duplication and setup code**
- Enables **fast object creation**
- Useful for **pre-configured templates**
- Simplifies logic when building **complex or repetitive objects**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php