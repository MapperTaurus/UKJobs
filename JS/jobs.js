$(document).ready(function () {
	$("#btn").on("click", function jobSearch() {

		/* 
		Check if there is an input for "job" 
		If no, display and error message in the placeholder of the search bar
		If yes, continue with the main function	
		*/
		var job = document.getElementById("job");
		if (job.value == "") {
			job.placeholder = "Please enter a job name"
		} else {
			// Concat URL variables for Ajax
			var jobURL = " http://api.lmiforall.org.uk/api/v1/soc/search?q=".concat(job.value);
			getjobList(job, jobURL);
		}
	});

	/* 
	Collect user input from the search bar and browse through the API for the results
	If there are results, construct a table and populate it with the results
	If there are NO results, display an error message
	*/
	function getjobList(job, jobURL) {
		$.ajax({
			url: jobURL,
			type: "get",
			dataType: "json",
			success: function (data) {
				$("#jobs_table").empty();
				document.getElementById("jobs_table").style.display = "block";

				// Create and configure the result table 
				var table = document.createElement("Table");
				var newRow = document.createElement("Tr");
				var cel1 = document.createElement("Th");
				var cel2 = document.createElement("Th");
				var cel3 = document.createElement("Th");
				var cel4 = document.createElement("Th");
				var cel5 = document.createElement("Th");

				cel1.innerHTML = "SOC";
				cel2.innerHTML = "Title"
				cel3.innerHTML = "Qualifications"
				cel4.innerHTML = "Description"
				cel5.innerHTML = "Tasks"

				newRow.appendChild(cel1);
				newRow.appendChild(cel2);
				newRow.appendChild(cel3);
				newRow.appendChild(cel4);
				newRow.appendChild(cel5);
				table.appendChild(newRow);

				// Check if the API has any data, if not display an error message, if yes display a table with the results
				if (!$.trim(data) == true) {
					var noResults = document.createElement("h1");
					var tryAgain = document.createElement("h2");
					noResults.innerHTML = "No results found";
					tryAgain.innerHTML = "Please try a different search";
					noResults.style.font = "bold 38px Verdana";
					noResults.style.color = "Maroon";
					noResults.style.textAlign = "center";
					tryAgain.style.font = "italic 34px Verdana";
					tryAgain.style.color = "DimGray";
					tryAgain.style.textAlign = "center";
					document.getElementById("jobs_table").appendChild(noResults);
					document.getElementById("jobs_table").appendChild(tryAgain);
					document.getElementById("jobs_display").style.display = "none";
				} else {
					// Populate the table with results
					for (i = 0; i < Object.keys(data).length; i++) {
						var newRow = table.insertRow(table.rows.length);
						var cel1 = newRow.insertCell(0);
						var cel2 = newRow.insertCell(1);
						var cel3 = newRow.insertCell(2);
						var cel4 = newRow.insertCell(3);
						var cel5 = newRow.insertCell(4);
						cel1.innerHTML = "<h4 id=" + "> " + data[i].soc + "</h4>";
						cel2.innerHTML = "<h3 id=" + data[i].soc + "> " + data[i].title + "</h3>";
						cel3.innerHTML = "<p id=" + data[i].soc + "> " + data[i].description + "</p>";
						cel4.innerHTML = "<p id=" + data[i].soc + "> " + data[i].qualifications + "</p>";
						cel5.innerHTML = "<p id=" + data[i].soc + "> " + data[i].tasks + "</p>";
					}
					document.getElementById("jobs_table").appendChild(table);
					//Remove the white space between the table and the footer
					$(".whitespace").get(0).style.setProperty("padding-bottom", "2%");
				}
			}
		});
	}
});