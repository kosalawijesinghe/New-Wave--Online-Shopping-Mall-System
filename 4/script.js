 // Get references to the select element and the product sections
 const selectElement = document.getElementById('category-select');
 const category1Section = document.getElementById('category1');
 const category2Section = document.getElementById('category2');
 const category3Section = document.getElementById('category3');
 const category4Section = document.getElementById('category4');

 // Add an event listener to the select element
 selectElement.addEventListener('change', function() {
   // Get the selected option value
   const selectedOptionValue = selectElement.value;

   // Hide all product sections
   category1Section.style.display = 'none';
   category2Section.style.display = 'none';
   category3Section.style.display = 'none';
   category4Section.style.display = 'none';

   // Show the corresponding product section based on the selected option value
   if (selectedOptionValue === 'category1') {
    category1Section.style.display = 'block';
   } else if (selectedOptionValue === 'category2') {
    category2Section.style.display = 'block';
   } else if (selectedOptionValue === 'category3') {
    category3Section.style.display = 'block';
   } else if (selectedOptionValue === 'category4') {
    category4Section.style.display = 'block';
   }
   
 });
 backButton,style.display = 'inline-block';
function goBack(){
    window.location.href='Category.html';
    
}
 