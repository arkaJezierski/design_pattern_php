# Template Method Design Pattern in PHP

This repository demonstrates the **Template Method** design pattern using a clear and practical example in PHP.

## 🧠 What is the Template Method Pattern?

The **Template Method Pattern** is a behavioral design pattern that defines the **skeleton of an algorithm** in a base class, but lets subclasses redefine certain steps of that algorithm **without changing its overall structure**.

> In short: the base class controls the flow, while subclasses customize specific parts.

It’s useful when multiple classes share the same structure of an operation, but each step of the operation might differ slightly.

---

## 📦 Project Structure

interfaces
   ReportGenerator.php
src
   InventoryReport.php
   SalesReport.php
index.php

---

## 📋 How It Works

1. The abstract class `ReportGenerator` defines the general steps to create a report:
    - prepareData
    - generateHeader
    - generateBody (abstract)
    - generateFooter
    - export

2. Subclasses like `SalesReport` and `InventoryReport` implement their own version of `generateBody`, customizing what’s shown in the report content.

3. When `generate()` is called, it runs all the steps in order, using the custom logic where defined.

---

## ✅ Benefits of Template Method

- Reuses common logic across related classes.
- Keeps control flow in one place (base class).
- Enforces consistency across different implementations.
- Makes code easier to extend and maintain.

---

## 🧪 Run the Example

1. Install dependencies (autoload):

```bash
composer dump-autoload
php index.php
