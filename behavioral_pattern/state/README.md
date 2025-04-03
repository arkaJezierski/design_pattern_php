# State Design Pattern in PHP

This repository demonstrates the **State** design pattern using a realistic example of an order system in PHP.

## 🧠 What is the State Pattern?

The **State Pattern** is a behavioral design pattern that allows an object to **change its behavior when its internal state changes**.

Instead of using `if`/`else` or `switch` statements, each state is represented by a **separate class**. This makes the code cleaner, easier to maintain, and open to extension.

> In short: the object behaves differently depending on its state, and state-specific logic is extracted into its own class.

---

## 📦 Project Structure

interfaces
    Stateable.php
src
    DeliveredState.php
    NewState.php
    Order.php
    ProcessingState.php
    ShippedState.php
index.php

---

## 📋 How It Works

- The `Order` class holds a reference to the current state object.
- The `OrderState` interface defines what each state must implement: `proceed()` and `getName()`.
- Concrete states like `NewState`, `ProcessingState`, etc. implement specific behavior for each step.
- The `Order` delegates the transition logic to the current state using `$state->proceed($order)`.

---

## ✅ Benefits of the State Pattern

- Eliminates complex conditionals (`if`/`switch`) in the context class.
- Each state is isolated and responsible for its own behavior.
- Easy to add new states or change behavior without touching the main class.
- Promotes the **Open/Closed Principle**.

---

## 🧪 Run the Example

1. Generate autoload files:

```bash
composer dump-autoload
php index.php
