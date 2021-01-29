$(document).ready(function() {
   $('#example').DataTable( {
       "processing": true,
       "ajax": "universities.json",
       "columns": [
           { "data": "name" },
           { "data": "web_pages[, ]"},
       ]
   } );
} );
/* 
Process the locally stored .json file taken from the API - http://universities.hipolabs.com/search?country=United%20Kingdom
Used in the courses page
*/