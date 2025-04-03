# Visitor Design Pattern in PHP

This repository demonstrates the **Visitor** design pattern using a practical and real-world-inspired example in PHP.

## 🧠 What is the Visitor Pattern?

The **Visitor Pattern** is a behavioral design pattern that lets you separate algorithms from the objects on which they operate.

Imagine you have several types of documents: `Invoice`, `Order`, and `Report`. You want to perform different operations on them (e.g., export to PDF, generate CSV, log analytics), but **you don't want to add these operations into each document class** — that would make the classes grow in complexity and violate the Single Responsibility Principle.

Instead, you define **visitors** — classes that implement these operations separately — and each document "accepts" a visitor and lets it do its job.

> In short: **the document classes stay clean**, and **new behaviors can be added without changing them**.

---

## 📦 Project Structure

interfaces
    Documentable.php
    Visitorable.php
src
    Invoice.php
    Order.php
    PdfExporterVisitor.php
    Report.php
index.php


---

## ⚙️ How It Works

1. **Document types** like `Invoice`, `Order`, and `Report` implement a common `Document` interface.
2. Each of them defines an `accept()` method that accepts a `DocumentVisitor`.
3. The `PdfExporterVisitor` implements the `DocumentVisitor` interface and knows how to handle each document type differently.
4. In the main file (`index.php`), we loop through a list of documents and apply the visitor to each.

---

## ✅ Benefits of This Pattern

- Easy to add **new operations** (e.g. export to CSV, log, validate) without changing existing classes.
- Keeps your classes **small and focused** on what they do best.
- Great for working with **object structures with many types**.

## 🧪 Run the Example

1. Install dependencies (autoload):

```bash
composer dump-autoload
php index.php
