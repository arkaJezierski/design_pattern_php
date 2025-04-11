# Proxy Design Pattern in PHP

This project demonstrates the **Proxy** design pattern using a simple file download example.  
It shows how to control access to a resource (like downloading a file) using a proxy.

## 🧠 What is the Proxy Pattern?

The **Proxy Pattern** is a structural design pattern that acts as a **substitute or placeholder** for another object.  
The proxy controls access to the real object and adds additional behavior like:

- Logging
- Access control
- Lazy loading
- Caching

> In short: the proxy controls access to another object — without changing the real object.

---

## 🧪 How It Works

We have:
- `RealDownloader` – the real service that downloads files
- `ProxyDownloader` – checks user access before allowing download
- If the user has permission → file is downloaded
- If not → access is denied

---

## 📦 Project Structure

interfaces
    Downloader.php
src
    ProxyDownloader.php
    RealDownloader.php
index.php

---

## ✅ Why Use the Proxy Pattern?

- Adds logic **without modifying the real object**
- Helps with **security, performance, and control**
- Good for working with:
    - Protected resources
    - Heavy operations (e.g., big file loading)
    - External APIs

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
