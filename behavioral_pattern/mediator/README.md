# Mediator Design Pattern in PHP

This project demonstrates the **Mediator** design pattern using a simple chat system where users communicate through a central `ChatRoom` mediator.

## 🧠 What is the Mediator Pattern?

The **Mediator Pattern** is a behavioral design pattern that helps **reduce direct dependencies between objects**.

Instead of objects talking directly to each other, they **communicate through a mediator object**. This makes the system more flexible, loosely coupled, and easier to change or extend.

> In short: objects don't talk to each other directly — the mediator handles their interaction.

---

## 🧪 Example Used in This Project

We have multiple users (`User` objects), and a central `ChatRoom`:

- Each user can **send a message**
- Instead of sending it directly to others, the message is sent through the `ChatRoom` mediator
- The mediator **distributes** the message to other users

---

## 📦 Project Structure

interfaces
    Colleague.php
    Mediator.php
src
    ChatRoom.php
    User.php
index.php

---

## ✅ Why Use the Mediator Pattern?

- **Reduces tight coupling** between objects
- Makes communication logic **centralized and easier to manage**
- Adding or removing objects is simple — no need to rewrite others
- Ideal for systems with many interacting components (chat, forms, UI elements, etc.)

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
