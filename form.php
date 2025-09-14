<!-- form.php -->
<!-- Author: Keyton-->
<!-- This form collects return date and due date for the library book project -->

<form method="post" class="p-4 border rounded bg-light shadow">
    <div class="mb-3">
        <label for="return_date" class="form-label">Return Date</label>
        <input type="date" name="return_date" id="return_date" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="due_date" class="form-label">Due Date</label>
        <input type="date" name="due_date" id="due_date" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Check Status</button>
</form>
