# Strategy Design Pattern in PHP

This repository demonstrates the **Strategy** design pattern using a clean and practical PHP example.

## 🧠 What is the Strategy Pattern?

The **Strategy Pattern** is a behavioral design pattern that lets you define a family of algorithms, put each of them in a separate class, and make them interchangeable.

In simple terms: instead of having one class with a bunch of `if`/`else` or `switch` statements to pick behavior, you **encapsulate each behavior into its own class** and swap them dynamically at runtime.

> Think of it like choosing a different strategy for doing something — without changing the object using it.

---

## 📦 Project Structure

interfaces
    Strategable.php
src
    BankTransferPayment.php
    CreditCardPayment.php
    PaymentContext.php
    PayPalPayment.php
index.php

---

## 💳 How It Works (Example: Payment System)

1. You have a `PaymentContext` class that delegates the actual payment logic to a strategy.
2. Strategies implement the `PaymentStrategy` interface and define how to process the payment:
    - `CreditCardPayment`
    - `PayPalPayment`
    - `BankTransferPayment`
3. In the client code (`index.php`), you decide which payment method (strategy) to use at runtime.


---

## ✅ Benefits of This Pattern

- Removes complex `if`/`else` logic from the main class.
- Makes it easy to add **new strategies** without modifying existing code.
- Promotes the **Open/Closed Principle** — open for extension, closed for modification.
- Improves **code readability and flexibility**.

---

## 🧪 Run the Example

1. Install dependencies (autoload):

```bash
composer dump-autoload
php index.php
