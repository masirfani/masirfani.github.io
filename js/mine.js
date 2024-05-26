const jsonData = {
    sertificate: [
        {
            filename: "sololearn-html.webp",
        },
        {
            filename: "sololearn-javascript.webp",
        },
        {
            filename: "sololearn-php.webp",
        },
        {
            filename: "champion-wdc.webp",
        },
        {
            filename: "competition-edusiber.webp",
        },
        {
            filename: "english-alliance-quiz.webp",
        },
        {
            filename: "sololearn-jquery.webp",
        },
        {
            filename: "sololearn-sql.webp",
        },
        {
            filename: "indosat.webp",
        },
    ],
};

// Step 4: Function to display names
function displayData(data) {

    let item = "";
    let no = 1;
    data.sertificate.forEach((sertificate) => {
        if (no <= 6) {
            item += `
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto shadow" style="cursor: context-menu;">
                <img class="img-fluid" src="img/serti/${sertificate.filename}" alt="">
                </div>
            </div>
            `;
        }
        no++;
        console.log(item);
    });

    $(".sertificate-place").html(item);
}

// Step 5: Call the function with JSON data
displayData(jsonData);
