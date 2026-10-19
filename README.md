# SPK Dashboard - Sektor Pendidikan Khas JPN Kelantan

An interactive web-based dashboard designed and developed for **Sektor Pendidikan Khas, Jabatan Pendidikan Negeri Kelantan** to centralize administrative information, district school directories, organizational charts, and operational data.

## Tech Stack
* **Frontend:** HTML5, CSS3, JavaScript, Bootstrap
* **Backend:** PHP
* **Database:** MySQL (XAMPP)

## Key Features
* **District School Directories:** Instant lookup of schools categorized by district across Kelantan.
* **Organizational Structure:** Digital representation of sector hierarchy and staffing.
* **Information Portal:** Centralized repository for sector announcements, FAQs, and contact forms.

---

## How to Run Locally

### Prerequisites
* [XAMPP](https://www.apachefriends.org/) (Apache & MySQL)

### Installation Steps
1. **Clone the repository:**
   ```bash
   git clone [https://github.com/foxpa/spk_dashboard.git](https://github.com/foxpa/spk_dashboard.git)

## 💡 Reflection & Future Improvements
Looking back at this project during my Degree studies, key architectural and code enhancements I would implement today include:

* **Code Modularization & DRY Principle:** Refactoring duplicated PHP files (e.g., individual district pages like `bachok.php`, `machang.php`) into a single dynamic route using URL parameters (e.g., `school.php?district=bachok`) and reusable layout components (`include/header.php`, `include/footer.php`).
* **CSS Centralization:** Linking shared external CSS stylesheets across all pages instead of repeating embedded styles or redundant CSS definitions.
* **Security Enhancements:** Updating database queries to use Prepared Statements (PDO) to protect against SQL Injection vulnerabilities.
* **Modern Architecture:** Upgrading the application to an MVC framework (such as Laravel) to cleanly separate business logic from UI templates.
