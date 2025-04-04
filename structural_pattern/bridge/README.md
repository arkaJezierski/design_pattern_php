# Bridge Design Pattern in PHP

This project demonstrates the **Bridge** design pattern using a simple drawing example where shapes (like circles) can be rendered using different rendering engines (like SVG or Canvas).

## 🧠 What is the Bridge Pattern?

The **Bridge Pattern** is a structural design pattern that lets you **separate an abstraction from its implementation** so that both can vary independently.

You use it when:
- You want to avoid a huge inheritance tree
- You need to mix and match behaviors dynamically (e.g. shape + renderer)

> In short: bridge lets you combine different **interfaces and implementations** without tightly coupling them.

---

## 🧪 How It Works

We have:
- A `Shape` abstraction, with a concrete `Circle`
- Two rendering implementations: `SvgRenderer` and `CanvasRenderer`
- Shapes use any renderer passed into them, allowing flexible combinations

---

## 📦 Project Structure

interfaces
    Renderer.php
src
    CanvasRenderer.php
    Circle.php
    Shape.php
    SvgRenderer.php
index.php

---

## ✅ Why Use the Bridge Pattern?

- Clean separation of **what is being done** (shape) from **how it’s done** (renderer)
- Makes it easy to add new shapes or renderers without changing existing code
- Avoids deep, rigid inheritance hierarchies
- Encourages **composition over inheritance**

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
