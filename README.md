# Cybersercurity-MaintainAccess

# Cybersecurity-MaintainAccess

This repository demonstrates the **Maintaining Access** phase of the Ethical Hacking process, specifically targeting WordPress-based e-commerce systems. This project was created as part of a university research paper on cybersecurity, with the goal of educating students and developers about the risks and behaviors of unauthorized persistent access through backdoor techniques.

> ⚠️ **Disclaimer:** This repository is for **educational and ethical research purposes only**. Do not use this code on any system you do not own or have explicit permission to test.

---

## 📂 Project Structure

This repository contains 3 PHP files, each representing a specific component of the backdoor process used to **maintain unauthorized access** in a compromised WordPress site.

### 1. `adduser.php` – Create Hidden Admin User

This script simulates a **backdoor injection** into the `functions.php` file of a WordPress theme. When accessed via a URL parameter `?backdoor=go`, it silently creates a new admin account.

**Key functionalities:**
- Checks if the username `new_admin` exists.
- Creates the user with password `new_pass`.
- Assigns the role `administrator`.

📎 **Used for:** Gaining persistent admin access without visible login credentials.

---

### 2. `hiddenuser.php` – Hide Admin from User List

This script hides the `new_admin` account from the WordPress user listing in the admin dashboard by altering the user query.

**Key functionalities:**
- Hooks into the `pre_user_query` action.
- Excludes `new_admin` from the SQL query that fetches users.

📎 **Used for:** Evading detection in the dashboard user list.

---

### 3. `notcountuser.php` – Exclude Hidden User from Count

This script modifies the WordPress admin interface to **not include the hidden user in total or admin user counts**.

**Key functionalities:**
- Hooks into the `views_users` filter.
- Adjusts the displayed count of total users and administrators.

📎 **Used for:** Creating the illusion that the user does not exist at all.

---
