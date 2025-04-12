# Abstract Factory Design Pattern in PHP

This project demonstrates the **Abstract Factory** design pattern using a cross-platform UI example.  
It shows how to create families of related objects (like buttons and checkboxes) **without specifying their concrete classes**.

## 🧠 What is the Abstract Factory Pattern?

The **Abstract Factory Pattern** is a creational design pattern that lets you create **groups of related objects** without depending on their concrete implementations.

It’s useful when:
- You need to support **multiple variants** of a product (e.g., Windows vs MacOS)
- You want to enforce consistency between created objects
- You want to **isolate platform-specific code**

> In short: abstract factory lets you create entire **families of products** through a single interface.

---

## 🧪 How It Works

We have:
- `GUIFactory` interface – defines how to create a `Button` and a `Checkbox`
- Concrete factories:
    - `WindowsFactory` – returns `WindowsButton` and `WindowsCheckbox`
    - `MacFactory` – returns `MacButton` and `MacCheckbox`
- The `renderUI()` function uses only the factory interface, not concrete classes

This way, switching the factory changes the whole "look and feel" of the UI.

---

## 📦 Project Structure

interfaces
    Button.php
    Checkbox.php
    GUIFactory.php
src
    MacButton.php
    MacCheckbox.php
    MacFactory.php
    WindowsButton.php
    WindowsCheckbox.php
    WindowsFactory.php
index.php


---

## ✅ Why Use the Abstract Factory Pattern?

- Makes code **platform-independent**
- Ensures **compatibility** between related objects
- Allows you to **swap product families easily**
- Keeps the client code **decoupled from concrete classes**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
