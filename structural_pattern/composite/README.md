# Composite Design Pattern in PHP

This project demonstrates the **Composite** design pattern using a simple menu system.  
It shows how you can treat **individual items** and **groups of items** the same way.

## 🧠 What is the Composite Pattern?

The **Composite Pattern** is a structural design pattern that lets you **treat a group of objects and a single object the same way**.

It’s perfect for situations like:
- Menus and submenus
- File systems (folders and files)
- Hierarchical data (e.g., categories, comments)

> In short: a tree structure where everything follows the same interface — whether it's a single item or a group.

---

## 🧪 How It Works

We have:
- `MenuItem` – a single clickable link
- `MenuGroup` – a group of items (which can include other groups)
- Both implement the same interface: `Renderable`

The entire menu structure can be rendered by calling `render()` on the root group.

---

## 📦 Project Structure

interfaces
    Renderable.php
src
    MenuGroup.php
    MenuItem.php
index.php

---

## ✅ Why Use the Composite Pattern?

- Treats **individual items and containers** the same way
- Makes your code **recursive, elegant, and clean**
- Easy to add more levels, subgroups, etc.
- Keeps code **flexible and extensible**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php