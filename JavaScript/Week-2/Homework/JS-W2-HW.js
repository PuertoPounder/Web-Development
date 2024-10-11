// TODO: Function to calculate tip and total amount
function calculateTip(){
    const billAmount = parseFloat(document.getElementById('bill-amount').value);
    const tipPercentage = parseFloat(document.getElementById('tip-percentage').value);

    // TODO: Get the user input values
    if (isNaN(billAmount) || isNaN(tipPercentage) || billAmount <= 0 || tipPercentage < 0) {
        alert('Please enter in valid numbers.');
        return;
    }
    // TODO: Validate the input
    const tipAmount = billAmount * (tipPercentage / 100)
    const totalAmount = billAmount + tipAmount;
    // TODO: Calculate the tip amount and total amount
    document.getElementById('tip-amount').textContent = `Tip Amount: $${tipAmount.toFixed(2)}`;
    document.getElementById('total-amount').textContent = `Total Amount: $${totalAmount.toFixed(2)}`
}
    // TODO: Display the results

// TODO: Add event listener to the HTML DOM button
document.getElementById('calculate-button').addEventListener('click',calculateTip);