// Sample data for search
const data = [  {    title: 'kmc',    description: 'This is a sample item with some text.', 
  image: 'hosp1.jpg',    category: 'Category 1'  }, 
   {    title: 'suncity',  
     description: 'This is another sample item with some text.', 
        image: 'hosp2.jpg',    category: 'Category 2'  }, 
         {    title: 'Orthodontic',    description: 'This is a third sample item with some text.',  
           image: 'hosp_3.jpg',    category: 'Category 1'  },  {    title: 'Dental Clinic',   
 description: 'This is a fourth sample item with some text.',    image: 'hosp5.jpg',    category: 'Category 2' },

 {    title: 'Atharva Hospital',description: 'This is a fifth sample item with some text.',
     image: 'hosp1.jpg',    category: 'Category 1'  },
 {    title: 'Sparsha Clinic',description: 'This is a sixth sample item with some text.',
     image: 'hosp5.jpg',    category: 'Category 2'  },
 {    title: 'Venus Hospital',description: 'This is a seventh sample item with some text.',
     image: 'hosp2.jpg',    category: 'Category 1'  },
 {    title: 'Vasudev Clinic',description: 'This is a eighth sample item with some text.',
     image: 'hosp3.jpg',    category: 'Category 2'  }


];

// Function to search data
function searchData() {
  // Get search query
  const searchQuery = document.getElementById('search-input').value;

  // Filter data based on search query
  const filteredData = data.filter(item => {
    return item.title.toLowerCase().includes(searchQuery.toLowerCase()) || 
           item.description.toLowerCase().includes(searchQuery.toLowerCase()) ||
           item.category.toLowerCase().includes(searchQuery.toLowerCase());
  });

  // Build HTML for sample data
  let html = '';
  if (filteredData.length > 0) {
    filteredData.forEach(item => {
      html += `
        <li>
          <h3>${item.title}</h3>
          <img src="${item.image}">
          <p>${item.description}</p>
          <p>Category: ${item.category}</p>
        </li>
      `;
    });
  } else {
    html = '<p>No results found.</p>';
  }

  // Update HTML for sample data
  document.getElementById('sample-data').innerHTML = html;
}

// Add event listener for search button
document.getElementById('search-button').addEventListener('click', searchData);
