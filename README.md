# 🏠 Property Maintenance System (Drupal)

A **Property Maintenance System** built with **Drupal 10** to manage property issues, maintenance requests, service schedules, and user communications in an organized, role-based workflow.

---

## ✨ Features

- 🧾 **Property Listings** with customizable fields
- 🛠️ **Maintenance Request System** (Tenants → Managers → Technicians)
- 👤 **Role-Based Access Control** (Admin, Manager, Tenant, Technician)
- 🔔 **Email & Dashboard Notifications**
- 📸 **File Attachments** for issue reporting (images, docs)
- 📅 **Maintenance Scheduling**
- 📈 **Reports & Logs** for completed requests
- 🧩 **Modular Design using UI Patterns + Layout Builder**

---

## ⚙️ Requirements

- PHP >= 8.1
- Composer
- MySQL / MariaDB
- Drupal 10.x
- Drush (optional but recommended)
- A local web server (e.g., DDEV, Lando, XAMPP, MAMP)

---

## 🚀 Step-by-Step Installation

### 1. 🧱 Set up a new Drupal project

```bash
composer create-project drupal/recommended-project property_maintenance
cd property_maintenance
