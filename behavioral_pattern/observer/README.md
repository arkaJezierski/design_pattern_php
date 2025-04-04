# Observer Pattern in PHP

This project shows a simple example of the **Observer** design pattern in PHP.

##  What is the Observer Pattern?

The **Observer Pattern** is like a classroom message system.

Imagine a teacher writes a message on the board.  
Every student who signed up gets the message right away.

In programming:
- One object **sends a message** (the Subject)
- Many other objects **listen** (the Observers)
- When something happens, all listeners are **automatically notified**

> This helps us keep our code clean, simple, and flexible.

---

## 🧪 How It Works

We have a `Blog` class. When a new blog post is published:
- `EmailSubscriber` gets an email
- `SlackSubscriber` gets a Slack message

The blog does not need to know what these subscribers do —  
it just sends the message to everyone who’s listening.

---

## 📂 Files

interfaces
    Observerable.php
    Subjectable.php
src
    Blog.php
    EmailSubscriber.php
    SlackSubscriber.php
index.php


---

## ✅ Why Use This Pattern?

- Makes code more **modular** and easy to change.
- You can add more subscribers without changing the Blog.
- Perfect for **notifications, events, logging, and more**.

---

## ▶️ How to Run

1. Make sure Composer is installed.
2. Run:

```bash
composer dump-autoload
php index.php
