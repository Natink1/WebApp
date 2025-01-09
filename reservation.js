function handleSignIn() {
    const password = prompt("Enter the admin password:");
    if (password === "admin123") { // Replace with your chosen password
        window.location.href = "view_reservations.php"; // Redirect to the reservations view page
    } else {
        alert("Incorrect password. Access denied.");
    }
}