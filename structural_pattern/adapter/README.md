# Adapter Design Pattern in PHP

This project demonstrates the **Adapter** design pattern using a simple payment example.  
It shows how to connect old, incompatible code to a new system without modifying the original class.

## 🧠 What is the Adapter Pattern?

The **Adapter Pattern** is a structural design pattern that lets you **wrap an existing class with a new interface**.

It’s useful when:
- You have old code (legacy class) that doesn’t match your current system
- You want to reuse it without changing its source

> In short: the adapter makes **incompatible code work together**.

---

## How It Works

We have:
- An old payment system (`OldPaymentGateway`) that uses `makePayment()`
- A new system (`Checkout`) that expects a `pay()` method
- A `PaymentAdapter` that connects them by translating `pay()` to `makePayment()`

---

## 📦 Project Structure

interfaces
    PaymentProcessor.php
src
    Checkout.php
    OldPaymentGateway.php
    PaymentAdapter.php
index.php

---

## ✅ Why Use the Adapter Pattern?

- Lets you **reuse existing code** without modifying it
- Helps **bridge gaps** between new and legacy systems
- Keeps your codebase **clean and maintainable**
- Useful when integrating **3rd party libraries or outdated APIs**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
