<!DOCTYPE html>
<html>
  <head>
    <title>Search Sample Data</title>
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <!-- <script src="script.js"></script> -->
    <script type="text/JavaScript">

      // Sample data for search
// const data = [  {    title: 'kmc',    description: 'This is a sample item with some text.', 
//     image: 'hosp1.jpg',    category: 'Category 1'  },  {    title: 'suncity',   
//        description: 'This is another sample item with some text.', 
//    image: 'hosp2.jpg',    category: 'Category 2'  },  {    title: 'Orthodontic',  
//    description: 'This is a third sample item with some text.',    image: 'hosp_3.jpg', 
//    category: 'Category 1'  },  {    title: 'Dental Clinic', 
//    description: 'This is a fourth sample item with some text.',    image: 'hosp5.jpg', 
//       category: 'Category 2'  }];

 
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
     image: 'hosp1.jpg',    category: 'Category 2'  }


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

      </script>
    <style type="text/css">
      /* Global styles */
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    margin: 0;
  }
  
  /* Search box styles */
  .search-container {
    position: fixed;
    top: 150px;
    right: 1020px;
    z-index: 1;
    padding: 20px;
    background-color: #100f0f;
  }
  
  .search-container form {
    display: flex;
    align-items: center;
  }
  
  .search-container input[type="text"] {
    width: 200px;
    padding: 10px;
    border: none;
    border-radius: 4px;
    margin-right: 10px;
  }
  
  .search-container button[type="submit"] {
    background-color: #333;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* Background image styles */
  .background-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('international-medical-clinic-camden-medical-centre.jpg');
    background-size: cover;
    background-position: center; 
    background-repeat:repeat;
    opacity: 0.5;
    z-index: -1;
  }
  
  /* Sample data styles */
  .sample-data-container {
    max-width: 700px;
    margin: 60px auto;
    text-align: center;
  }
  
  .sample-data-container h2 {
    margin-bottom: 20px;
  }

  
  .sample-data-container p {
    margin-bottom: 10px;
  }
  p {
    color: #333; /* Changes the font color to a dark gray */
    font-size: 1rem; /* Sets the font size to 2 times the default size */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Adds a shadow effect to the text */
  }
  
  .sample-data-container ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .sample-data-container li {
    margin: 10px;
    padding: 20px;
    background-color: #fff;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .sample-data-container h3 {
    margin: 0 0 10px;
  }
  
  .sample-data-container img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
    border-radius: 4px;
  }
  
      </style>
  </head>
  <body>
    <!-- Search box -->
    <div class="search-container">
      <form onsubmit="searchData(); return false;">
        <input type="text" id="search-input" placeholder="Search...">
        <button type="submit">Search</button>
      </form>
    </div>

    <!-- Background image -->
    <div class="background-image"></div>

    <!-- Sample data -->
    <div class="sample-data-container">
       
      <h2>Enter Clinic Name</h2><br><br><br><br><br><br>
    <!--  <h1>Click </h2>-->
      <div id="sample-data"></div>
    </div>
    <footer>
        <p>BOOK YOUR APPOINTMENT NOW
          <a href="http://localhost/HCC%20project/form.php">BOOKING</a>
        </p>
      </footer>
      

    <!-- JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
