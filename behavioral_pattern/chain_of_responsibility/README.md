# Message Filter Chain Example in PHP

This project demonstrates a simple version of the **Chain of Responsibility** design pattern in PHP using a message filter system. It shows how to pass a message through multiple filters (like spam and profanity checkers) step by step.

## 🧠 What is This Example About?

This project shows how to separate **message validation logic** into small, reusable components.  
Each filter checks one thing (e.g. spam, length, bad words) and passes the message to the next filter in the chain.

> In short: we build a flexible pipeline for message processing — one filter at a time.

---

## 📦 Project Structure

interfaces  
  Filter.php  
src  
  BaseFilter.php  
  SpamFilter.php  
  ProfanityFilter.php  
  LengthFilter.php  
index.php

---

## ✅ Why Use This Approach?

- Keeps each filter **focused on one task**
- Makes the system **easy to extend** (just add a new filter!)
- Filters can be **reordered or removed** with no impact on others
- Great for building **pipelines**: validation, sanitization, preprocessing

---

## 🧪 Run the Example

1. Generate the autoloader:

```bash
composer dump-autoload
php index.php
