function checkLogin(username, password) {
  if (username === "admin" && password === "admin") {
    return true; // Login successful
  } else {
    return false; // Login failed
  }
}

// Example usage:
const username = prompt("Enter your username:");
const password = prompt("Enter your password:");

if (checkLogin(username, password)) {
  console.log("Login successful!");
} else {
  console.log("Login failed!");
}
