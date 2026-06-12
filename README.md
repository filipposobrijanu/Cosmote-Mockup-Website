<h1 align="center">Cosmote Web Mockup</h1>
<h3 align="center">Full-Stack Telecommunications Portal Simulation | PHP & MySQL</h3>

<p align="center">
  A high-fidelity full-stack web simulation inspired by the Cosmote telecommunications enterprise platform. This architecture leverages native server-side scripting and relational database management to simulate real-world service lookups, dynamic content delivery, and account data mutations within a secure, responsive monolithic framework.
</p>

<p align="center">
  <a href="https://opensource.org/licenses/MIT">
    <img src="https://img.shields.io/badge/License-MIT-yellow.svg?style=for-the-badge" alt="License" />
  </a>
</p>

---

### ✨ Core Features

* **Relational Data Orchestration:** Powered by PHP backend controllers handling structured queries against a SQL layer to dynamically generate customer dashboard entries, plans, and service availability frameworks.
* **Server-Side Rendering (SSR):** Leverages a decoupled procedural MVC structure to securely process client-side operations, manage dynamic user sessions, and render view models without reliance on bloated SPA layers.
* **Enterprise Information Architecture:** A meticulously organized UI mimicking national telecom platform designs, featuring multi-layered navigation drawers, modular account settings, and data-dense services presentation.
* **Adaptive Grid Fluidity:** Implements full Bootstrap 5 layout paradigms to guarantee strict design fidelity, accessibility standards, and pixel-perfect rendering across standard mobile viewports, tablets, and wide screens.

---

### 🛠️ Production Stack

**Server Architecture & Infrastructure Engine**
<p align="left">
  <img src="https://img.shields.io/badge/PHP_8-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8" />
  <img src="https://img.shields.io/badge/Apache_HTTP_Server-D22128?style=for-the-badge&logo=apache&logoColor=white" alt="Apache Server" />
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" alt="XAMPP Stack" />
</p>

**Relational Storage & Data Layer Isolation**
<p align="left">
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL" />
  <img src="https://img.shields.io/badge/PDO_/_MySQLi-4479A1?style=for-the-badge" alt="Database Drivers" />
</p>

**Client Presentation & View Interface**
<p align="left">
  <img src="https://img.shields.io/badge/Bootstrap_5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap 5" />
  <img src="https://img.shields.io/badge/JavaScript_ES6-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" alt="CSS3" />
</p>

---

### 📸 Application Showcase

<p align="center">
  <img src="Images/1.PNG" width="48%" />
  <img src="Images/2.PNG" width="48%" />
</p>
<p align="center">
  <img src="Images/3.PNG" width="48%" />
  <img src="Images/5.PNG" width="48%" />
</p>
<p align="center">
  <img src="Images/4.PNG" width="97%" />
</p>

---

### 🚀 Getting Started (Local Development)

**1. Infrastructure Prerequisites:**
* **Local Web Server:** Install an environment stack container like **XAMPP**, **WAMP**, or **MAMP** to provide the Apache HTTP and MySQL server environments.

**2. Repository Extraction:**
* Clone this repository directly into your local server environment root folder (e.g., `C:/xampp/htdocs/` for XAMPP):
```bash
git clone https://github.com/filipposobrijanu/Cosmote-Mockup-Website.git
cd Cosmote-Mockup-Website
```

**3. Relational Storage Schema Import:**
* Launch **phpMyAdmin** or your chosen database GUI client via `http://localhost/phpmyadmin`.
* Generate a empty database instance named `cosmote_db`.
* Locate the initialization `.sql` script inside the workspace files and execute an **Import** query to map out the application tables and seed records.

**4. Configuration & Native Server Execution:**
* Open the source directory inside your IDE and navigate to the database connectivity logic block. Ensure variables align with your environment:
```php
$servername = "localhost";
$username = "root";
$password = ""; // Add your localized server database password here
$dbname = "cosmote_db";
```
* Start the Apache and MySQL modules inside your control panel and visit `http://localhost/Cosmote-Mockup-Website` in your web browser.
