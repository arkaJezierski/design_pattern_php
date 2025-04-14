# Singleton Design Pattern in PHP

This project demonstrates the **Singleton** design pattern using a simple logger class.  
It ensures that only **one instance** of the logger exists across the entire application.

## 🧠 What is the Singleton Pattern?

The **Singleton Pattern** is a creational design pattern that restricts a class to **a single instance** and provides a **global access point** to that instance.

It’s useful when:
- You need **one and only one object** (e.g., logger, database, config)
- You want to share **state or behavior** across multiple places in your app

For many programers Singleton is anti-patter because it break every SOLID principles and it's not recommended to use it 

> In short: singleton gives you **exactly one instance** — everywhere.

---

## 🧪 How It Works

We have:
- A `Logger` class with a private constructor, clone and wakeup method
- A static `getInstance()` method to retrieve the single instance
- Two variables (`$logger1`, `$logger2`) that refer to **the same object**
- A simple `log()` method to store messages

---

## 📦 Project Structure

src
    Logger.php
index.php

---

## ✅ Why Use the Singleton Pattern?

- Ensures there’s **only one instance**
- Prevents duplicate configuration, connections, or loggers
- Useful for:
    - Logging
    - Configuration
    - Database connections
    - Caching systems

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php