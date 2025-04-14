# Factory Method Design Pattern in PHP

This project demonstrates the **Factory Method** design pattern using a logging example.  
It shows how to create related objects (loggers) through a common interface, while letting subclasses decide which one to instantiate.

## 🧠 What is the Factory Method Pattern?

The **Factory Method Pattern** is a creational pattern that lets you **delegate object creation to subclasses**.

It’s useful when:
- You want to create objects without using `new` directly in your code
- You need different object types depending on context
- You want to follow the **Open/Closed Principle**

> In short: the factory method lets subclasses **choose which object to create** — through a shared interface.

---

## 🧪 How It Works

We have:
- `Logger` interface – the product
- `FileLogger` and `DatabaseLogger` – different implementations of `Logger`
- `LoggerFactory` interface – declares `createLogger()`
- Concrete factories:
    - `FileLoggerFactory` – creates `FileLogger`
    - `DatabaseLoggerFactory` – creates `DatabaseLogger`

The client only depends on the factory interface, not on any concrete logger.

---

## 📦 Project Structure

interfaces
    Logger.php
    LoggerFactory.php
src
    DatabaseLogger.php
    DatabaseLoggerFactory.php
    FileLogger.php
    FileLoggerFactory.php
index.php

---

## ✅ Why Use the Factory Method Pattern?

- Decouples object creation from business logic
- Makes your code easier to extend and test
- Lets you switch implementations with minimal change
- Supports **single responsibility** and **open/closed** principles

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php