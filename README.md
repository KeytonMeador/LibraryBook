# Library Book Due Date Checker

## Overview
This project is a simple PHP web application that checks a library book’s **return date** against its **due date** and reports whether the book is:
- Overdue (with how many years, months, and days overdue)
- Still has time left before it’s due
- Due today

The project uses **PHP built-in date functions** (`date_create`, `date_diff`, `date_format`) and demonstrates basic form handling with clean, professional output using **Bootstrap** for styling.

---

## Files
- **index.php**  
  Main entry point of the application. Includes the form and displays results.

- **form.php**  
  Contains the Bootstrap-styled form with inputs for return date and due date.

- **functions.php**  
  Contains helper functions (e.g., `checkDueDate()`) that process the dates and return the result message.

---

## Features
- User-friendly Bootstrap design
- Input validation with required fields
- Clear display of entered dates
- Message showing:
  - How long overdue
  - How long until due
  - If the book is due today

