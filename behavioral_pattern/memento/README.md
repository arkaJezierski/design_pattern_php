# Memento Design Pattern in PHP

This repository demonstrates the **Memento** design pattern using a simple text editor that supports undo functionality.

## 🧠 What is the Memento Pattern?

The **Memento Pattern** is a behavioral design pattern that lets you **save and restore the state** of an object **without revealing its internal structure**.

Think of it like taking a snapshot or pressing **CTRL+Z** (undo).  
You can go back to a previous version of your object, without knowing how the object works inside.

> In short: it lets objects "remember" and "go back" to earlier versions of themselves.

---

## How It Works

We have a `TextEditor` class that allows writing content.  
We can:
- Save the current state of the editor using a **memento**
- Push it to **history**
- Restore a previous state (undo)

---

## 📦 Project Structure

interfaces
    Memento.php
src
    EditorMemento.php
    History.php
    TextEditor.php
index.php

---

## ✅ Why Use Memento?

- Gives you **undo/redo** features
- Keeps your object's internals **private and clean**
- Easy to implement in editors, games, forms, or anything with "state"

---

## 🧪 Run the Example

1. Generate autoload files:

```bash
composer dump-autoload
php index.php
