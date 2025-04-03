# Product Collection Example in PHP

This project demonstrates a simple way to manage a list of products using object-oriented PHP. It includes a custom collection class and supports basic operations like adding and listing products.

## 🧠 What is This Example About?

This project shows how to separate **data representation** (a `Product`) from **collection management** (a `ProductCollection`) using clean, simple classes.

Instead of working with arrays directly, we wrap the logic in objects, which makes the code easier to maintain and extend.

> In short: we organize products in a clean, object-oriented way — without relying on raw arrays.

---

## 📦 Project Structure

src
    Product.php
    ProductCollection.php
index.php

---

## ✅ Why Use This Approach?

- Keeps code **modular and easy to expand**
- Encourages **good object-oriented practices**
- You can later add:
    - Filtering by price
    - Sorting
    - Iterators
    - Export to CSV, etc.

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
