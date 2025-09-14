<?php
// functions.php
// Author: Keyton
// Functions to handle library book date comparison

/**
 * Compare two dates and return a message about due status.
 *
 * @param string $returnDate The date the book is/was returned (YYYY-MM-DD).
 * @param string $dueDate The date the book is due (YYYY-MM-DD).
 * @return string Message describing overdue or remaining time.
 */
function checkDueDate($returnDate, $dueDate) {
    $rDate = date_create($returnDate);
    $dDate = date_create($dueDate);

    // Get the difference
    $diff = date_diff($rDate, $dDate);

    if ($returnDate > $dueDate) {
        return "The book is overdue by {$diff->y} years, {$diff->m} months, and {$diff->d} days.";
    } elseif ($returnDate < $dueDate) {
        return "The book is due in {$diff->y} years, {$diff->m} months, and {$diff->d} days.";
    } else {
        return "The book is due today!";
    }
}
