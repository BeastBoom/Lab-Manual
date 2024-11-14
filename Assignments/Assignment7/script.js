// Function to calculate the sum of array elements
function sumArray(arr) {
    return arr.reduce((acc, curr) => acc + curr, 0);
}

// Function to handle form submission
document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form from submitting

    // Get the user input
    const input = document.getElementById('arrayInput').value;

    // Validate and parse the input
    const array = input.split(',').map(item => {
        const number = parseFloat(item.trim()); // Use parseFloat to handle negative numbers and decimals if needed
        if (isNaN(number)) {
            alert('Please enter valid integers.');
            throw new Error('Invalid input');
        }
        return number;
    });

    // Calculate the sum and display the result
    const sum = sumArray(array);
    document.getElementById('result').textContent = `${sum}`;
});
