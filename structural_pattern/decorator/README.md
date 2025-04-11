# Decorator Design Pattern in PHP

This project demonstrates the **Decorator** design pattern using a simple message formatting system in PHP.  
It shows how to dynamically add behavior (like logging, formatting, or encryption) to an object without modifying its class.

## 🧠 What is the Decorator Pattern?

The **Decorator Pattern** is a structural design pattern that lets you **wrap an object with additional behavior** — dynamically and transparently.

It’s useful when:
- You want to **add features step by step**
- You don’t want to use inheritance for every combination
- You need to keep classes **open for extension but closed for modification**

> In short: decorators let you "stack" functionality without changing the original class.

---

## 🧪 How It Works

We have:
- `PlainMessage` – returns a simple string
- Decorators:
    - `LoggerDecorator` – logs the message
    - `BoldDecorator` – wraps message in `<b>` HTML tag
    - `EncryptedDecorator` – encodes message using base64

You can chain them in any order.

---

## 📦 Project Structure

interfaces
    Message.php
src
    BoldDecorator.php
    EncryptedDecorator.php
    LoggerDecorator.php
    PlainMessage.php
index.php


---

## ✅ Why Use the Decorator Pattern?

- Makes functionality **modular and reusable**
- You can **combine decorators flexibly**
- Avoids deep inheritance trees
- Perfect for formatting, filtering, validation, logging, etc.

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
