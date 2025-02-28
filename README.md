# Vulnerable Login System

This project is a **vulnerable login system** designed for educational purposes. It demonstrates common security flaws in authentication systems and serves as a learning tool for developers, security researchers, and students to understand and mitigate these vulnerabilities.

**Disclaimer:** This project is intentionally insecure. Do not use it in production or expose it to untrusted networks.

---

## Table of Contents
1. [Introduction](#introduction)
2. [Features](#features)
3. [Vulnerabilities](#vulnerabilities)
4. [Setup](#setup)
5. [Usage](#usage)
6. [Contributing](#contributing)
7. [License](#license)

---

## Introduction

The **Vulnerable Login System** is a web application that simulates a login page with intentional security flaws. It is designed to help users:
- Understand common vulnerabilities in authentication systems.
- Learn how to exploit these vulnerabilities in a controlled environment.
- Practice implementing secure coding practices to fix the issues.

---

## Features

- **Basic Login Functionality:** Users can log in with a username and password.
- **Vulnerable Endpoints:** Intentionally insecure endpoints to demonstrate common flaws.
- **Educational Purpose:** Designed for learning and testing security concepts.

---

## Vulnerabilities

This login system contains the following **intentional vulnerabilities**:

1. **SQL Injection:**
   - The login form is vulnerable to SQL injection attacks, allowing attackers to bypass authentication.
   - Example payload: `' OR '1'='1`.

2. **Weak Password Storage:**
   - Passwords are stored in plaintext or using weak hashing algorithms (e.g., MD5).

3. **Lack of Rate Limiting:**
   - No protection against brute-force attacks, allowing unlimited login attempts.

4. **Cross-Site Scripting (XSS):**
   - Input fields are not sanitized, making the application vulnerable to XSS attacks.

5. **Session Fixation:**
   - Session IDs are not regenerated after login, making the application vulnerable to session fixation attacks.

---

## Setup

To set up the Vulnerable Login System locally, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/vulnerable-login-system.git
   cd vulnerable-login-system