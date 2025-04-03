# Command Design Pattern in PHP

This project demonstrates the **Command** design pattern using a simple remote control example that can turn a light on and off.

## 🧠 What is the Command Pattern?

The **Command Pattern** is a behavioral design pattern that turns a **request into a standalone object**.  
This lets you:

- Parameterize methods with different commands
- Queue or log operations
- Undo/redo actions

> In short: it **decouples** the sender of a request from the object that performs the action.

---

## 🧪 Example Used in This Project

We have:
- A `Light` class with `turnOn()` and `turnOff()` methods
- Two command classes: `TurnOnLightCommand` and `TurnOffLightCommand`
- A `RemoteControl` class that executes any command it's given

The remote doesn't care what the command does — it just **executes it**.

---

## 📦 Project Structure

interfaces
    Command.php
src
    Light.php
    RemoteControl.php
    TurnOffLightCommand.php
    TurnOnLightCommand.php
index.php

---

## ✅ Why Use the Command Pattern?

- Makes it easy to add **new actions** without modifying existing code
- Supports **undo, redo, and logging**
- Keeps the code **flexible and extensible**
- Separates the **invoker** (RemoteControl) from the **receiver** (Light)

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
