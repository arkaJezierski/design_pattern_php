# Flyweight Design Pattern in PHP

This project demonstrates the **Flyweight** design pattern using a simple map rendering example.  
It shows how to **save memory** by reusing shared object data instead of creating duplicates.

## 🧠 What is the Flyweight Pattern?

The **Flyweight Pattern** is a structural design pattern that allows programs to **share common parts of objects** to reduce memory usage.

It’s useful when:
- You have a large number of similar objects
- Many objects share the same data (e.g., color, type)
- You want to store shared data in one place, and separate unique data (like coordinates)

> In short: flyweight lets you **reuse objects** instead of creating new ones each time.

---

## 🧪 How It Works

We have:
- `Icon` – shared flyweight object (e.g., "tree" or "rock" icon)
- `IconFactory` – creates and reuses icons
- `Map` – places icons on a grid with different coordinates
- `index.php` – draws the map using shared icons

Even if the same icon is drawn 10 times, it is only **created once**.

---

## 📦 Project Structure

src
    Icon.php
    IconFactory.php
    Map.php
index.php

---

## ✅ Why Use the Flyweight Pattern?

- Greatly reduces memory usage
- Ideal for games, GUIs, document editors, or large object trees
- Separates **shared data (intrinsic)** from **unique data (extrinsic)**
- Makes applications **faster and more scalable**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php