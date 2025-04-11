# Facade Design Pattern in PHP

This project demonstrates the **Facade** design pattern using a simple order placement example.  
It shows how to simplify interaction with multiple subsystems by providing a single entry point.

## 🧠 What is the Facade Pattern?

The **Facade Pattern** is a structural design pattern that provides a **unified interface** to a set of complex subsystems.

It’s useful when:
- You want to simplify how clients interact with a system
- You have multiple services that work together
- You want to reduce dependencies and make code easier to use

> In short: facade hides complexity behind a simple interface, as facade of the building hides the rest of the structure

---

## 🧪 How It Works

We have:
- `PaymentService` – handles payments
- `ShippingService` – ships the product
- `NotificationService` – sends confirmation emails
- `OrderFacade` – combines all of them into a single method: `placeOrder()`

This way, the client only calls one method instead of dealing with all services separately.

---

## 📦 Project Structure

src
    NotificationService.php
    OrderFacade.php
    PaymentService.php
    ShippingService.php
index.php

---

## ✅ Why Use the Facade Pattern?

- Hides **complex internal logic**
- Makes the system easier to **use, test, and understand**
- Improves **code organization**
- Ideal for working with multiple services, APIs, or legacy systems

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php   